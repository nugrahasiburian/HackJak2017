<?php
	class Pengajaran_all_model_Front extends CI_Model{
		function __construct(){
			parent::__construct();
		}
		function get_pengajaran_based_on_month($month, $year){
			$query = $this->db->query("
				select *
				from pengajaran");
			return $query->result_array();
		}
	}
?>