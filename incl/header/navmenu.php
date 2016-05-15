<?php

class NavMenu {
  
  public function showLogin() {
    echo "<li><a href='login'>Inloggen</a></li>";
  }
  
  public function showLogout() {
    echo "<li><a href='logout'>Uitloggen (".$_SESSION['signedin']['account_username'].")</a></li>";
  }
}

$navmenu = new NavMenu();
?>

<div class="row bnr-menu">
  <div class="medium-3 columns logo">
    <a href="home"><img src="http://placehold.it/450x183&text=LOGO" alt="logo"></a>
  </div>
  <div class="medium-6 columns settings">
    <input type="text" placeholder="Zoek uw wijn">
    <div class="button-group large btn-menu-one">
      <button href="#" data-toggle="drop1" class="button dropdown"><i class="fi-torso"></i> Account</button>
      <ul class="dropdown-pane" id="drop1" data-dropdown data-auto-focus="true">
        <li><a href="account">Mijn account</a></li>
        <li><a href="registreer">Account aanmaken</a></li>
        <?php
          if(empty($_SESSION['signedin'])) {
            $navmenu->showLogin();
          }
          else {
            $navmenu->showLogout();
          }
        ?>
      </ul>
      <a class="button"><i class="fi-shopping-cart"></i> Winkelwagen</a>
    </div> 
  </div>
</div>

<div class="row btn-menu-two">
  <div class="button-group grp-menu">
    <a class="button btn-width">Alle producten</a>
    <a class="button btn-width">Rode wijn</a>
    <a class="button btn-width">Witte wijn</a>
    <a class="button btn-width">Rosé wijn</a>
  </div>
</div>