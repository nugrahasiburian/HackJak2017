<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User_model_Back extends CI_Model {
    
    function __construct(){
        parent::__construct();
    }
	function get_selected_content_detail($id){
		$query = $this->db->query("
			select *
			from user
			where id='".$id."'");
		return $query->result_array();
	}
	function get_list_of_user(){
		$query = $this->db->query("
			select usr.*,ust.*
			from user as usr, user_type as ust
			where usr.id_user_type=ust.id
			order by usr.id_user_type asc");
		return $query->result_array();
	}
	function get_list_of_user_type(){
		$query = $this->db->query("
			select *
			from user_type");
		return $query->result_array();
	}
	function insert_into_user($id_kota,$id_user_type,$username,$user_email,$user_password){
		$this->db->query("
		insert into user (id_kota,id_user_type,username,user_email,user_password) 
		values('".$id_kota."','".$id_user_type."','".$username."','".$user_email."','".$user_password."')");
    }
	function update_user($id,$id_kota,$id_user_type,$username,$user_email,$user_password){
       	$this->db->query("
	  		update user
			set id_kota='$id_kota', id_user_type='$id_user_type', username='$username', user_email='$user_email', user_password='$user_password'
			where id=$id");
    }
	function delete_user($id){
		$this->db->query("delete from user where id=".$id);
	}
}
?>