<?php
	class List_taman_all_model_Front extends CI_Model{
		function __construct(){
			parent::__construct();
		}
		function get_list_taman($nama_kelurahan){
			$query = $this->db->query("
				select taman.id, nama_taman, nama_kelurahan, nama_kecamatan, nama_kabupaten
				from taman, kelurahan, kecamatan, kabupaten
				where kelurahan.nama_kelurahan like '%".$nama_kelurahan."%'
				and kelurahan.id = taman.id_kelurahan
				and kecamatan.id = kelurahan.id_kecamatan
				and kabupaten.id = kecamatan.id_kabupaten");
			return $query->result_array();
		}
	}
?>