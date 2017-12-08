<?php
	class Area_controller_Back extends CI_Controller{
		public function __construct(){
			parent::__construct();
			session_start();
			if(!isset($_SESSION['loginuser'])){
				redirect('admin/login');
			}
			$this->load->database();
			$this->load->model("shared/Browser_info_model");
			$this->load->model("backend/Menu_model_Back");
			$this->load->model("backend/Pulau_Kota_Area_model_Back");
			$this->load->model('backend/Area_model_Back');
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
		
		/***** Show List of All Area ********/
		public function get_list_of_area(){
			$category = $this->uri->segment(2);
			$id_kota_select_box = $this->input->post('id_kota_select_box');
			
			$data['id_kota_select_box'] = $id_kota_select_box;
			$data['list_of_kota'] =  $this->Pulau_Kota_Area_model_Back->get_list_of_kota();
			$data['name_of_submenu_parent'] = $this->Menu_model_Back->get_name_of_submenu_parent($category);
			$data['all_area_content'] = $this->Area_model_Back->get_all_area_content($id_kota_select_box);
			return $this->load->view("backend/partial/Area_show_list_Back",$data,true);
		}
		public function show_list_of_area(){
			$template['css_template'] = $this->get_css_template();
			$template['header'] = $this->get_header();
			$template['menu'] = $this->get_menu();
			$template['body'] = $this->get_list_of_area();
			$template['footer'] = $this->get_footer();
			$this->load->view("backend/Template_view_Back",$template);
		}
		
		/******** Create New / Edit Form Area ************/
		public function get_form_area(){
			$category = $this->uri->segment(2);
			$id = $this->uri->segment(4);
			
			$data['list_of_kota'] = $this->Pulau_Kota_Area_model_Back->get_list_of_kota();
			$data['list_of_area'] = $this->Pulau_Kota_Area_model_Back->get_list_of_area();
			$data['name_of_submenu_parent'] = $this->Menu_model_Back->get_name_of_submenu_parent($category);
			$data['selected_content_detail'] = $this->Area_model_Back->get_selected_content_detail($id);
			return $this->load->view("backend/partial/Area_form_Back",$data,true);
		}
		public function show_form_area(){
			$template['css_template'] = $this->get_css_template();
			$template['header'] = $this->get_header();
			$template['menu'] = $this->get_menu();
			$template['body'] = $this->get_form_area();
			$template['footer'] = $this->get_footer();
			$this->load->view("backend/Template_view_Back",$template);
		}
		
		/********* SQL Controller *************/
		public function insert_into_sql_controller() {
			$id_kota = $this->input->post('id_kota');
			$nama_area = $this->input->post('nama_area');
			
			$this->Area_model_Back->insert_into_area($id_kota,$nama_area);
			$_SESSION['is_success_operation_to_sql'] = 'success_insert';
			redirect('admin/area');
		}
		public function update_sql_controller() {
			$id = $this->input->post('id');
			$id_kota = $this->input->post('id_kota');
			$nama_area = $this->input->post('nama_area');
			
			$this->Area_model_Back->update_area($id,$id_kota,$nama_area);
			$_SESSION['is_success_operation_to_sql'] = 'success_update';
			redirect('admin/area/edit/'.$id.'');
		}
		public function delete_sql_controller() {
			$id = $this->uri->segment(4);
			
			$this->Area_model_Back->delete_area($id);
			$_SESSION['is_success_operation_to_sql'] = 'success_delete';
			redirect('admin/area');
		}
	}
?>