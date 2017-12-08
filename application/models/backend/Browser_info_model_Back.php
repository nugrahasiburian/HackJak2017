<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Browser_info_model_Back extends CI_Model {
    
    function __construct(){
        parent::__construct();
    }
	function get_browser_info_content(){
		$query = $this->db->query("
			select *
			from browser_info");
		return $query->result_array();
	}
	function get_selected_content_detail($id){
		$query = $this->db->query("
			select *
			from browser_info
			where id='".$id."'");
		return $query->result_array();
	}
	function insert_into_browser_info($site_name,$title,$icon){
       	$this->db->query("
	  		insert into browser_info (site_name,title,icon)
			values(".$site_name.",'".$title."','".$icon."')");
    }
	function update_browser_info($id,$site_name,$title,$icon){
       	$this->db->query("
	  		update browser_info
			set site_name='".$site_name."',title='".$title."',icon='".$icon."'
			where id='".$id."'");
    }
	function delete_browser_info($id){
		$this->db->query("delete from browser_info where id=".$id);
	}
}
?>