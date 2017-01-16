<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('General');
  }

  function index()
  { 
    $this->load->model('user_model');
    $data = array();
    $data['get_rumah_kos'] = $this->user_model->get_rumah_kos();
    $data['get_rumah_kontrakan'] = $this->user_model->get_rumah_kontrakan();
    $data['view'] = $this->general->get_rumah_kontrakan();
    $this->general->load('dashboard/menu',$data );

    // $data['get_rumah_kos'] = $this->db->get('master_rumah_kos')->result_array();
    // $this->general->load('dashboard/menu',$data);

  }

//-----------------------Public Terms & condition-------------------------------
  public function TermsAndCondition()
  {

      $data['master_termscondition'] = $this->db->get('master_termscondition')->result_array();
      $this->general->load('dashboard/TermsAndCondition', $data);

  }
//------------------------------------------------------------------------------
//--------------------------Blog------------------------------------------------
  public function Blog()
  {
    $this->load->model('user_model');
    $data = array();
    $data['blog_kos'] = $this->user_model->get_rumah_kos();
    $data['blog_kontrakan'] = $this->user_model->get_rumah_kontrakan();
    $this->general->load('dashboard/Blog/menu',$data);
  }
  public function Blog_kos()
  {
    $this->load->model('user_model');
    $data['blog_kos'] = $this->user_model->get_rumah_kos();
    $this->general->load('dashboard/Blog/menu_kos',$data);
  }
  public function Blog_kontrakan()
  {
    $this->load->model('user_model');
    $data['blog_kontrakan'] = $this->user_model->get_rumah_kontrakan();
    $this->general->load('dashboard/Blog/menu_kontrakan',$data);
  }
  public function Blog_termsandcondition()
  {
    $data['master_termscondition'] = $this->db->get('master_termscondition')->result_array();
    $this->general->load('dashboard/Blog/menu_termsandcondition', $data);
  }
  public function Blog_faqandhelp()
  {
    $this->general->load('dashboard/Blog/menu_faqandhelp');
  }
//------------------------------------------------------------------------------
public function tesmaps()
{
  $this->load->view('tesmaps');
}

}
