<?php
/**
 *
 */
class Find extends CI_Controller
{
  public function __construct()
    {
      parent::__construct();
      $this->load->model('General');
    }

    public function find_in_here()
    {

      $data['view'] = $this->general->get();
      $this->general->load('find/pencari/find',$data);
    }


}
