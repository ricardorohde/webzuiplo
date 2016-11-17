<?php
class  User extends CI_Controller{
	function __construct(){
			parent::__construct();
			$this->load->model('user_info');
			$this->baseurl=dirname(dirname(base_url()));
	}
	public function admin()
	{
		$this->load->view('account_admin/template/menu');
	}
	  function members(){
		$data['content']='account_admin/success';
		 $this->load->view('account_admin/v_content',$data);
		}
	   function index(){
			$data['content']='v_content';
			$this->load->view('register/pemilik/free/add',$data);
		}

		function registration(){

	  //  $this->load->view('registration_form');

			$this->load->library('form_validation');

			$this->form_validation->set_rules('firstname', 'First Name', 'trim|required');
			$this->form_validation->set_rules('username', 'Username', 'is_unique[account_admin.username]','trim|required');//accoutn column name and username in account database

			$this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
			$this->form_validation->set_rules('age', 'Age', 'trim|required');
			$this->form_validation->set_rules('emailad', 'Email Address', 'trim|required|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
			$this->form_validation->set_rules('cpassword', 'Password Confirmation', 'trim|required|matches[password]');
			if($this->form_validation->run() == FALSE)
			{
				$this->index();
			}

			else
			{
				if($query == $this->user_info->ranjit_is_creating_user())
				{
					$this->members();
				}
				else
				{
					//$this->load->view('registration');
					$this->index();
				}
			}



		}
	}


 ?>
