<?php

class Globals {
  protected $project = "/wijn_winkel";
  
  public $navbar_php = "/navbar.php";
  public $navmenu_php = "/navmenu.php";
  public $slider_php = "/slider.php";
  public $highlights_php = "/highlights.php";
  public $footer_php = "/footer.php";
  
  private $root;
  private $incl = "/incl";
  private $header = "/header";
  private $content = "/content";
  private $footer = "/footer";
  
  public function __construct() {
    $this->root = $_SERVER['DOCUMENT_ROOT'].$this->project;
    $this->dirPaths();
    $this->locPaths();
    $this->inclScripts();
    $this->locScripts();
  }
  
  public function dirPaths() {
    $this->incl = $this->root.$this->incl;
    
    $this->header = $this->incl.$this->header;
    $this->content = $this->incl.$this->content;
    $this->footer = $this->incl.$this->footer;
  }
  
  public function locPaths() {
    
  }
  
  public function inclScripts() {
    $this->navbar_php = $this->header.$this->navbar_php;
    $this->navmenu_php = $this->header.$this->navmenu_php;
    $this->slider_php = $this->header.$this->slider_php;
    
    $this->highlights_php = $this->content.$this->highlights_php;
    
    $this->footer_php = $this->footer.$this->footer_php;
  }
  
  public function locScripts() {
    
  }
}

$globals = new Globals();
?>