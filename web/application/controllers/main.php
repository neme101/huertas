<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require 'public_controller.php';

class Main extends PublicController {

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $vars =& $this->data;

    $vars['page'] = '';
    $this->load->view('template', $vars);
  }

}

/* End of file main.php */
/* Location: ./application/controllers/main.php */