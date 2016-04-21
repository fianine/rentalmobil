<?php
  class AdminController extends CI_Controller{

    function __construct(){
      parent::__construct();
      if($this->session->userdata('email')=="") {
					redirect('AuthController/login');
			}
			$this->load->helper('text');
    }

    function dashboard(){
      $data['content'] = 'AdminController/dashboard';
      $data['email'] = $this->session->userdata('email');
      $this->load->view('admin/home');
    }
  }
?>
