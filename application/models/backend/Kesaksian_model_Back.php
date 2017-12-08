<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Kesaksian_model_Back extends CI_Model {
    
    function __construct(){
        parent::__construct();
    }
	function get_all_kesaksian_content($category,$month,$year){
		$query = $this->db->query("
			select *
			from $category
			where times like '$year-$month-%' and id_user='".$_SESSION['id_user']."'
			order by times DESC");
		return $query->result_array();
	}
	function get_selected_content_detail($category, $id){
		$query = $this->db->query("
			select *
			from $category
			where id='".$id."'");
		return $query->result_array();
	}
	function insert_into_kesaksian($cover_image, $title, $content, $author){
       	$this->db->query("
	  		insert into kesaksian (id_user,cover_image, title, content, author) 
			values('".$_SESSION['id_user']."','".$cover_image."','".$title."','".$content."','".$author."')");
    }
	function update_kesaksian($id, $cover_image, $title, $content, $author){
       	$this->db->query("
	  		update kesaksian
			set cover_image='".$cover_image."',title='".$title."',content='".$content."',author='".$author."'
			where id='".$id."'");
    }
	function delete_kesaksian($id){
		$this->db->query("delete from kesaksian where id=".$id);
	}
}
?>