<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require 'public_controller.php';
require APPPATH.'models/Cultivo.php';

class Wizard extends PublicController {

  public function __construct()
  {
    parent::__construct();
    $this->load->helper('general');
  }

  public function index()
  {
    $vars =& $this->data;

    $vars['body_class'] = 'wizard';
    $vars['page'] = 'wizard/steps';
    $this->load->view('template', $vars);
  }

  public function resultados()
  {
    $vars =& $this->data;

    $pais = $this->input->post('pais',true);
    $almacigos = $this->input->post('almacigos',true);
    $inicio_de_cosecha = $this->input->post('inicio_de_plantado',true);
    $tiempo_de_cosecha = $this->input->post('tiempo_de_cosecha',true);
    $filters = array(
      'pais' => $pais,
      'almacigos' => $almacigos == 'si' ? false : true,
      'inicio_de_cosecha' => $inicio_de_cosecha,
      'tiempo_de_cosecha' => $tiempo_de_cosecha
      );
    $sugerencias = CultivoTable::get_suggestions(20,$filters);

    $vars['sugerencias'] =& $sugerencias;
    $vars['body_class'] = 'wizard';
    $vars['page'] = 'wizard/resultados';
    $this->load->view('template', $vars);
  }

  public function todos()
  {
    $vars =& $this->data;

    $sugerencias = CultivoTable::get_suggestions();

    $vars['sugerencias'] =& $sugerencias;
    $vars['body_class'] = 'wizard';
    $vars['page'] = 'wizard/resultados';
    $this->load->view('template', $vars);
  }
}

/* End of file wizard.php */
/* Location: ./application/controllers/wizard.php */