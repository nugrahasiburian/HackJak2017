<?php
	class Trend_busway_model_Front extends CI_Model{
		function __construct(){
			parent::__construct();
		}
		function get_trend_busway(){
			$query = $this->db->query("
				select *
				from trend_busway");
			return $query->result_array();
		}
	}
?>