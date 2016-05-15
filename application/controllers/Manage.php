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

    public function owner_ad()
    {
    $this->general->load('manage/pemilik/admin');

    }
}
