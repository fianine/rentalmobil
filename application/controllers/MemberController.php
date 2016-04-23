<?php
  class MemberController extends CI_Controller {

    function __construct(){
      parent::__construct();

    }

    function home(){
      $data['content'] = 'membercontroller/home';
      $this->load->view('member/home',$data);
    }
  }
