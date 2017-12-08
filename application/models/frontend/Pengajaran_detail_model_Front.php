<?php
	class Pengajaran_detail_model_Front extends CI_Model{
		function __construct(){
			parent::__construct();
		}
		function get_pengajaran_detail($id){
			$query = $this->db->query("
				select *
				from pengajaran
				where id=$id");
			return $query->result_array();
		}
		function get_pengajaran_more_resources($id){
			$query = $this->db->query("
				select * from(
					(select *
					from pengajaran
					where id < $id
					order by times desc limit 2)
					
					union all
					
					(select * 
					from pengajaran
					where id > $id
					order by times asc limit 2)
				) as table3
				order by table3.id asc
			");
			return $query->result_array();
		}
	}
?>