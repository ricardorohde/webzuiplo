<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General extends CI_Model{

  public function __construct()
  {
    parent::__construct();
  }
  public function load($page, $data = array())
  {
      $this->load->view('dashboard/header');
      $this->load->view($page, $data);
      $this->load->view('dashboard/footer');
  }
//-------------------------Agent------------------------------------------------

}
