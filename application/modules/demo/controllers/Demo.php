<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Demo extends MX_Controller {
  public function __construct(){
    parent::__construct();
  }

  public function index(){
    echo "<h2>Welcome to Demo Module</h2>";
  }
}
