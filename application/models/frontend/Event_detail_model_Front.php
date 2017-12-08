<?php
	class Event_detail_model_Front extends CI_Model{
		function __construct(){
			parent::__construct();
		}
		function get_event_detail($id){
			$query = $this->db->query("
				select ev.*,je.nama_jenis_event,are.nama_area,are.id_kota
				from event as ev, jenis_event as je, area as are
				where ev.id = $id and ev.id_jenis_event=je.id and ev.id_area=are.id");
			return $query->result_array();
		}
		function get_id_kota($id){
			$query = $this->db->query("
				select are.id_kota
				from event as ev, area as are
				where ev.id = $id and ev.id_area=are.id");
			return $query->result_array();
		}
		function get_event_more_resources($id,$id_kota){
			$query = $this->db->query("
				select * from(
					(select ev.*,je.nama_jenis_event,are.nama_area,are.id_kota
					from event as ev, jenis_event as je, area as are
					where ev.id<$id and ev.id_jenis_event=je.id and ev.id_area=are.id and are.id_kota=$id_kota
					order by ev.start_date desc limit 2)
					
					union all
					
					(select ev.*,je.nama_jenis_event,are.nama_area,are.id_kota
					from event as ev, jenis_event as je, area as are
					where ev.id>$id and ev.id_jenis_event=je.id and ev.id_area=are.id and are.id_kota=$id_kota
					order by ev.start_date desc limit 2)
				) as table3
				order by table3.id asc
			");
			return $query->result_array();
		}
	}
?>