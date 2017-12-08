<?php
	class Alamat_model_Front extends CI_Model{
		function __construct(){
			parent::__construct();
		}
		function get_alamat_sekre(){
			$query = $this->db->query("
				select als.*,are.nama_area,are.id_kota
				from alamat_sekre as als, area as are
				where als.id_area=are.id
				order by are.nama_area asc");
			return $query->result_array();
		}
		function get_pulau_indonesia(){
			$query = $this->db->query("
				select *
				from pulau_indonesia
				order by urutan asc");
			return $query->result_array();
		}
		function get_kota_kota(){
			$query = $this->db->query("
				select *
				from kota_kota");
			return $query->result_array();
		}
	}
?>