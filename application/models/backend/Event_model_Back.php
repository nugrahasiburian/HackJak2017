<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Event_model_Back extends CI_Model {
    
    function __construct(){
        parent::__construct();
    }
	function get_all_event_content($id_kota_select_box,$jenis_event_select_box,$month,$year){
		if($id_kota_select_box=="all"){
			$sql_kota = "";
		}else{
			$sql_kota = "and kk.id=$id_kota_select_box";
		}
		if($jenis_event_select_box=="all"){
			$sql_event = "";
		}else{
			$sql_event = "and ev.id_jenis_event=$jenis_event_select_box";
		}
		$query = $this->db->query("
			select ev.*,are.id_kota,kk.nama_kota,je.nama_jenis_event 
			from event as ev, area as are, kota_kota as kk, jenis_event as je
			where ev.id_area=are.id and are.id_kota=kk.id and ev.id_jenis_event=je.id and ev.start_date like '$year-$month-%' ".
			$sql_kota." ".$sql_event." and ev.id_user='".$_SESSION['id_user']."'
			order by ev.start_date DESC");
		return $query->result_array();
	}
	function get_list_of_jenis_event(){
		$query = $this->db->query("
			select *
			from jenis_event
			order by nama_jenis_event asc");
		return $query->result_array();
	}
	function get_selected_content_detail($id){
		$query = $this->db->query("
			select ev.*,are.id_kota
			from event as ev, area as are
			where ev.id_area=are.id and ev.id='".$id."'");
		return $query->result_array();
	}
	function insert_into_event($id_area,$id_jenis_event,$cover_image,$title,$lokasi,$keterangan,$start_date,$end_date){
       	$this->db->query("
	  		insert into event (id_area,id_jenis_event,id_user,cover_image,title,lokasi,keterangan,start_date,end_date)
			values(".$id_area.",".$id_jenis_event.",'".$_SESSION['id_user']."','".$cover_image."','".$title."','".$lokasi."','".$keterangan."','".$start_date."','".$end_date."')");
    }
	function update_event($id,$id_area,$id_jenis_event,$cover_image,$title,$lokasi,$keterangan,$start_date,$end_date){
       	$this->db->query("
	  		update event
			set id_area='".$id_area."',id_jenis_event='".$id_jenis_event."',cover_image='".$cover_image."',title='".$title."',lokasi='".$lokasi."',keterangan='".$keterangan."',start_date='".$start_date."',end_date='".$end_date."'
			where id='".$id."'");
    }
	function delete_event($id){
		$this->db->query("delete from event where id=".$id);
	}
}
?>