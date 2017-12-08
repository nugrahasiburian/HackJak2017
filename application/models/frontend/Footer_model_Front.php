<?php
	class Footer_model_Front extends CI_Model{
		function __construct(){
			parent::__construct();
		}
		function get_sosmed(){
			$query = $this->db->query("
				select *
				from sosmed");
			return $query->result_array();
		}
	}
?>