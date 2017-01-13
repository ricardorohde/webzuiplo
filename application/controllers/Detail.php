<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('General');
  }
//-------------------------------detail rumah kontrakan-------------------------


  public function detail_rumah_kontrakan($id)
  {
    $data = array();
    $data['master_rumah_kontrakan'] = $this->db->get('master_rumah_kontrakan')->result_array();
    $data['master_rumah_kontrakan'] = $this->db->where_in('id' ,$id)->get('master_rumah_kontrakan')->row_array();
    $this->general->load('DetailRumah/detail_kontrakan',$data);
  }
//---------------------------detail rumah kos-----------------------------------

  public function detail_rumah_kos($id)
  {
    $data = array();
    $data['master_rumah_kos'] = $this->db->get('master_rumah_kos')->result_array();
    $data['master_rumah_kos'] = $this->db->where_in('id',$id)->get('master_rumah_kos')->row_array();
    $this->general->load('DetailRumah/detail_kos', $data);
  }

//---------------------------pesan pencari -------------------------------------

  public function save_pesan_pencari_kontrakan()
    {
      // $data = $this->db->where_in('id',$id)->get('master_rumah_kontrakan')->result_array();
      $data = array (

				'id_rumah_kontrakan'=>$this->input->post('id_rumah_kontrakan'),
        'nama'=>$this->input->post('nama'),
        'email'=>$this->input->post('email'),
        'no_telp'=>$this->input->post('no_telp'),
        'pesan'=>$this->input->post('pesan'));
				$this->general->save_pesan_pencari_kontrakan_add($data);
        $data['data'] = "Pesan anda berhasil terkirim.";
			redirect('Welcome', $data);
    }

//------------------------------------------------------------------------------
}
