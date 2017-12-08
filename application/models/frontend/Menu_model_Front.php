<?php
	class Menu_model_Front extends CI_Model{
		function __construct(){
			parent::__construct();
		}
		public function get_db_menu(){
			$query = $this->db->query("
				select *
				from menu
				where is_front='yes'
				order by menu_parent ASC, urutan ASC");
			return $query->result_array();
		}
	}
?>