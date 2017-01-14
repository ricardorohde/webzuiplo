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
//------------------------pesan pencari-----------------------------------------
  public function save_master_pesan_pencari($data)
  {
    $this->db->insert('master_pesan_pencari', $data);
  }

  public function save_pesan_pencari_kontrakan_add($data)
  {
    $this->db->insert('master_pesan_pencari_kontrakan', $data);
  }
//------------------------------------------------------------------------------
public  function get()
{
    $query = $this->db->get('register_pemilik');
    return $query;
}
  public  function get_rumah_kontrakan()
  {
      $query = $this->db->get('master_rumah_kontrakan');
      return $query;
  }
}
