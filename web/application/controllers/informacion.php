<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require 'public_controller.php';

class Informacion extends PublicController {

  public function __construct()
  {
    parent::__construct();
    $this->load->helper('general');
  }

  public function router($page)
  {
    $vars =& $this->data;

    $vars['body_class'] = 'wizard';
    $vars['page'] = 'static/'.$page;
    $this->load->view('template', $vars);
  }
}