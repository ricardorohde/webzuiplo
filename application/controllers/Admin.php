<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

  public function __construct()
  {
    parent::__construct();

  }

  function index()
  {
    $data['users'] = $this->db->get('users')->result_array();
      $this->load->view('admin/lte_header');
      $this->load->view('admin/setting_profile', $data);
      $this->load->view('admin/lte_footer');
  }

}
