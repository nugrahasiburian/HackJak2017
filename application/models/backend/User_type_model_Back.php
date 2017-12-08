<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User_type_model_Back extends CI_Model {
    
    function __construct(){
        parent::__construct();
    }
	function get_selected_content_detail($id){
		$query = $this->db->query("
			select *
			from user_type
			where id='".$id."'");
		return $query->result_array();
	}
	function get_list_of_user_type(){
		$query = $this->db->query("
			select *
			from user_type
			order by name_user_type asc");
		return $query->result_array();
	}
	function insert_into_user_type($name_user_type){
		$this->db->query("
		insert into user_type (name_user_type) 
		values('".$name_user_type."')");
    }
	function update_user_type($id,$name_user_type){
       	$this->db->query("
	  		update user_type
			set name_user_type='".$name_user_type."'
			where id='".$id."'");
    }
	function delete_user_type($id){
		$this->db->query("delete from user_type where id=".$id);
	}
}
?>