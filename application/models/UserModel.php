<?php
  class UserModel extends CI_Model{

    var $table = 'rm_users';

    function __construct(){
      parent::__construct();
    }

    function login($data){
      $check = $this->db->get_where('rm_users',$data);
      return $check;
    }

    function create() {
        $data = array(
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password')),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'no_telp' => $this->input->post('no_telp'),
            'level' => 'Member'
        );
        $this->db->insert($this->table, $data);
    }

    function showUserMember(){
      $level = 'Member';
      $this->db->select('*');
      $this->db->where('level',$level,'DESC');
      $query = $this->db->get($this->table);
      if($query->num_rows()>0){
        return $query->result_array();
      }
    }

  }
