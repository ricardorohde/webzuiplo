<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuperAdmin_model extends CI_Model{

  public function load($page, $data = array())
  {
      $this->load->view('super_admin/header');
      $this->load->view($page, $data);
      $this->load->view('super_admin/footer');
  }

//----------------------------Terms & condition---------------------------------
    public function save_master_termscondition($data)
    {
        $this->db->insert('master_termscondition', $data);
    }
    public function save_master_termscondition_update($data)
    {
        $this->db->update('master_termscondition', $data);
    }

    public function get_master_termscondition($id)
    {
        $this->db->where('id', $id);
        $xa = $this->db->get('master_termscondition');
        $xa = $xa->row_array();

        return $xa;
    }
//----------------------------FAQ & Help----------------------------------------

    public function save_master_faqandhelp($data)
    {
      $this->db->insert('master_faqhelp', $data);
    }
    public function save_master_faqandhelp_update($data)
    {
        $this->db->update('master_faqhelp', $data);
    }

    public function get_master_faqandhelp($id)
    {
        $this->db->where('id', $id);
        $xa = $this->db->get('master_faqhelp');
        $xa = $xa->row_array();

        return $xa;
    }
//------------------------------------------------------------------------------



//------------------------------------------------------------------------------
  }
