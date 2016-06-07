<?php
/**
 *
 */
class General extends CI_Model
{
  public function __construct()
   {
       parent::__construct();
       $this->load->database();
   }

  public function load($page, $data = array())
  {
      $this->load->view('dashboard/header');
      // $this->load->view('dashboard/menu');
      $this->load->view($page, $data);
      // $this->load->view('dashboard/footer');
  // $this->general->logdata($page,$data);

  }
  public  function get()
    {
        $query = $this->db->get('register_pemilik');
        return $query;
    }


}
