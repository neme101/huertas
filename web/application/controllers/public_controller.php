<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

abstract class PublicController extends CI_Controller {

  public function __construct()
  {
    parent::__construct();

    // Data Sources
    $this->data['datasources'] = $this->get_datasources();

    // Default values
    $this->data['has_top_navbar'] = false;
  }

  /**
   * Returns the used datasources
   *
   * @return array
   * @author Juan Peon <nemesys101@gmail.com>
   **/
  private function get_datasources()
  {
    return array(
      );
  }
}