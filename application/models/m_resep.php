<?php

class m_resep extends CI_Model{
    public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

    public function insert_resep($table,$data){
        $this->db->insert($table,$data);
    }

    public function tampil($table){
        return $this->db->get($table)->result_array();
    }

    public function tampilresep($table, $data){
        return $this->db->get_where($table, $data)->result_array();
    }

    public function hapus($table, $id){
        $this->db->where('id', $id);
        $this->db->delete($table); 
    }

    public function hapusresep($table, $id){
        $this->db->where('koderesep', $id);
        $this->db->delete($table); 
    }

    public function updateuser($data, $id){
        $this->db->where('id', $id);
        $this->db->update('user', $data);
    }

    public function updateresep($data, $id){
        $this->db->where('koderesep', $id);
        $this->db->update('resepmasakan', $data);
    }
}