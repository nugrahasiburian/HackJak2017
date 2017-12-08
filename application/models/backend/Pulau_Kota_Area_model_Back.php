<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pulau_Kota_Area_model_Back extends CI_Model {
    
    function __construct(){
        parent::__construct();
    }
	function get_list_of_pulau(){
		$query = $this->db->query("
			select *
			from pulau_indonesia
			order by urutan asc");
		return $query->result_array();
	}
	function get_list_of_kota(){
		$id_kota = $_SESSION['id_kota'];
		$sql_kota = "";
		if($id_kota > 0){
			$sql_kota = "where id=$id_kota";
		}
		$query = $this->db->query("
			select *
			from kota_kota
			$sql_kota
			order by nama_kota asc");
		return $query->result_array();
	}
	function get_list_of_area(){
		$query = $this->db->query("
			select *
			from area
			order by nama_area asc");
		return $query->result_array();
	}
	function get_id_kota($id){
		$query = $this->db->query("
			select are.id_kota
			from alamat_sekre as als, area as are
			where als.id_area=are.id and als.id=$id
		");
		return $query->result_array();
	}
}
?>