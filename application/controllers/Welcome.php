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
    $this->general->load('dashboard/menu');
  }
//-----------------------Public Terms & condition-------------------------------
  public function TermsAndCondition()
  {
    $data['master_termscondition'] = $this->db->get('master_termscondition')->result_array();
    $this->general->load('dashboard/TermsAndCondition', $data);

  }
//------------------------------------------------------------------------------

}
