<?php
	class Event_all_model_Front extends CI_Model{
		function __construct(){
			parent::__construct();
		}
		function get_pulau_indonesia(){
			$query = $this->db->query("
				select *
				from pulau_indonesia
				order by urutan asc");
			return $query->result_array();
		}
		function get_kota_kota(){
			$query = $this->db->query("
				select *
				from kota_kota");
			return $query->result_array();
		}
		function get_jenis_event(){
			$query = $this->db->query("
				select *
				from jenis_event");
			return $query->result_array();
		}
		function get_event(){
			$date_now = date('Y-m-d H:i:s');
			$query = $this->db->query("
				select ev.*,are.id_kota,are.nama_area
				from event as ev, area as are
				where ev.start_date > '$date_now' and ev.id_area=are.id");
			return $query->result_array();
		}
	}
?>