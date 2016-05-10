<?php
  class VerifiedModel extends CI_Model{

    var $table = 'rm_verifikasi';

    function __construct(){
      parent::__construct();

    }

    function showVer(){
      $this->db->select('*');
      $this->db->order_by('verifikasi_id','DESC');
      $query = $this->db->get($this->table);
      if($query->num_rows()>0){
        return $query->result_array();
      }
    }

    function getVerBySewaID($id){
        $this->db->select('*');
        $this->db->where('sewa_id', $id);
        $query = $this->db->get($this->table);
        if ($query->num_rows() == 1) {
            return $query->row_array();
        }
      }

  }
