<?php
	class Browser_info_model extends CI_Model{
		function __construct(){
			parent::__construct();
		}
		public function get_db_browser_info(){
			$query = $this->db->query("
				select *
				from browser_info");
			return $query->result_array();
		}
	}
?>