<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Area_model_Back extends CI_Model {
    
    function __construct(){
        parent::__construct();
    }
	function get_all_area_content($id_kota_select_box){
		if($id_kota_select_box==""){
			$sql_kota = "";
		}else{
			$sql_kota = "and kk.id=$id_kota_select_box";
		}
		$query = $this->db->query("
			select are.*,kk.nama_kota
			from area as are, kota_kota as kk
			where are.id_kota=kk.id ".$sql_kota." 
			order by are.nama_area ASC");
		return $query->result_array();
	}
	function get_selected_content_detail($id){
		$query = $this->db->query("
			select are.*,kk.nama_kota
			from area as are, kota_kota as kk
			where are.id='".$id."' and are.id_kota=kk.id");
		return $query->result_array();
	}
	function insert_into_area($id_kota,$nama_area){
       	$this->db->query("
	  		insert into area (id_kota,nama_area)
			values(".$id_kota.",'".$nama_area."')");
    }
	function update_area($id,$id_kota,$nama_area){
       	$this->db->query("
	  		update area
			set id_kota='".$id_kota."',nama_area='".$nama_area."'
			where id='".$id."'");
    }
	function delete_area($id){
		$this->db->query("delete from area where id=".$id);
	}
}
?>