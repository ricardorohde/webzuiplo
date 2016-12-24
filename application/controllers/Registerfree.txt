<?php
/**
 *
 */
class Registerfree extends CI_Controller
{

      public function __construct()
      {
          parent::__construct();
          $this->load->model('modelregisterfree','register_free');
          $this->load->model('general');
      }

      public function index()
      {
          $this->load->helper('url');
          $this->general->load('register/pemilik/free/add');
      }
      // <!-- field register pemilik: -->
      //   <!-- id_register, informasi lanjutan, photo_url, created, nama_depan, nama_belakang, email, no_telp, lat, lang, kamar_tidur, kamar mandi, luas area, saldo_perbulan. -->
      // <!-- akhir register_pemilik -->

      public function ajax_list()
      {
          $list = $this->registerfree->get_datatables();
          $data = array();
          $no = $_POST['start'];
          foreach ($list as $register_free) {
              $no++;
              $row = array();
              $row[] = $register_free->informasi_lanjutan;
              $row[] = $register_free->photo_url;
              $row[] = $register_free->created;
              $row[] = $register_free->nama_depan;
              $row[] = $register_free->nama_belakang;
              $row[] = $register_free->email;
              $row[] = $register_free->no_telp;
              $row[] = $register_free->lat;
              $row[] = $register_free->lang;
              $row[] = $register_free->kamar_tidur;
              $row[] = $register_free->kamar_mandi;
              $row[] = $register_free->luas_area;
              $row[] = $register_free->saldo_perbulan;

              //add html for action
              $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_person('."'".$register_free->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                    <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_person('."'".$register_free->id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';

              $data[] = $row;
          }

          $output = array(
                          "draw" => $_POST['draw'],
                          "recordsTotal" => $this->register_free->count_all(),
                          "recordsFiltered" => $this->register_free->count_filtered(),
                          "data" => $data,
                  );
          //output to json format
          echo json_encode($output);
      }

      public function ajax_edit($id)
      {
          $data = $this->register_free->get_by_id($id);
          echo json_encode($data);
      }
      // <!-- field register pemilik: -->
      //   <!-- id_register, informasi lanjutan, photo_url, created, nama_depan, nama_belakang, email, no_telp, lat, lang, kamar_tidur, kamar mandi, luas area, saldo_perbulan. -->
      // <!-- akhir register_pemilik -->
      public function ajax_add()
      {
        $data = array(
                'informasi_lanjutan' => $this->input->post('informasi_lanjutan'),
                'photo_url' => $this->input->post('photo_url'),
                'created' => $this->input->post('created'),
                'nama_depan' => $this->input->post('nama_depan'),
                'nama_belakang' => $this->input->post('nama_belakang'),
                'email' => $this->input->post('email'),
                'no_telp' => $this->input->post('no_telp'),
                'lat' => $this->input->post('lat'),
                'lang' => $this->input->post('lang'),
                'kamar_tidur' => $this->input->post('kamar_tidur'),
                'kamar_mandi' => $this->input->post('kamar_mandi'),
                'luas_area' => $this->input->post('luas_area'),
                'saldo_perbulan' => $this->input->post('saldo_perbulan'),
                'type_register' => 'free',

            );
          $insert = $this->register_free->save($data);
          echo json_encode(array("status" => TRUE));
            // redirect('Manage/owner_admin', $data);
      }

      public function ajax_update()
      {
          $data = array(
            'informasi_lanjutan' => $this->input->post('informasi_lanjutan'),
            'photo_url' => $this->input->post('photo_url'),
            'created' => $this->input->post('created'),
            'nama_depan' => $this->input->post('nama_depan'),
            'nama_belakang' => $this->input->post('nama_belakang'),
            'email' => $this->input->post('email'),
            'no_telp' => $this->input->post('no_telp'),
            'lat' => $this->input->post('lat'),
            'lang' => $this->input->post('lang'),
            'kamar_tidur' => $this->input->post('kamar_tidur'),
            'kamar_mandi' => $this->input->post('kamar_mandi'),
            'luas_area' => $this->input->post('luas_area'),
            'saldo_perbulan' => $this->input->post('saldo_perbulan'),
            'type_register' => 'free',
              );
          $this->register_free->update(array('id_register' => $this->input->post('id_register')), $data);
          echo json_encode(array("status" => TRUE));
      }

      public function ajax_delete($id)
      {
          $this->register_free->delete_by_id($id);
          echo json_encode(array("status" => TRUE));
      }
      public function owner_admin()
      {
      $this->general->load('manage/admin_pemilik/dashboard');

      }
}
