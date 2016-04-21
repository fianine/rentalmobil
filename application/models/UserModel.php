<?php
  class UserModel extends CI_Model{

    function login($data){
      $check = $this->db->get_where('rm_users',$data);
      return $check;
    }

  }
