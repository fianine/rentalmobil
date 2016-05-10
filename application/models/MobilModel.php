<?php
  class MobilModel extends CI_Model {

    var $table = 'rm_merkmobil';

    function __construct(){
      parent::__construct();
    }

    function showMobil(){
      $this->db->select('*');
      $this->db->order_by('mobil_id','DESC');
      $query = $this->db->get($this->table);
      if($query->num_rows()>0){
        return $query->result_array();
      }
    }

    function getQuery($datainput){
      $q = $this->db->query($datainput);
    }

    function showDetail($id){
      $param = array('mobil_id' => $id);
      return $this->db->get_where($this->table,$param);
    }
  }
