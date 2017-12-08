<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sosmed_model_Back extends CI_Model {
    
    function __construct(){
        parent::__construct();
    }
	function get_all_sosmed_content(){
		$query = $this->db->query("
			select *
			from sosmed
			order by urutan ASC");
		return $query->result_array();
	}
	function get_selected_content_detail($category, $id){
		$query = $this->db->query("
			select *
			from $category
			where id='".$id."'");
		return $query->result_array();
	}
	function insert_into_sosmed($nama,$image,$link){
       	$this->db->query("
	  		insert into sosmed (nama_sosmed,image,link)
			values(".$nama.",'".$image."','".$link."')");
    }
	function update_sosmed($id,$nama,$image,$link){
       	$this->db->query("
	  		update sosmed
			set nama_sosmed='".$nama."',image='".$image."',link='".$link."'
			where id='".$id."'");
    }
	function delete_sosmed($id){
		$this->db->query("delete from sosmed where id=".$id);
	}
}
?>