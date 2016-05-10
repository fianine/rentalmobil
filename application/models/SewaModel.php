<?php
  class SewaModel extends CI_Model {

    var $table = 'rm_sewa';

    function __construct(){
      parent::__construct();
    }

    function getHistory($options = array(), $limit = 5, $offset = 0) {
        $this->db->where($options);
        $this->db->limit($limit, $offset);
        $this->db->order_by('sewa_id', 'DESC');
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
    }

    function showSewa(){
      $this->db->select('*');
      $this->db->order_by('sewa_id','DESC');
      $query = $this->db->get($this->table);
      if($query->num_rows()>0){
        return $query->result_array();
      }
    }

    function getById($id) {
        $this->db->where('sewa_id', $id);
        $query = $this->db->get($this->table, 1);
        if ($query->num_rows() == 1) {
            return $query->row_array();
        }
    }

    function showVerified(){
      $ver = 'Verified';
      $this->db->select('*');
      $this->db->where('konfirmasi',$ver,'DESC');
      $query = $this->db->get($this->table);
      if($query->num_rows() > 0){
        return $query->result_array();
      }
    }

    function prosesSewa($datainput){
      $q = $this->db->query($datainput);
    }

    function payment($datainput){
      $q = $this->db->query($datainput);
    }

    function getData($id){
      $param = array('sewa_id' => $id);
      return $this->db->get_where($this->table,$param);
    }

  }
