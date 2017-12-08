<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Login_model_Back extends CI_Model{
	 	function __construct(){
        	// Call the Model constructor
          	parent::__construct();
     	}
		function get_user($user_email, $user_password){
	   		$query = $this->db->query("
	  		select *
			from user
			where user_email='".$user_email."' and user_password='".md5($user_password)."'");
	 	
			return $query->result_array();
	 	}
	}
?>