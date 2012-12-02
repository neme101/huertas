<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require 'public_controller.php';

class Wizard extends PublicController {

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $vars =& $this->data;

    $vars['body_class'] = 'wizard';
    $vars['page'] = 'wizard/step1';
    $this->load->view('template', $vars);
  }

}

/* End of file wizard.php */
/* Location: ./application/controllers/wizard.php */