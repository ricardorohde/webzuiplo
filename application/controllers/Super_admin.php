<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Super_admin extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('SuperAdmin_model');
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->load->view('super_admin/header');
    $this->load->view('super_admin/index');
    $this->load->view('super_admin/footer');
  }
//---------------------------------Users----------------------------------------
  public function users()
  {
    $data['users'] = $this->db->get('users')->result_array();
    $this->load->view('super_admin/header');
    $this->load->view('super_admin/master/users/all', $data);
    $this->load->view('super_admin/footer');
  }
//----------------------------Terms & condition---------------------------------
  public function termscondition()
		{
						$data['master_termscondition'] = $this->db->get('master_termscondition')->result_array();
						$this->SuperAdmin_model->load('super_admin/master/TermsCondition/all',$data);
		}

		public function save_master_termscondition()
		{
				$data = array (

						'id'=>$this->input->post('id'),
						'isi'=>$this->input->post('isi'));
				$this->SuperAdmin_model->save_master_termscondition($data);
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

			$this->SuperAdmin_model->load('super_admin/master/TermsCondition/edit',$data);

		}


		public function save_master_termscondition_update()
					{
						$data['master_termscondition'] = $this->db->get('master_termscondition')->result_array();
						$data = $this->input->post();
						$this->db->where('id', $data['id']);
						$this->db->update('master_termscondition',$data);
						$this->SuperAdmin_model->load('super_admin/master/TermsCondition/all', $data);
						redirect(base_url('Super_admin/termscondition/all', $data));
					}
					public function get_master_termscondition_add()
			    {
			        $data['master_termscondition'] = $this->db->get('master_termscondition')->result_array();
			        $this->SuperAdmin_model->load('super_admin/master/TermsCondition/add', $data);
			    }
//------------------------------------------------------------------------------

}
