<?php
  class MemberController extends CI_Controller {

    function __construct(){
      parent::__construct();
      $this->load->model('MobilModel');
      $this->load->model('UserModel');
      $this->load->model('SewaModel');
      if($this->session->userdata('email')=="") {
					redirect('AuthController/login');
			}
			$this->load->helper('text');
    }

    function home(){
      $data['email'] = $this->session->userdata('email');
      $data['content'] = 'membercontroller/home';
      $this->load->view('member/home',$data);
    }

    function dashboard(){
      $data['email'] = $this->session->userdata('email');
      $data['content'] = 'membercontroller/dashboard';
      $this->load->view('member/dashboard',$data);
    }

    function kendaraan(){
      $data['email'] = $this->session->userdata('email');
      $data['lihatdatamobil'] = $this->MobilModel->showMobil();
      $data['content'] = 'PagesController/kendaraan';
      $this->load->view('member/kendaraan',$data);
    }

    function detail(){
      $data['email'] = $this->session->userdata('email');
			$id = $this->uri->segment(3);
			$data['showDetail'] = $this->MobilModel->showDetail($id)->row_array();
			$this->load->view('member/detail',$data);
    }

    function checkout(){
			$id = $this->uri->segment(3);
      $data['email'] = $this->session->userdata('email');
			$data['showDetail'] = $this->MobilModel->showDetail($id)->row_array();
      $data['getUser'] = $this->UserModel->getUserById($this->session->userdata('user_id'));
			$this->load->view('member/checkout',$data);
    }

    function proses(){
        $merk_mobil = $this->input->post('merk_mobil');
        $platnomor = $this->input->post('platnomor');
        $lama_sewa = $this->input->post('lama_sewa');
        $user_id = $this->session->userdata('user_id');
        $tgl_sewa = date('Y-m-d h:i:s');
        $harga = $this->input->post('harga');
        $total = $harga*$lama_sewa;
        $konfirmasi = $this->input->post('konfirmasi');

        $this->SewaModel->prosesSewa("INSERT INTO rm_sewa (merk_mobil, platnomor, lama_sewa, user_id, tgl_sewa, harga, total, konfirmasi) values('".$merk_mobil."','".$platnomor."','".$lama_sewa."','".$user_id."','".$tgl_sewa."','".$harga."','".$total."','Not Verified')");
				echo "<meta http-equiv='refresh' content='0; url=".base_url()."membercontroller/datasewa'>";
    }

    function datasewa(){
      $data['email'] = $this->session->userdata('email');
      $data['content'] = 'membercontroller/datasewa';
      $options = array('user_id' => $this->session->userdata('user_id'));
      $data['lihatdatasewa'] = $this->SewaModel->getHistory($options);
      $this->load->view('member/data_sewa',$data);
    }

    function batal($id){
      $this->db->where('sewa_id',$id);
      $this->db->delete('rm_sewa');
      redirect('membercontroller/datasewa');
    }

    function konfirmasi(){
      $data['email'] = $this->session->userdata('email');
      $id = $this->uri->segment(3);
      $data['getDataSewaID'] = $this->SewaModel->getData($id)->row_array();
      $this->load->view('member/konfirmasi_payment',$data);
    }

    function submitpayment(){
      $sewa_id = $this->input->post('sewa_id');
      $user_id = $this->session->userdata('user_id');
      $no_identitas = $this->input->post('no_identitas');
      $atas_nama = $this->input->post('atas_nama');
      $nama_bank = $this->input->post('nama_bank');
      $jumlah_transfer = $this->input->post('jumlah_transfer');
      $jenis_transfer = $this->input->post('jenis_transfer');
      $tgl_transfer = date('Y-m-d h:i:s');

      $this->SewaModel->payment("INSERT INTO rm_verifikasi (sewa_id,user_id,no_identitas,atas_nama,nama_bank,jumlah_transfer,jenis_transfer,tgl_transfer) values('".$sewa_id."','".$user_id."','".$no_identitas."','".$atas_nama."','".$nama_bank."','".$jumlah_transfer."','".$jenis_transfer."','".$tgl_transfer."')");
      echo "<meta http-equiv='refresh' content='0; url=".base_url()."membercontroller/datasewa'>";
    }

  }
