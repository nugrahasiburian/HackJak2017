<?php
	class Home_model_Front extends CI_Model{
		function __construct(){
			parent::__construct();
		}
		function get_db_kecamatan(){
			$query = $this->db->query("
				select *
				from kecamatan
				order by nama_kecamatan ASC");
			return $query->result_array();
		}
		function get_db_kelurahan(){
			$query = $this->db->query("
				select *
				from kelurahan
				order by nama_kelurahan ASC");
			return $query->result_array();
		}
	}
?>