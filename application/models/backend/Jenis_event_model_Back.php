<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Jenis_event_model_Back extends CI_Model {
    function __construct(){
        parent::__construct();
    }
	function get_list_of_jenis_event(){
		$query = $this->db->query("
			select *
			from jenis_event
			order by urutan");
		return $query->result_array();
	}
	function get_selected_content_detail($id){
		$query = $this->db->query("
			select *
			from jenis_event
			where id='".$id."'");
		return $query->result_array();
	}
	function insert_into_jenis_event($nama_jenis_event, $arr_select){
       	for($i=0;$i<sizeof($arr_select);$i++){
			if (strpos($arr_select[$i], 'new') !== false) {
				$urutan = $i+1;
				$this->db->query("
				insert into jenis_event (nama_jenis_event, urutan) 
				values('".$nama_jenis_event."','".$urutan."')");
			}else{
				$id = $arr_select[$i];
				$urutan = $i+1;
				
				$this->db->query("
				update jenis_event
				set urutan='".$urutan."'
				where id='".$id."'");
			}
		}
    }
	function update_jenis_event($id,$nama_jenis_event,$arr_select){
       	$this->db->query("
	  		update jenis_event
			set nama_jenis_event='".$nama_jenis_event."'
			where id='".$id."'");
			
		for($i=0;$i<sizeof($arr_select);$i++){
			$id = $arr_select[$i];
			$urutan = $i+1;
			
			$this->db->query("
	  		update jenis_event
			set urutan='".$urutan."'
			where id='".$id."'");
		}
    }
	function delete_jenis_event($id){
		$this->db->query("delete from jenis_event where id=".$id);
	}
}
?>