<?php

class Globals {
  protected $project = "/wijn_winkel";
  
  public $navbar_php = "/navbar.php";
  public $slider_php = "/slider.php";
  
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
    $this->slider_php = $this->header.$this->slider_php;
  }
  
  public function locScripts() {
    
  }
}

$globals = new Globals();
?>