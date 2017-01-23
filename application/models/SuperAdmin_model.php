<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuperAdmin_model extends CI_Model{
  public $status;
    public $roles;

    function __construct(){
        parent::__construct();
        $this->status = $this->config->item('status');
        $this->roles = $this->config->item('roles');
    }
    public function load($page, $data = array())
    {
        $this->load->view('super_admin/header');
        $this->load->view($page, $data);
        $this->load->view('super_admin/footer');
    }

    public function insertUser($d)
    {
            $string = array(
                'first_name'=>$d['firstname'],
                'last_name'=>$d['lastname'],
                'email'=>$d['email'],
                'role'=>$this->roles[0],
                'status'=>$this->status[0]
            );
            $q = $this->db->insert_string('admin',$string);
            $this->db->query($q);
            return $this->db->insert_id();
    }

    public function isDuplicate($email)
    {
        $this->db->get_where('admin', array('email' => $email), 1);
        return $this->db->affected_rows() > 0 ? TRUE : FALSE;
    }

    public function insertToken($admin_id)
    {
        $token = substr(sha1(rand()), 0, 30);
        $date = date('Y-m-d');

        $string = array(
                'token'=> $token,
                'admin_id'=>$admin_id,
                'created'=>$date
            );
        $query = $this->db->insert_string('token_a',$string);
        $this->db->query($query);
        return $token . $admin_id;

    }

    public function isTokenValid($token)
    {
       $tkn = substr($token,0,30);
       $uid = substr($token,30);

        $q = $this->db->get_where('token_a', array(
            'token_a.token' => $tkn,
            'token_a.admin_id' => $uid), 1);

        if($this->db->affected_rows() > 0){
            $row = $q->row();

            $created = $row->created;
            $createdTS = strtotime($created);
            $today = date('Y-m-d');
            $todayTS = strtotime($today);

            if($createdTS != $todayTS){
                return false;
            }

            $user_info = $this->getUserInfo($row->admin_id);
            return $user_info;

        }else{
            return false;
        }
    }
    public function getUserInfo($id)
    {
        $q = $this->db->get_where('admin', array('id' => $id), 1);
        if($this->db->affected_rows() > 0){
            $row = $q->row();
            return $row;
        }else{
            error_log('no user found getUserInfo('.$id.')');
            return false;
        }
    }

    public function updateUserInfo($post)
    {
        $data = array(
               'password' => $post['password'],
               'last_login' => date('Y-m-d h:i:s A'),
               'status' => $this->status[1]
            );
        $this->db->where('id', $post['admin_id']);
        $this->db->update('admin', $data);
        $success = $this->db->affected_rows();

        if(!$success){
            error_log('Unable to updateUserInfo('.$post['admin_id'].')');
            return false;
        }

        $user_info = $this->getUserInfo($post['admin_id']);
        return $user_info;
    }

    public function checkLogin($post)
    {
        $this->load->library('password');
        $this->db->select('*');
        $this->db->where('email', $post['email']);
        $query = $this->db->get('admin');
        $userInfo = $query->row();

        if(!$this->password->validate_password($post['password'], $userInfo->password)){
            error_log('Unsuccessful login attempt('.$post['email'].')');
            return false;
        }

        $this->updateLoginTime($userInfo->id);

        unset($userInfo->password);
        return $userInfo;
    }

    public function updateLoginTime($id)
    {
        $this->db->where('id', $id);
        $this->db->update('admin', array('last_login' => date('Y-m-d h:i:s A')));
        return;
    }

    public function getUserInfoByEmail($email)
    {
        $q = $this->db->get_where('admin', array('email' => $email), 1);
        if($this->db->affected_rows() > 0){
            $row = $q->row();
            return $row;
        }else{
            error_log('no user found getUserInfo('.$email.')');
            return false;
        }
    }

    public function updatePassword($post)
    {
        $this->db->where('id', $post['admin_id']);
        $this->db->update('admin', array('password' => $post['password']));
        $success = $this->db->affected_rows();

        if(!$success){
            error_log('Unable to updatePassword('.$post['admin_id'].')');
            return false;
        }
        return true;
    }
  }
