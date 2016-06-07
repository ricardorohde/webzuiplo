<?php
/**
 *
 */
class Manage extends CI_Controller
{

  public function __construct()
    {
      parent::__construct();
      $this->load->model('General');
    }

    //admin
    public function owner_admin()
    {
    $this->general->load('manage/admin_pemilik/dashboard');

    }
    //super_admin
    public function super_admin()
    {
      $this->load->view('manage/super_admin/dashboard');
    }
}
