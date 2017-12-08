<?php
	class Kesaksian_all_model_Front extends CI_Model{
		function __construct(){
			parent::__construct();
		}
		function get_kesaksian_based_on_month($month, $year){
			$query = $this->db->query("
				select *
				from kesaksian
				where times like '$year-$month-%'
				order by times desc");
			return $query->result();
		}
	}
?>