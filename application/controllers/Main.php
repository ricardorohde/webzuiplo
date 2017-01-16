
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

        public $status;
        public $roles;

        function __construct(){
            parent::__construct();
            $this->load->model('User_model', 'user_model', TRUE);
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
            $this->status = $this->config->item('status');
            $this->roles = $this->config->item('roles');
        }
//-----------------------------------Admin--------------------------------------
public function index()
       {
          if(empty($this->session->userdata['email'])){
              redirect(site_url().'main/login/');
          }
          $data = array();
          $data = $this->session->userdata;
          $data['users'] = $this->db->get('users')->result_array();
            $data['users'] = $this->db->where_in('id')->get('users')->row_array();
            $data['master_pesan_pencari_kontrakan'] = $this->db->where_in('id')->get('master_pesan_pencari_kontrakan')->row_array();
            $token = base64_decode($this->uri->segment(4));
            $cleanToken = $this->security->xss_clean($token);
            $user_info = $this->user_model->isTokenValid($cleanToken);

            $data['master_pesan_pencari_kontrakan'] = $this->db->get('master_pesan_pencari_kontrakan')->result_array();
            $data['master_pesan_pencari_kontrakan'] = $this->db->where_in('id_rumah_kontrakan')->get('master_pesan_pencari_kontrakan')->row_array();
              $data['master_pesan_pencari_kontrakan'] = $this->db->where_in('id_pemilik')->get('master_pesan_pencari_kontrakan')->row_array();


          $this->load->view('admin/lte_header',$data);
          $this->load->view('admin/index', $data);
          $this->load->view('admin/lte_footer');
        }
	// public function index($id)
	//        {
  //           if(empty($this->session->userdata['email'])){
  //               redirect(site_url().'main/login/');
  //           }
  //           $data = array();
  //           $data = $this->session->userdata;
  //           $data['users'] = $this->db->get('users')->result_array();
  //           $data['users'] = $this->db->where_in('id' ,$id)->get('users')->row_array();
  //             // $token = base64_decode($this->uri->segment(4));
  //             $cleanToken = $this->security->xss_clean($token);
  //             $user_info = $this->user_model->isTokenValid($cleanToken);
  //
  //
  //
  //           $this->load->view('admin/lte_header');
  //           $this->load->view('admin/index', $data);
  //           $this->load->view('admin/lte_footer');
	//         }
  public function register()
          {
            $this->form_validation->set_rules('firstname', 'First Name', 'required');
            $this->form_validation->set_rules('lastname', 'Last Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('admin/header');
                $this->load->view('admin/register');
                $this->load->view('admin/footer');
            }else
            {
                if($this->user_model->isDuplicate($this->input->post('email')))
                {
                    $this->session->set_flashdata('flash_message', 'User email already exists');
                    redirect(site_url().'main/login');
                }else
                {
                    $clean = $this->security->xss_clean($this->input->post(NULL, TRUE));
                    $id = $this->user_model->insertUser($clean);
                    $token = $this->user_model->insertToken($id);
                    $qstring = $this->base64url_encode($token);
                    $url = site_url() . 'main/complete/token/' . $qstring;
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
            $user_info = $this->user_model->isTokenValid($cleanToken);
            if(!$user_info)
            {
              $this->session->set_flashdata('flash_message', 'Token is invalid or expired');
                redirect(site_url().'main/login');
            }
            $data = array(
                'firstName'=> $user_info->first_name,
                'email'=>$user_info->email,
                'user_id'=>$user_info->id,
                'token'=>$this->base64url_encode($token)
            );

            $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
            $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('admin/header');
                $this->load->view('admin/complete', $data);
                  $this->load->view('admin/footer');

            }else{

                $this->load->library('password');
                $post = $this->input->post(NULL, TRUE);

                $cleanPost = $this->security->xss_clean($post);

                $hashed = $this->password->create_hash($cleanPost['password']);
                $cleanPost['password'] = $hashed;
                unset($cleanPost['passconf']);
                $userInfo = $this->user_model->updateUserInfo($cleanPost);

                if(!$userInfo){
                    $this->session->set_flashdata('flash_message', 'There was a problem updating your record');
                    redirect(site_url().'main/login');
                }

                unset($userInfo->password);

                foreach($userInfo as $key=>$val){
                    $this->session->set_userdata($key, $val);
                }
                redirect(site_url().'main/');

            }
        }

        public function login()
        {
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if($this->form_validation->run() == FALSE) {
                $this->load->view('admin/header');
                $this->load->view('admin/login');
                $this->load->view('admin/footer');

            }else{

                $post = $this->input->post();
                $clean = $this->security->xss_clean($post);

                $userInfo = $this->user_model->checkLogin($clean);

                if(!$userInfo){
                    $this->session->set_flashdata('flash_message', 'The login was unsucessful');
                    redirect(site_url().'main/login');
                }
                foreach($userInfo as $key=>$val){
                    $this->session->set_userdata($key, $val);
                }
                redirect(site_url().'main/');
            }

        }

        public function logout()
        {
            $this->session->sess_destroy();
            redirect(site_url().'welcome/index');
        }

        public function forgot()
        {

            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

            if($this->form_validation->run() == FALSE) {
                $this->load->view('admin/header');
                $this->load->view('admin/forgot');

            }else{
                $email = $this->input->post('email');
                $clean = $this->security->xss_clean($email);
                $userInfo = $this->user_model->getUserInfoByEmail($clean);

                if(!$userInfo){
                    $this->session->set_flashdata('flash_message', 'We cant find your email address');
                    redirect(site_url().'main/login');
                }

                if($userInfo->status != $this->status[1]){ //if status is not approved
                    $this->session->set_flashdata('flash_message', 'Your account is not in approved status');
                    redirect(site_url().'main/login');
                }

                //build token

                $token = $this->user_model->insertToken($userInfo->id);
                $qstring = $this->base64url_encode($token);
                $url = site_url() . 'main/reset_password/token/' . $qstring;
                $link = '<a href="' . $url . '">' . $url . '</a>';

                $message = '';
                $message .= '<strong>A password reset has been requested for this email account</strong><br>';
                $message .= '<strong>Please click:</strong> ' . $link;

                echo $message; //send this through mail
                exit;

            }

        }

        public function reset_password()
        {
            $token = $this->base64url_decode($this->uri->segment(4));
            $cleanToken = $this->security->xss_clean($token);

            $user_info = $this->user_model->isTokenValid($cleanToken);

            if(!$user_info){
                $this->session->set_flashdata('flash_message', 'Token is invalid or expired');
                redirect(site_url().'main/login');
            }
            $data = array(
                'firstName'=> $user_info->first_name,
                'email'=>$user_info->email,
                'token'=>$this->base64url_encode($token)
            );

            $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
            $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('admin/header');
                $this->load->view('admin/reset_password', $data);

            }else{

                $this->load->library('password');
                $post = $this->input->post(NULL, TRUE);
                $cleanPost = $this->security->xss_clean($post);
                $hashed = $this->password->create_hash($cleanPost['password']);
                $cleanPost['password'] = $hashed;
                $cleanPost['user_id'] = $user_info->id;
                unset($cleanPost['passconf']);
                if(!$this->user_model->updatePassword($cleanPost)){
                    $this->session->set_flashdata('flash_message', 'There was a problem updating your password');
                }else{
                    $this->session->set_flashdata('flash_message', 'Your password has been updated. You may now login');
                }
                redirect(site_url().'main/login');
            }
        }
        // public function get_users($id)
        // {
        //   $data = array();
        //   $data['users'] = $this->db->get('users')->result_array();
        //   $data['users'] = $this->db->where_in('id',$id)->get('users')->row_array();
        //   $this->general->load('DetailRumah/detail_kontrakan',$data);
        // }
        public function base64url_encode($data) {
          return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
        }

        public function base64url_decode($data) {
          return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT));
        }

//----------------------------MASTER--------------------------------------------
        public function add_rumah()
        {
          $data = array();
          $data = $this->session->userdata;
          $data['users'] = $this->db->get('users')->result_array();
            $data['users'] = $this->db->where_in('id')->get('users')->row_array();
            $token = base64_decode($this->uri->segment(4));
            $cleanToken = $this->security->xss_clean($token);
            $user_info = $this->user_model->isTokenValid($cleanToken);

          $this->load->view('admin/lte_header', $data);
          $this->load->view('admin/master/home/add');
          $this->load->view('admin/lte_footer');
        }
        //------------------------rumah kos-------------------------------------
        public function add_rumah_kost()
        {
          $data = array();
          $data = $this->session->userdata;
          $data['users'] = $this->db->get('users')->result_array();
            $data['users'] = $this->db->where_in('id')->get('users')->row_array();
            $token = base64_decode($this->uri->segment(4));
            $cleanToken = $this->security->xss_clean($token);
            $user_info = $this->user_model->isTokenValid($cleanToken);

          $this->load->view('admin/lte_header',$data);
          $this->load->view('admin/master/home/add_rumah_kost');
          $this->load->view('admin/lte_footer');
        }

        public function list_rumah()
        {
          $data = array();
          $data = $this->session->userdata;
          $data['users'] = $this->db->get('users')->result_array();
            $data['users'] = $this->db->where_in('id')->get('users')->row_array();
            $token = base64_decode($this->uri->segment(4));
            $cleanToken = $this->security->xss_clean($token);
            $user_info = $this->user_model->isTokenValid($cleanToken);

          $result['list'] = $this->user_model->get_rumah_kos();
          // $result['email_pemilik'] = $this->db->where_in('email')->get('users')->result_array();
          $this->load->view('admin/lte_header', $data);
          $this->load->view('admin/master/home/all', $result);
          $this->load->view('admin/lte_footer');
        }
        public function upload()
        {
          if (empty ($_FILES['imgName']['name'] &&
          $_FILES['imgName2']['name'] && $_FILES['imgName3']['name'] && $_FILES['imgName4']['name'] )  )
            {
                $this->form_validation->set_rules('imgName', 'Document', 'required');
                redirect(base_url());
            }
          else
        {
              $this->load->library('upload');
              $namafile = "file_".time();
              $config = array(
              'upload_path' => "./uploads/",
              'allowed_types' => "gif|jpg|png|jpeg|pdf",
              'overwrite' => TRUE,
              'max_size' => "20480000",
              'max_height' => "1900",
              'max_width' => "1900",
              'file_name'	=> $namafile

              );

              $this->upload->initialize($config);
                 if( $_FILES['imgName']['name'] &&
                     $_FILES['imgName2']['name'] &&
                     $_FILES['imgName3']['name'] &&
                     $_FILES['imgName4']['name'] )
                 {
                   if( $this->upload->do_upload('imgName') &&
                       $this->upload->do_upload('imgName2') &&
                       $this->upload->do_upload('imgName3') &&
                       $this->upload->do_upload('imgName4')
                       )
                   {
                     $gambar =  $this->upload->data();
                     $data = array(
                       'jenis_rumah' => 'Kos',
                       'id_pemilik' => $this->input->post('id_pemilik'),
                       'email_pemilik' => $this->input->post('email_pemilik'),
                       'nama_rumah' => $this->input->post('nama_rumah'),
                       'nama_pemilik_rumah' => $this->input->post('nama_pemilik_rumah'),
                       'nmr_kontak_pemilik' => $this->input->post('nama_rumah'),
                       'alamat' => $this->input->post('alamat'),
                       'kode_pos' => $this->input->post('postal_code'),
                       'kota' => $this->input->post('country'),
                       'lat' => $this->input->post('lat'),
                       'lng' => $this->input->post('lng'),
                       'nama_pengelola' => $this->input->post('nama_pengelola'),
                       'nmr_pengelola' => $this->input->post('nmr_pengelola'),
                       'harga_sewa' => $this->input->post('harga_sewa'),
                       'jenjang_waktu' => $this->input->post('jenjang_waktu'),
                       'ket_biaya' => $this->input->post('ket_biaya'),
                       'luas_kamar' => $this->input->post('luas_kamar'),
                       'jenis_penghuni' => $this->input->post('jenis_penghuni'),
                       'status_kamar' => $this->input->post('status_kamar'),
                       'fasilitas_kasur' => $this->input->post('fasilitas_kasur'),
                       'fasilitas_almari' => $this->input->post('fasilitas_almari'),
                       'fasilitas_meja_belajar' => $this->input->post('fasilitas_meja_belajar'),
                       'fasilitas_kursi_belajar' => $this->input->post('fasilitas_kursi_belajar'),
                       'fasilitas_kipas_angin' => $this->input->post('fasilitas_kipas_angin'),
                       'fasilitas_ac' => $this->input->post('fasilitas_ac'),
                       'fasilitas_koneksi_internet' => $this->input->post('fasilitas_koneksi_internet'),
                       'fasilitas_dispenser' => $this->input->post('fasilitas_dispenser'),
                       'fasilitas_kulkas' => $this->input->post('fasilitas_kulkas'),
                       'fasilitas_wastafel_kmr' => $this->input->post('fasilitas_wastafel_kmr'),
                       'fasilitas_wastafel_kmr_mandi' => $this->input->post('fasilitas_wastafel_kmr_mandi'),
                       'fasilitas_meja_rias' => $this->input->post('fasilitas_meja_rias'),
                       'fasilitas_tv' => $this->input->post('fasilitas_tv'),
                       'fasilitas_kamar_lain' => $this->input->post('fasilitas_kamar_lain'),
                       'fasilitas_kmr_mandi_dalam' => $this->input->post('fasilitas_kmr_mandi_dalam'),
                       'fasilitas_kmr_mandi_luar' => $this->input->post('fasilitas_kmr_mandi_luar'),
                       'fasilitas_kloset_duduk' => $this->input->post('fasilitas_kloset_duduk'),
                       'fasilitas_kloset_jongkok' => $this->input->post('fasilitas_kloset_jongkok'),
                       'fasilitas_shower' => $this->input->post('fasilitas_shower'),
                       'fasilitas_bak_mandi' => $this->input->post('fasilitas_bak_mandi'),
                       'fasilitas_air_panas' => $this->input->post('fasilitas_air_panas'),
                       'fasilitas_bath_up' => $this->input->post('fasilitas_bath_up'),
                       'fasilitas_ember_mandi' => $this->input->post('fasilitas_ember_mandi'),
                       'deskripsi_rumah' => $this->input->post('deskripsi_rumah'),
                       'fasilitas_ruang_tamu' => $this->input->post('fasilitas_ruang_tamu'),
                       'fasilitas_ruang_makan' => $this->input->post('fasilitas_ruang_makan'),
                       'fasilitas_dapur' => $this->input->post('fasilitas_dapur'),
                       'fasilitas_ruang_santai' => $this->input->post('fasilitas_ruang_santai'),
                       'fasilitas_mesin_cuci' => $this->input->post('fasilitas_mesin_cuci'),
                       'fasilitas_security' => $this->input->post('fasilitas_security'),
                       'fasilitas_akses_full' => $this->input->post('fasilitas_akses_full'),
                       'img1'	=> $gambar['file_name'],
                       'img2'	=> $gambar['file_name'],
                       'img3'	=> $gambar['file_name'],
                       'img4'	=> $gambar['file_name']
                       );
                     $result = $this->user_model->insert_rumah_kos($data);
                     if($result != FALSE)
                     {
                       $data = array();
                       $data = $this->session->userdata;
                       $data['users'] = $this->db->get('users')->result_array();
                         $data['users'] = $this->db->where_in('id')->get('users')->row_array();
                         $token = base64_decode($this->uri->segment(4));
                         $cleanToken = $this->security->xss_clean($token);
                         $user_info = $this->user_model->isTokenValid($cleanToken);

                       $pesan['pesan'] = "Data Rumah anda berhasil disimpan.";
                       $this->load->view('admin/lte_header',$data);
                       $this->load->view('admin/master/home/add_rumah_kost' , $pesan);
                       $this->load->view('admin/lte_footer');
                     }

                   }

                 }


      			}
      }
      //------------------------rumah kontrakan---------------------------------
      public function add_rumah_kontrakan()
      {
        $data = array();
        $data = $this->session->userdata;
        $data['users'] = $this->db->get('users')->result_array();
          $data['users'] = $this->db->where_in('id')->get('users')->row_array();
          $token = base64_decode($this->uri->segment(4));
          $cleanToken = $this->security->xss_clean($token);
          $user_info = $this->user_model->isTokenValid($cleanToken);

        $this->load->view('admin/lte_header',$data);
        $this->load->view('admin/master/home/add_rumah_kontrakan');
        $this->load->view('admin/lte_footer');
      }
      public function save_rumah_kontrakan()
    {

    			if (empty ($_FILES['imgName']['name'] &&
    			$_FILES['imgName2']['name'] && $_FILES['imgName3']['name'] && $_FILES['imgName4']['name'] )  )
    				{
    				    $this->form_validation->set_rules('imgName', 'Document', 'required');
    				    redirect(base_url());
    				}
    			else
    		{
    					$this->load->library('upload');
    					$namafile = "file_".time();
    					$config = array(
    					'upload_path' => "./uploads/",
    					'allowed_types' => "gif|jpg|png|jpeg|pdf",
    					'overwrite' => TRUE,
    					'max_size' => "20480000",
    					'max_height' => "1900",
    					'max_width' => "1900",
    					'file_name'	=> $namafile

    					);

    					$this->upload->initialize($config);
    					if( $_FILES['imgName']['name'] &&
    							$_FILES['imgName2']['name'] &&
    							$_FILES['imgName3']['name'] &&
    							$_FILES['imgName4']['name']  )
    					{
    						if( $this->upload->do_upload('imgName') &&
    								$this->upload->do_upload('imgName2') &&
    								$this->upload->do_upload('imgName3') &&
    								$this->upload->do_upload('imgName4')
    								)
    						{
    							$gambar =  $this->upload->data();
    							$data = array(
                    'jenis_rumah' => 'Kontrakan',
                    'id_pemilik' => $this->input->post('id_pemilik'),
                    'email_pemilik' => $this->input->post('email_pemilik'),
    								'nama_rumah' => $this->input->post('nama_rumah'),
    								'nama_pemilik_rumah' => $this->input->post('nama_pemilik_rumah'),
    								'nomor_kontak_pemilik' => $this->input->post('nomor_kontak_pemilik'),
    								'alamat' => $this->input->post('alamat'),
                    'lat' => $this->input->post('lat'),
                    'lng' => $this->input->post('lng'),
                    'lat' => $this->input->post('lat'),
                    'lng' => $this->input->post('lng'),
    								'harga_sewa' => $this->input->post('harga_sewa'),
    							 	'jenjang_waktu' => $this->input->post('jenjang_waktu'),
    								'ket_biaya' => $this->input->post('ket_biaya'),
    								'luas_rumah' => $this->input->post('luas_rumah'),
    								'jum_kamar_tidur' => $this->input->post('jum_kamar_tidur'),
    								'jum_kamar_mandi' => $this->input->post('jum_kamar_mandi'),
                    'deskripsi_rumah' => $this->input->post('deskripsi_rumah'),
    								'img1'	=> $gambar['file_name'],
    								'img2'	=> $gambar['file_name'],
    			 					'img3'	=> $gambar['file_name'],
    								'img4'	=> $gambar['file_name']
    								);
    							$result = $this->user_model->insert_rumah_kontrakan($data);
    							if($result != FALSE)
    							{
                    $data = array();
                    $data = $this->session->userdata;
                    $data['users'] = $this->db->get('users')->result_array();
                      $data['users'] = $this->db->where_in('id')->get('users')->row_array();
                      $token = base64_decode($this->uri->segment(4));
                      $cleanToken = $this->security->xss_clean($token);
                      $user_info = $this->user_model->isTokenValid($cleanToken);

    								$pesan['pesan'] = "Data Rumah anda berhasil disimpan.";
                    $this->load->view('admin/lte_header',$data);
                    $this->load->view('admin/master/home/add_rumah_kontrakan', $pesan);
                    $this->load->view('admin/lte_footer');
    							}

    						}

    					}
    	}
    }
// --------------------------Super Admin----------------------------------------
    public function all_users()
    {
      $data['users'] = $this->db->get('users')->result_array();
    $this->load->view('super_admin/all_users', $data);
    }
// -----------------------------------------------------------------------------

}
