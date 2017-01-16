<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tipe extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('User_model', 'user_model', TRUE);
  }

  public function premium()
  {
    $datanya = array();
    $datanya = $this->session->userdata;
    $datanya['users'] = $this->db->get('users')->result_array();
      $datanya['users'] = $this->db->where_in('id')->get('users')->row_array();
      $token = base64_decode($this->uri->segment(4));
      $cleanToken = $this->security->xss_clean($token);
      $user_info = $this->user_model->isTokenValid($cleanToken);
    $this->load->view('admin/lte_header',$datanya);
    $this->load->view('admin/master/upgrade/premium/add');
    $this->load->view('admin/lte_footer');
  }
  //-------------------------gold-----------------------------------------------
  public function gold()
  {
    $datanya = array();
    $datanya = $this->session->userdata;
    $datanya['users'] = $this->db->get('users')->result_array();
      $datanya['users'] = $this->db->where_in('id')->get('users')->row_array();
      $token = base64_decode($this->uri->segment(4));
      $cleanToken = $this->security->xss_clean($token);
      $user_info = $this->user_model->isTokenValid($cleanToken);

    $this->load->view('admin/lte_header',$datanya);
    $this->load->view('admin/master/upgrade/gold/add');
    $this->load->view('admin/lte_footer');
  }
}
