<?php
  class RegisterController extends CI_Controller {

    function __construct(){
      parent::__construct();
      $this->load->model('UserModel');

    }

    function daftar(){
      $this->form_validation->set_rules('nama', 'nama', 'required');
      $this->form_validation->set_rules('email', 'email', 'required|valid_email');
      $this->form_validation->set_rules('password', 'password', 'required');
      $this->form_validation->set_rules('no_telp', 'no_telp', 'required');
      $this->form_validation->set_rules('alamat', 'alamat', 'required');
      $this->form_validation->set_error_delimiters('', '<br/>');

        if ($this->form_validation->run() == TRUE) {
            $this->UserModel->create();
            $this->session->set_flashdata('success', 'Registration success, please login with your account !');
            redirect('pagescontroller/login');
        }
        $data['content'] = 'pagescontroller/register';
        $this->load->view('pagescontroller/register', $data);
    }
  }
