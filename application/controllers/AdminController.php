<?php
  class AdminController extends CI_Controller{

    function __construct(){
      parent::__construct();
      $this->load->model('UserModel');
      $this->load->model('MobilModel');
      if($this->session->userdata('email')=="") {
					redirect('AuthController/login');
			}
			$this->load->helper('text');
    }

    function dashboard(){
      $data['content'] = 'AdminController/dashboard';
      $data['email'] = $this->session->userdata('email');
      $this->load->view('admin/home',$data);
    }

    function datamember(){
      $data['lihatdatamember'] = $this->UserModel->showUserMember();
      $data['content'] = 'AdminController/datamember';
      $data['email'] = $this->session->userdata('email');
      $this->load->view('admin/data_member',$data);
    }

    function datamobil(){
      $data['lihatdatamobil'] = $this->MobilModel->showMobil();
      $data['content'] = 'AdminController/datamobil';
      $data['email'] = $this->session->userdata('email');
      $this->load->view('admin/mobil/data_mobil',$data);
    }

    function tambahdatamobil(){
      $data['content'] = 'AdminController/tambahdatamobil';
      $data['email'] = $this->session->userdata('email');
      $this->load->view('admin/mobil/tambah_mobil',$data);
    }

    function createcar(){
      $merk_mobil = $this->input->post('merk_mobil');
      $tipe_mobil = $this->input->post('tipe_mobil');
      $tahun = $this->input->post('tahun');
      $kapasitas = $this->input->post('kapasitas');
      $harga = $this->input->post('harga');
      $user_id = $this->session->userdata('user_id');
      $platnomor = $this->input->post('platnomor');

			if ($_FILES['gambar']['type'] == "image/jpeg" || $_FILES['gambar']['type'] == "image/png" || $_FILES['gambar']['type'] == "image/gif"){
				$ori_src="./public/assets/upload/".strtolower(str_replace(' ','_',$_FILES['gambar']['name']));
				if(move_uploaded_file ($_FILES['gambar']['tmp_name'],$ori_src))
				{
					chmod("$ori_src",0777);
				}else{
					echo "Gagal melakukan proses upload file...";
					exit;
				}
				$this->MobilModel->getQuery("INSERT INTO rm_merkmobil (merk_mobil, tipe_mobil, tahun, kapasitas, harga, user_id, gambar, platnomor) values('".$merk_mobil."','".$tipe_mobil."','".$tahun."','".$kapasitas."','".$harga."','".$user_id."','".$_FILES['gambar']['name']."','".$platnomor."')");
				echo "<meta http-equiv='refresh' content='0; url=".base_url()."admincontroller/datamobil'>";
				}
				else{
					$this->MobilModel->getQuery("INSERT INTO rm_merkmobil (merk_mobil, tipe_mobil, tahun, kapasitas, harga, user_id, platnomor) values('".$merk_mobil."','".$tipe_mobil."','".$tahun."','".$kapasitas."','".$harga."','".$user_id."','".$platnomor.")");
					redirect('admincontroller/datamobil');
				}
    }
  }
?>
