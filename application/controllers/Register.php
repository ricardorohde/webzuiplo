<?php
/**
 *
 */
class Register extends CI_Controller
{

  public function __construct()
    {
      parent::__construct();
      $this->load->model('General');
    }

    public function owner()
    {
    $this->general->load('register/pemilik/add');

    }
}
