<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Kota_model_Back extends CI_Model {
    
    function __construct(){
        parent::__construct();
    }
	function get_all_kota_content($id_pulau_select_box){
		if($id_pulau_select_box==""){
			$sql_pulau = "";
		}else{
			$sql_pulau = "and kk.id_pulau=$id_pulau_select_box";
		}
		$query = $this->db->query("
			select kk.*,pi.nama_pulau
			from kota_kota as kk, pulau_indonesia as pi
			where kk.id_pulau=pi.id ".$sql_pulau." 
			order by kk.nama_kota ASC");
		return $query->result_array();
	}
	function get_selected_content_detail($id){
		$query = $this->db->query("
			select kk.*,pi.nama_pulau
			from kota_kota as kk, pulau_indonesia as pi
			where kk.id='".$id."' and kk.id_pulau=pi.id");
		return $query->result_array();
	}
	function insert_into_kota($id_pulau,$nama_kota){
       	$this->db->query("
	  		insert into kota_kota (id_pulau,nama_kota)
			values(".$id_pulau.",'".$nama_kota."')");
    }
	function update_kota($id,$id_pulau,$nama_kota){
       	$this->db->query("
	  		update kota_kota
			set id_pulau='".$id_pulau."',nama_kota='".$nama_kota."'
			where id='".$id."'");
    }
	function delete_kota($id){
		$this->db->query("delete from kota_kota where id=".$id);
	}
}
?>