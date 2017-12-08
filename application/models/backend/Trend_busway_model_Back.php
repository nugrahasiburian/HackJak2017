<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Trend_busway_model_Back extends CI_Model {
    
    function __construct(){
        parent::__construct();
    }
	function get_list_of_trend_busway(){
		$query = $this->db->query("
			select *
			from trend_busway
			order by urutan");
		return $query->result_array();
	}
	function get_selected_content_detail($id){
		$query = $this->db->query("
			select *
			from trend_busway
			where id='".$id."'");
		return $query->result_array();
	}
	function insert_into_trend_busway($name, $content, $arr_select){
       	for($i=0;$i<sizeof($arr_select);$i++){
			if (strpos($arr_select[$i], 'new') !== false) {
				$urutan = $i+1;
				$this->db->query("
				insert into trend_busway (name, content, urutan) 
				values('".$name."','".$content."','".$urutan."')");
			}else{
				$id = $arr_select[$i];
				$urutan = $i+1;
				
				$this->db->query("
				update trend_busway
				set urutan='".$urutan."'
				where id='".$id."'");
			}
		}
    }
	function update_trend_busway($id, $name, $content, $arr_select){
       	$this->db->query("
	  		update trend_busway
			set name='".$name."', content='".$content."'
			where id='".$id."'");
			
		for($i=0;$i<sizeof($arr_select);$i++){
			$id = $arr_select[$i];
			$urutan = $i+1;
			
			$this->db->query("
	  		update trend_busway
			set urutan='".$urutan."'
			where id='".$id."'");
		}
    }
	function delete_trend_busway($id){
		$this->db->query("delete from trend_busway where id=".$id);
	}
}
?>