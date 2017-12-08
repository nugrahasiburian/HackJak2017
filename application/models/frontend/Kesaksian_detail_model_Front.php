<?php
	class Kesaksian_detail_model_Front extends CI_Model{
		function __construct(){
			parent::__construct();
		}
		function get_kesaksian_detail($id){
			$query = $this->db->query("
				select *
				from kesaksian
				where id=$id");
			return $query->result();
		}
		function get_kesaksian_more_resources($id){
			$query = $this->db->query("
				select * from(
					(select *
					from kesaksian
					where id < $id
					order by times desc limit 2)
					
					union all
					
					(select * 
					from kesaksian
					where id > $id
					order by times asc limit 2)
				) as table3
				order by table3.id asc
			");
			return $query->result();
		}
	}
?>