<?php
/**
 *
 */
class Register extends CI_Controller
{


    //owner premium


    //owner gold
    public function owner_gold()
    {
    $this->general->load('register/pemilik/free/add');

    }

    public function tenant(){
      $this->general->load('register/pencari/add');
    }
}
