<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General_tes extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  public function get()
  {
        $query = $this->db->get('register_pemilik');
        return $query;
    }
}
