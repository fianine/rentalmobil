<?php
  class AuthController extends CI_Controller{

      function __construct(){
        parent::__construct();
        $this->load->model('UserModel');
      }

      function login(){
        $data['content'] = 'AuthController/login';
        $this->load->view('admin/login',$data);
      }

      function checkLogin(){
      $data = array('email' => $this->input->post('email', TRUE),
						        'password' => md5($this->input->post('password', TRUE))
			        );
		  $hasil = $this->UserModel->login($data);
		  if ($hasil->num_rows() == 1) {
			 foreach ($hasil->result() as $sess) {
			 	 $sess_data['logged_in'] = 'Sudah Login';
				 $sess_data['user_id'] = $sess->user_id;
				 $sess_data['email'] = $sess->email;
				 $sess_data['level'] = $sess->level;
				 $this->session->set_userdata($sess_data);
			 }
			 if ($this->session->userdata('level')=='admin') {
				redirect('admincontroller/dashboard');
			 }
			 elseif ($this->session->userdata('level')=='member') {
				redirect('membercontroller/home');
			}
		  }else {
			   echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		  }
    }

    function logout(){
			$this->session->unset_userdata('email');
			$this->session->unset_userdata('level');
			$this->session->sess_destroy();
			redirect('AuthController/login');
		}
    
  }
