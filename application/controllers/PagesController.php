<?php
  class PagesController extends CI_Controller {

    function __construct(){
      parent::__construct();
      $this->load->model('MobilModel');
    }

    function index(){
      $data['content'] = '/';
      $this->load->view('pages/home',$data);
    }

    function login(){
      $data['content'] = 'PagesController/login';
      $this->load->view('pages/login',$data);
    }

    function daftar(){
      $data['content'] = 'PagesController/daftar';
      $this->load->view('pages/register',$data);
    }

    function kendaraan(){
      $data['lihatdatamobil'] = $this->MobilModel->showMobil();
      $data['content'] = 'PagesController/kendaraan';
      $this->load->view('pages/kendaraan',$data);
    }

    function detail(){
			$id = $this->uri->segment(3);
			$data['showDetail'] = $this->MobilModel->showDetail($id)->row_array();
			$this->load->view('pages/detail',$data);
    }
  }
