<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tipe extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function premium()
  {
    $this->load->view('admin/lte_header');
    $this->load->view('admin/master/upgrade/premium');
    $this->load->view('admin/lte_footer');
  }

}
