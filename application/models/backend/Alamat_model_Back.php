<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Alamat_model_Back extends CI_Model {
    
    function __construct(){
        parent::__construct();
    }
	function get_all_alamat_content($id_kota_select_box){
		if($id_kota_select_box=="all"){
			$sql_kota = "";
		}else{
			$sql_kota = "and kk.id=$id_kota_select_box";
		}
		$query = $this->db->query("
			select als.*,kk.nama_kota,are.nama_area
			from alamat_sekre as als, area as are, kota_kota as kk
			where als.id_area=are.id and are.id_kota=kk.id ".$sql_kota." and id_user='".$_SESSION['id_user']."'
			order by are.nama_area ASC");
		return $query->result_array();
	}
	function get_selected_content_detail($id){
		$query = $this->db->query("
			select als.*,kk.nama_kota,are.nama_area,are.id_kota
			from alamat_sekre as als, area as are, kota_kota as kk
			where als.id='".$id."' and als.id_area=are.id and are.id_kota=kk.id");
		return $query->result_array();
	}
	function insert_into_alamat_sekre($id_area,$alamat,$no_hp){
       	$this->db->query("
	  		insert into alamat_sekre (id_area,id_user,alamat,no_hp)
			values(".$id_area.",'".$_SESSION['id_user']."','".$alamat."','".$no_hp."')");
    }
	function update_alamat_sekre($id,$id_area,$alamat,$no_hp){
       	$this->db->query("
	  		update alamat_sekre
			set id_area='".$id_area."',alamat='".$alamat."',no_hp='".$no_hp."'
			where id='".$id."'");
    }
	function delete_alamat_sekre($id){
		$this->db->query("delete from alamat_sekre where id=".$id);
	}
}
?>