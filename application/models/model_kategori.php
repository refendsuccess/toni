<?php  

class Model_kategori extends CI_Model{
	public function data_kenalpot(){
		return $this->db->get_where("tb_barang",array('kategori' =>'kenalpot'));
	}

	public function data_variasi(){
		return $this->db->get_where("tb_barang",array('kategori' =>'variasi'));
	}

	public function data_oli(){
		return $this->db->get_where("tb_barang",array('kategori' =>'oli'));
	}
	public function data_velk(){
		return $this->db->get_where("tb_barang",array('kategori' =>'velk'));
	}

	public function data_ban(){
		return $this->db->get_where("tb_barang",array('kategori' =>'ban'));
	}
	
	
}