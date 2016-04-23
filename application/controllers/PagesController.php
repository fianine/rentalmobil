<?php
  class PagesController extends CI_Controller {

    function __construct(){
      parent::__construct();

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
  }
