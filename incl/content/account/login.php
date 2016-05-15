<?php

class Login extends Database {
  public $username = "Gebruikersnaam";
  public $password = "Wachtwoord";
  
  private $usr;
  private $pwd;
  private $accounts;
  private $row;
  private $key;
  
  public function __construct() {
    if(isset($_POST['login'])) {
      $this->usrError();
      $this->pwdError();
      
      if(!empty($_POST['username']) and !empty($_POST['password'])) {
        $this->connDatabase();
        $this->dbError();
        $this->escString();
        $this->qryDatabase();
        if($this->row == 1) {
          $this->initSession();
          //$this->generateKey();
          //$this->storeKey();
          //$this->initCookie();
          $this->returnPage();
        }
        if($this->row == 0) {
          $this->rowError();
        }
      }
    }
  }
  
  public function usrError() {
    if(empty($_POST['username'])) {
      $this->username = "Vul uw gebruiksersnaam in";
    }
  }
  
  public function pwdError() {
    if(empty($_POST['password'])) {
      $this->password = "Vul uw wachtwoord in";
    }
  }
  
  public function escString() {
    $this->usr = $_POST['username'];
    $this->pwd = $_POST['password'];
    
    $this->usr = mysqli_real_escape_string($this->db, $this->usr);
    $this->pwd = mysqli_real_escape_string($this->db, $this->pwd);
  }
  
  public function qryDatabase() {
    $this->sql = "
      SELECT a.account_id, a.account_username, a.account_rights
			FROM accounts AS a
			WHERE a.account_username = '".$this->usr."'
				AND a.account_password = '".$this->pwd."'
    ";
    
    $this->query = mysqli_query($this->db, $this->sql);
    
    while($this->rows = mysqli_fetch_assoc($this->query)) {
      $this->accounts = $this->rows;
    }
    
    $this->row = mysqli_num_rows($this->query);
  }
  
  public function initSession() {
    $_SESSION['signedin'] = $this->accounts;
  }
  
  public function generateKey() {
    $this->key = md5(microtime().rand());
  }
  
  public function storeKey() {
    
    $this->sql = "
      INSERT INTO cookies (cookie_id, cookie_key)
      VALUES ('".$_SESSION['signedin']['account_id']."', '".$this->key."');
    ";
    
    $this->query = mysqli_query($this->db, $this->sql);
  }
  
  public function initCookie() {
    setcookie("signedin", $this->key, time() + (3600 * 24 * 365), "/");
  }
  
  public function rowError() {
    $this->username = "Gebruikersnaam is verkeerd";
    $this->password = "Wachtwoord is verkeerd";
  }
  
  public function returnPage() {
    header("Location: http://".$_SERVER['SERVER_NAME'].$this->project.$this->home);
  }
}

$login = new Login();
?>

<div class="row column text-center login">
  <h2>Inloggen of een account aanmaken</h2>
  <hr>
</div>

<div class="row">
  <div class="small-6 columns">
    <h4>Nieuw Hier?</h4> <br>

    <i class="lgn-txt-col">Registreren is makkelijk en gratis!</i>
    <ul class="benefits">
      <li>Snelle afrekening</li>
      <li>Meerdere afleveradressen opslaan</li>
      <li>Bekijk en volg bestellingen, en meer</li>
    </ul>
    <button type="submit" class="button">Account aanmaken</button>
  </div>
  <div class="small-6 columns vline">
    <h4>Een vorige keer uw gegevens bewaard?</h4>

    <i class="lgn-txt-col">Als u een account bij ons hebt, log dan in a.u.b.</i>
    <form method="post">
      <div class="row">
        <div class="medium-12 columns">
          <label>Gebruikersnaam *
            <input type="text" class="text-input" name="username" placeholder="<?php echo $login->username; ?>">
          </label>
        </div>
        <div class="medium-12 columns">
          <label>Wachtwoord *
            <input type="password" class="text-input" name="password" placeholder="<?php echo $login->password; ?>">
          </label>
        </div>
        <div class="medium-12 columns">
          <button type="submit" class="button lgn-submit" name="login">Inloggen</button>
        </div>
      </div>
    </form>
  </div>
</div>

<hr>