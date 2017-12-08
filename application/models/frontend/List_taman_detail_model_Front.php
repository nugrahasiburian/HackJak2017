<?php
	class List_taman_detail_model_Front extends CI_Model{
		function __construct(){
			parent::__construct();
		}
		function get_list_taman_detail($id){
			$query = $this->db->query("
				select *
				from taman
				where id=$id");
			return $query->result_array();
		}
	}
?>