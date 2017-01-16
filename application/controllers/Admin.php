<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('User_model', 'user_model', TRUE);
  }

  function index()
  {
    $datanya = array();
    $datanya = $this->session->userdata;
    $datanya['users'] = $this->db->get('users')->result_array();
      $datanya['users'] = $this->db->where_in('id')->get('users')->row_array();
      $token = base64_decode($this->uri->segment(4));
      $cleanToken = $this->security->xss_clean($token);
      $user_info = $this->user_model->isTokenValid($cleanToken);



    $data['users'] = $this->db->get('users')->result_array();
    $data['users'] = $this->db->where('id')->get('users')->row_array();

      $this->load->view('admin/lte_header',$datanya);
      $this->load->view('admin/setting_profile', $data);
      $this->load->view('admin/lte_footer');
  }
    public function pemilik_update()
    {

      $data = $this->input->post();
      $this->db->where('id', $data['id']);
      $this->db->update('users',$data);
      redirect(base_url('Admin'));
    }
  //---------------------------------------------------------------------------
  public function Mess()
  {
    $datanya = array();
    $datanya = $this->session->userdata;
    $datanya['users'] = $this->db->get('users')->result_array();
      $datanya['users'] = $this->db->where_in('id')->get('users')->row_array();
      $token = base64_decode($this->uri->segment(4));
      $cleanToken = $this->security->xss_clean($token);
      $user_info = $this->user_model->isTokenValid($cleanToken);

        $data['master_pesan_pencari_kontrakan'] = $this->user_model->master_pesan_pencari_kontrakan();


    $this->load->view('admin/lte_header', $datanya);
    $this->load->view('admin/master/mess/all',$data);
    $this->load->view('admin/lte_footer');
  }
  public function Read_mess()
  {
    $datanya = array();
    $datanya = $this->session->userdata;
    $datanya['users'] = $this->db->get('users')->result_array();
      $datanya['users'] = $this->db->where_in('id')->get('users')->row_array();
      $token = base64_decode($this->uri->segment(4));
      $cleanToken = $this->security->xss_clean($token);
      $user_info = $this->user_model->isTokenValid($cleanToken);
    $this->load->view('admin/lte_header',$datanya);
    $this->load->view('admin/master/mess/read');
    $this->load->view('admin/lte_footer');
  }
//---------------------------------Agen Pemilik Rumah---------------------------
  public function all_pemilik_rumah()
  {
    $data = array();
    $data['get_users'] = $this->user_model->get_users();
    // $data['get_rumah_kontrakan'] = $this->user_model->get_rumah_kontrakan();

    $this->general->load('admin/agen/all',$data);
  }
  public function detail_user($id)
  {
    $data = array();
    $data['users'] = $this->db->get('users')->result_array();
    $data['users'] = $this->db->where_in('id' ,$id)->get('users')->row_array();

	  $data['master_rumah_kontrakan'] = $this->db->where_in('id_pemilik' ,$id)->get('master_rumah_kontrakan')->row_array();

    $data['master_rumah_kos'] = $this->db->where_in('id_pemilik' ,$id)->get('master_rumah_kos')->row_array();

    $this->general->load('admin/agen/detail',$data);
  }
//------------------------------------------------------------------------------
}
