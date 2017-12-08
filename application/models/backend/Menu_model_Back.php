<?php
	class Menu_model_Back extends CI_Model{
		function __construct(){
			parent::__construct();
		}
		function get_list_of_menu_parent($id_user_type){
			$query = $this->db->query("
				select *
				from menu
				where menu_parent=0 and (id_user_type like '%$id_user_type,%' or id_user_type like '%,$id_user_type,%' or id_user_type like '%,$id_user_type%' or id_user_type = $id_user_type)
				order by urutan asc");
			return $query->result_array();
		}
		function get_name_of_submenu_parent($category){
			$query = $this->db->query("
				select nama_menu
				from menu
				where tag_name='".$category."'");
			return $query->result_array();
		}
		function get_list_of_menu_all(){
			$query = $this->db->query("
				select *
				from menu
				order by urutan asc");
			return $query->result_array();
		}
		function get_list_of_menu_front(){
			$query = $this->db->query("
				select *
				from menu
				where is_front='yes'
				order by urutan asc");
			return $query->result_array();
		}
		function get_selected_content_detail($id){
			$query = $this->db->query("
				select *
				from menu
				where id='".$id."'");
			return $query->result_array();
		}
		function get_list_of_user_type(){
			$query = $this->db->query("
				select *
				from user_type");
			return $query->result_array();
		}
		
		function update_menu($id, $nama_menu, $cover_image, $deskripsi, $menu_parent, $is_front, $is_back, $arr_select, $arr_checkbox_user_type){
			$this->db->query("
				update menu
				set nama_menu='".$nama_menu."', cover_image='".$cover_image."', deskripsi='".$deskripsi."', menu_parent='".$menu_parent."', is_front='".$is_front."', is_back='".$is_back."', id_user_type='".$arr_checkbox_user_type."'
				where id='".$id."'");
				
			for($i=0;$i<sizeof($arr_select);$i++){
				$id = $arr_select[$i];
				$urutan = $i+1;
				
				$this->db->query("
				update menu
				set urutan='".$urutan."'
				where id='".$id."'");
			}
		}
		function delete_jenis_event($id){
			$this->db->query("delete from menu where id=".$id);
		}
	}
?>