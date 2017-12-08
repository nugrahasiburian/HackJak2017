<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pulau_model_Back extends CI_Model {
    
    function __construct(){
        parent::__construct();
    }
	function get_selected_content_detail($id){
		$query = $this->db->query("
			select *
			from pulau_indonesia
			where id='".$id."'");
		return $query->result_array();
	}
	function insert_into_pulau($nama_pulau, $arr_select){
       	for($i=0;$i<sizeof($arr_select);$i++){
			if (strpos($arr_select[$i], 'new') !== false) {
				$urutan = $i+1;
				$this->db->query("
				insert into pulau_indonesia (nama_pulau, urutan) 
				values('".$nama_pulau."','".$urutan."')");
			}else{
				$id = $arr_select[$i];
				$urutan = $i+1;
				
				$this->db->query("
				update pulau_indonesia
				set urutan='".$urutan."'
				where id='".$id."'");
			}
		}
    }
	function update_pulau($id,$nama_pulau,$arr_select){
       	$this->db->query("
	  		update pulau_indonesia
			set nama_pulau='".$nama_pulau."'
			where id='".$id."'");
			
		for($i=0;$i<sizeof($arr_select);$i++){
			$id = $arr_select[$i];
			$urutan = $i+1;
			
			$this->db->query("
	  		update pulau_indonesia
			set urutan='".$urutan."'
			where id='".$id."'");
		}
    }
	function delete_pulau($id){
		$this->db->query("delete from pulau_indonesia where id=".$id);
	}
}
?>