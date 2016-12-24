<?php
   class User_info extends CI_Model
        {
      function ranjit_is_creating_user()
   {
     $insert_user_in_database=array(
       'type_register' => 'Free',
     'firstname' => $this->input->post('firstname'),
     'lastname'  => $this->input->post('lastname'),
     'age'       => $this->input->post('age'),
     'gender'    => $this->input->post('gender'),
     'emailad'   => $this->input->post('emailad'),
     'username'  => $this->input->post('username'),
     'password'  => sha1($this->input->post('password')),     );

     $query=$this->db->insert('account_admin',$insert_user_in_database);
     return $query;

     }


    }



   ?>
