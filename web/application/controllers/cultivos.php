<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require 'public_controller.php';
require APPPATH.'models/Cultivo.php';

class Cultivos extends PublicController {

  public function __construct()
  {
    parent::__construct();
    $this->load->helper('general');
  }

  public function index($id,$name)
  {
    $vars =& $this->data;

    $cultivo = Doctrine::getTable('Cultivo')->find($id);

    if(!$cultivo) {
      error_404('No tenemos informacion acerca de ese cultivo');
    } else {
      $vars['cultivo'] =& $cultivo;
    }

    $this->load->view('components/ficha', $vars);
  }
}