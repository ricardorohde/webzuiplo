<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Super_admin extends CI_Controller
{

  public $status;
  public $roles;

  function __construct()
    {
      parent::__construct();
        $this->load->model('SuperAdmin_model', 'admin_model', TRUE);
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->status = $this->config->item('status');
        $this->roles = $this->config->item('roles');
    }
  public function index()
  	{
      if(empty($this->session->userdata['email']))
        {
          redirect(site_url().'Super_admin/login/');
        }
          $datanya = array();
          $datanya = $this->session->userdata;
          $datanya['admin'] = $this->db->get('admin')->result_array();
          $datanya['admin'] = $this->db->where_in('id')->get('admin')->row_array();
          $token = base64_decode($this->uri->segment(4));
          $cleanToken = $this->security->xss_clean($token);
          $user_info = $this->admin_model->isTokenValid($cleanToken);

          $data = $this->session->userdata;
          $this->load->view('super_admin/header',$datanya);
          $this->load->view('super_admin/index',$data);
          $this->load->view('super_admin/footer');
  	}
  public function register()
    {
      $this->form_validation->set_rules('firstname', 'First Name', 'required');
      $this->form_validation->set_rules('lastname', 'Last Name', 'required');
      $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        if ($this->form_validation->run() == FALSE)
          {
            $datanya = array();
            $datanya = $this->session->userdata;
            $datanya['admin'] = $this->db->get('admin')->result_array();
            $datanya['admin'] = $this->db->where_in('id')->get('admin')->row_array();
            $token = base64_decode($this->uri->segment(4));
            $cleanToken = $this->security->xss_clean($token);
            $user_info = $this->admin_model->isTokenValid($cleanToken);

            $this->load->view('super_admin/header',$datanya);
            $this->load->view('super_admin/register');
            $this->load->view('super_admin/footer');
          }
          else
            {
              if($this->admin_model->isDuplicate($this->input->post('email')))
                {
                  $this->session->set_flashdata('flash_message', 'User email already exists');
                  redirect(site_url().'Super_admin/login');
                }else
                  {
                    $clean = $this->security->xss_clean($this->input->post(NULL, TRUE));
                    $id = $this->admin_model->insertUser($clean);
                    $token = $this->admin_model->insertToken($id);
                    $qstring = $this->base64url_encode($token);
                    $url = site_url() . 'Super_admin/complete/token/' . $qstring;
                    $link = '<a href="' . $url . '">' . $url . '</a>';
                    $message = '';
                    $message .= '<strong>You have signed up with our website</strong><br>';
                    $message .= '<strong>Please click:</strong> ' . $link;
                    echo $message;
                    exit;
                  };
            }
    }
  protected function _islocal()
    {
      return strpos($_SERVER['HTTP_HOST'], 'local');
    }
  public function complete()
    {
      $token = base64_decode($this->uri->segment(4));
      $cleanToken = $this->security->xss_clean($token);
      $user_info = $this->admin_model->isTokenValid($cleanToken);
      if(!$user_info)
        {
          $this->session->set_flashdata('flash_message', 'Token is invalid or expired');
          redirect(site_url().'Super_admin/login');
        }
          $data = array(
            'firstName'=> $user_info->first_name,
            'email'=>$user_info->email,
            'admin_id'=>$user_info->id,
            'token'=>$this->base64url_encode($token)
            );
          $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
          $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
              if ($this->form_validation->run() == FALSE)
                {
                  $datanya = array();
                  $datanya = $this->session->userdata;
                  $datanya['admin'] = $this->db->get('admin')->result_array();
                  $datanya['admin'] = $this->db->where_in('id')->get('admin')->row_array();
                  $token = base64_decode($this->uri->segment(4));
                  $cleanToken = $this->security->xss_clean($token);
                  $user_info = $this->admin_model->isTokenValid($cleanToken);

                  $this->load->view('super_admin/header',$datanya);
                  $this->load->view('super_admin/complete');
                  $this->load->view('super_admin/header');
                }else
                  {
                    $this->load->library('password');
                    $post = $this->input->post(NULL, TRUE);
                    $cleanPost = $this->security->xss_clean($post);
                    $hashed = $this->password->create_hash($cleanPost['password']);
                    $cleanPost['password'] = $hashed;
                    unset($cleanPost['passconf']);
                    $userInfo = $this->admin_model->updateUserInfo($cleanPost);
                  if(!$userInfo)
                    {
                      $this->session->set_flashdata('flash_message', 'There was a problem updating your record');
                      redirect(site_url().'Super_admin/login');
                    }
                    unset($userInfo->password);
                    foreach($userInfo as $key=>$val){
                    $this->session->set_userdata($key, $val);
                  }
                  redirect(site_url().'Super_admin/login');
                }
    }
  public function login()
    {
      $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
      $this->form_validation->set_rules('password', 'Password', 'required');
        if($this->form_validation->run() == FALSE)
          {
            $this->load->view('super_admin/login');
          }else
            {
              $post = $this->input->post();
              $clean = $this->security->xss_clean($post);
              $userInfo = $this->admin_model->checkLogin($clean);
                if(!$userInfo)
                {
                  $this->session->set_flashdata('flash_message', 'The login was unsucessful');
                  redirect(site_url().'Super_admin/login');
                }
                foreach($userInfo as $key=>$val)
                  {
                    $this->session->set_userdata($key, $val);
                  }
                    redirect(site_url().'Super_admin/');
            }
    }
  public function logout()
    {
      $this->session->sess_destroy();
      redirect(site_url().'Super_admin/login/');
    }
  public function forgot()
    {
      $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
      if($this->form_validation->run() == FALSE)
        {
          $this->load->view('super_admin/forgot');
        }else
          {
            $email = $this->input->post('email');
            $clean = $this->security->xss_clean($email);
            $userInfo = $this->admin_model->getUserInfoByEmail($clean);
            if(!$userInfo)
              {
                $this->session->set_flashdata('flash_message', 'We cant find your email address');
                redirect(site_url().'Super_admin/login');
              }
            if($userInfo->status != $this->status[1])
                {
                  $this->session->set_flashdata('flash_message', 'Your account is not in approved status');
                  redirect(site_url().'Super_admin/login');
                }
                  $token = $this->admin_model->insertToken($userInfo->id);
                  $qstring = $this->base64url_encode($token);
                  $url = site_url() . 'Super_admin/reset_password/token/' . $qstring;
                  $link = '<a href="' . $url . '">' . $url . '</a>';
                  $message = '';
                  $message .= '<strong>A password reset has been requested for this email account</strong><br>';
                  $message .= '<strong>Please click:</strong> ' . $link;
                  echo $message;
                  exit;
          }
    }
  public function reset_password()
    {
      $token = $this->base64url_decode($this->uri->segment(4));
      $cleanToken = $this->security->xss_clean($token);
      $user_info = $this->admin_model->isTokenValid($cleanToken);
        if(!$user_info)
          {
            $this->session->set_flashdata('flash_message', 'Token is invalid or expired');
            redirect(site_url().'Super_admin/login');
          }
            $data = array(
              'firstName'=> $user_info->first_name,
              'email'=>$user_info->email,
              'token'=>$this->base64url_encode($token)
            );
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
            $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
              if ($this->form_validation->run() == FALSE)
                {
                  $this->load->view('super_admin/reset_password', $data);
                }else
                  {
                    $this->load->library('password');
                    $post = $this->input->post(NULL, TRUE);
                    $cleanPost = $this->security->xss_clean($post);
                    $hashed = $this->password->create_hash($cleanPost['password']);
                    $cleanPost['password'] = $hashed;
                    $cleanPost['admin_id'] = $user_info->id;
                    unset($cleanPost['passconf']);
                  if(!$this->admin_model->updatePassword($cleanPost))
                    {
                      $this->session->set_flashdata('flash_message', 'There was a problem updating your password');
                    }else
                      {
                        $this->session->set_flashdata('flash_message', 'Your password has been updated. You may now login');
                      }
                      redirect(site_url().'Super_admin/login');
                  }
    }
  public function base64url_encode($data)
    {
      return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
    }
  public function base64url_decode($data)
    {
      return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT));
    }
  public function termscondition()
  		{
        $datanya = array();
        $datanya = $this->session->userdata;
        $datanya['admin'] = $this->db->get('admin')->result_array();
        $datanya['admin'] = $this->db->where_in('id')->get('admin')->row_array();
        $token = base64_decode($this->uri->segment(4));
        $cleanToken = $this->security->xss_clean($token);
        $user_info = $this->admin_model->isTokenValid($cleanToken);

  						$data['master_termscondition'] = $this->db->get('master_termscondition')->result_array();

              $this->load->view('super_admin/header',$datanya);
              $this->load->view('super_admin/master/TermsCondition/all',$data);
  						$this->load->view('super_admin/footer');
  		}
  public function save_master_termscondition()
  		{
  				$data = array (
  						'id'=>$this->input->post('id'),
  						'isi'=>$this->input->post('isi'));
  				$this->admin_model->save_master_termscondition($data);
  				redirect('Super_admin/termscondition', $data);
  		}
  public function delete_master_termscondition($id)
  		{
  						$this->db->where('id',$id);
  						$this->db->delete('master_termscondition');
  						redirect(base_url('Super_admin/termscondition'));
  		}
  public function edit_master_termscondition($id)
  		{
  			$data = array();
  			$data['master_termscondition'] = $this->db->get('master_termscondition')->result_array();
  			$data['master_termscondition'] = $this->db->where_in('id',$id)->get('master_termscondition')->row_array();
  			$this->admin_model->load('super_admin/master/TermsCondition/edit',$data);
  		}
  public function save_master_termscondition_update()
  					{
  						$data['master_termscondition'] = $this->db->get('master_termscondition')->result_array();
  						$data = $this->input->post();
  						$this->db->where('id', $data['id']);
  						$this->db->update('master_termscondition',$data);
  						$this->admin_model->load('super_admin/master/TermsCondition/all', $data);
  						redirect(base_url('Super_admin/termscondition/all', $data));
  					}
  public function get_master_termscondition_add()
  			    {
  			        $data['master_termscondition'] = $this->db->get('master_termscondition')->result_array();
  			        $this->admin_model->load('super_admin/master/TermsCondition/add', $data);
  			    }
  public function faqandhelp()
      {
        $data['master_faqhelp'] = $this->db->get('master_faqhelp')->result_array();
        $this->admin_model->load('super_admin/master/FaqAndHelp/all',$data);
      }
  public function save_master_faqandhelp()
      {
        $data = array (
            'id'=>$this->input->post('id'),
            'judul'=>$this->input->post('judul'),
            'isi'=>$this->input->post('isi'));
        $this->admin_model->save_master_faqandhelp($data);
        redirect('Super_admin/faqandhelp', $data);
      }
  public function delete_master_faqandhelp($id)
      {
              $this->db->where('id',$id);
              $this->db->delete('master_faqhelp');
              redirect(base_url('Super_admin/termscondition'));
      }
  public function edit_master_faqandhelp($id)
      {
        $data = array();
        $data['master_faqhelp'] = $this->db->get('master_faqhelp')->result_array();
        $data['master_faqhelp'] = $this->db->where_in('id',$id)->get('master_faqhelp')->row_array();

        $this->admin_model->load('super_admin/master/FaqAndHelp/edit',$data);

      }
  public function all_users()
  {
    $datanya = array();
    $datanya = $this->session->userdata;
    $datanya['admin'] = $this->db->get('admin')->result_array();
    $datanya['admin'] = $this->db->where_in('id')->get('admin')->row_array();
    $token = base64_decode($this->uri->segment(4));
    $cleanToken = $this->security->xss_clean($token);
    $user_info = $this->admin_model->isTokenValid($cleanToken);
    $data['users'] = $this->db->get('users')->result_array();
    
    $this->load->view('super_admin/header',$datanya);
    $this->load->view('super_admin/master/users/all',$data);
    $this->load->view('super_admin/footer');
  }
}
