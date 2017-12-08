<?php
	class Menu_controller_Back extends CI_Controller{
		public function __construct(){
			parent::__construct();
			session_start();
			if(!isset($_SESSION['loginuser'])){
				redirect('admin/login');
			}
			$this->load->database();
			$this->load->model("shared/Browser_info_model");
			$this->load->model("backend/Menu_model_Back");
		}
		public function get_css_template(){
			$data['browser_info'] = $this->Browser_info_model->get_db_browser_info();
			return $this->load->view("backend/partial/CSS_Back",$data,true);
		}
		public function get_header(){
			if(isset($_SESSION['username'])){
				$data['username'] = "Login : ".$_SESSION['username'];
			}else{
				$data['username'] = "";
			}
			return $this->load->view("backend/partial/Header_Back",$data,true);
		}
		public function get_menu(){
			$category = $this->uri->segment(2);
			
			$data ['list_of_menu_parent'] = $this->Menu_model_Back->get_list_of_menu_parent($_SESSION['id_user_type']);
			return $this->load->view("backend/partial/Menu_Back",$data,true);
		}
		public function get_footer(){
			return $this->load->view("backend/partial/Footer_Back",NULL,true);
		}
		
		/***** Show List of All Menu ********/
		public function get_list_of_menu(){
			$category = $this->uri->segment(2);
			
			$data['name_of_submenu_parent'] = $this->Menu_model_Back->get_name_of_submenu_parent($category);
			$data['all_menu_content'] = $this->Menu_model_Back->get_list_of_menu_all();
			return $this->load->view("backend/partial/Menu_show_list_Back",$data,true);
		}
		public function show_list_of_menu(){
			$template['css_template'] = $this->get_css_template();
			$template['header'] = $this->get_header();
			$template['menu'] = $this->get_menu();
			$template['body'] = $this->get_list_of_menu();
			$template['footer'] = $this->get_footer();
			$this->load->view("backend/Template_view_Back",$template);
		}
		
		/******** Create New / Edit Form Menu ************/
		public function get_form_menu(){
			$category = $this->uri->segment(2);
			$id = $this->uri->segment(4);
			
			$data['list_of_user_type'] = $this->Menu_model_Back->get_list_of_user_type();
			$data['name_of_submenu_parent'] = $this->Menu_model_Back->get_name_of_submenu_parent($category);
			$data['urutan_menu'] = $this->Menu_model_Back->get_list_of_menu_all();
			$data['list_of_menu_front'] = $this->Menu_model_Back->get_list_of_menu_front();
			$data['selected_content_detail'] = $this->Menu_model_Back->get_selected_content_detail($id);
			return $this->load->view("backend/partial/Menu_form_Back",$data,true);
		}
		public function show_form_menu(){
			$template['css_template'] = $this->get_css_template();
			$template['header'] = $this->get_header();
			$template['menu'] = $this->get_menu();
			$template['body'] = $this->get_form_menu();
			$template['footer'] = $this->get_footer();
			$this->load->view("backend/Template_view_Back",$template);
		}
		
		/********* SQL Controller *************/
		public function update_sql_controller() {
			$id = $this->input->post('id');
			$nama_menu = $this->input->post('nama_menu');
			$menu_parent = $this->input->post('menu_parent');
			$is_front = $this->input->post('is_front');
			$is_back = $this->input->post('is_back');
			if($is_front=="yes"){
				$cover_image = $this->input->post('cover_image');
				$deskripsi = $this->input->post('deskripsi');
			}else{
				$cover_image = "";
				$deskripsi = "";
			}
			$batas_atas_urutan = $this->input->post('batas_atas_urutan');
			$arr_select = array();
			for($i=1;$i<=$batas_atas_urutan;$i++){
				array_push($arr_select, $this->input->post("select_".$i));
			}
			
			$batas_atas_checkbox_user_type = $this->input->post('batas_atas_checkbox_user_type');
			$arr_checkbox_user_type = "";
			for($i=0;$i<$batas_atas_checkbox_user_type;$i++){
				if($i==0){
					$arr_checkbox_user_type = $this->input->post("user_type_".$i);
				}else{
					$arr_checkbox_user_type .= ",".$this->input->post("user_type_".$i);
				}
			}
			
			$this->Menu_model_Back->update_menu($id, $nama_menu, $cover_image, $deskripsi, $menu_parent, $is_front, $is_back, $arr_select, $arr_checkbox_user_type);
			$_SESSION['is_success_operation_to_sql'] = 'success_update';
			redirect('admin/menu/edit/'.$id.'');
		}
		public function delete_sql_controller() {
			$id = $this->uri->segment(4);
			
			$this->Menu_model_Back->delete_menu($id);
			$_SESSION['is_success_operation_to_sql'] = 'success_delete';
			redirect('admin/menu');
		}
	}
?>