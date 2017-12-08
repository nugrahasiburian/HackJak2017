<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Taman_model_Back extends CI_Model {
    
    function __construct(){
        parent::__construct();
    }
	function get_all_taman_content($category){
		$query = $this->db->query("
			select *
			from $category");
		return $query->result_array();
	}
	function get_selected_content_detail($category, $id){
		$query = $this->db->query("
			select *
			from $category
			where id='".$id."'");
		return $query->result_array();
	}
	function insert_into_taman($cover_image, $nama_taman, $infrastruktur){
       	$this->db->query("
	  		insert into taman (id_user,cover_image, nama_taman, infrastruktur) 
			values('".$_SESSION['id_user']."','".$cover_image."','".$nama_taman."','".$infrastruktur."')");
    }
	function update_taman($id, $cover_image, $nama_taman, $infrastruktur){
       	$this->db->query("
	  		update taman
			set cover_image='".$cover_image."',nama_taman='".$nama_taman."',infrastruktur='".$infrastruktur."'
			where id='".$id."'");
    }
	function delete_taman($id){
		$this->db->query("delete from taman where id=".$id);
	}
}
?>