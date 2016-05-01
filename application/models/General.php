<?php
/**
 *
 */
class General extends CI_Model
{

  public function load($page, $data = array())
  {
      $this->load->view('dashboard/header');
      // $this->load->view('dashboard/menu');
      $this->load->view($page, $data);
      // $this->load->view('dashboard/footer');
  // $this->general->logdata($page,$data);

  }
}
