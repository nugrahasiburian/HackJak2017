<?php
	class Kota_controller_Back extends CI_Controller{
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
			$this->load->model('backend/Kota_model_Back');
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
		
		/***** Show List of All Kota ********/
		public function get_list_of_kota(){
			$category = $this->uri->segment(2);
			$id_pulau_select_box = $this->input->post('id_pulau_select_box');
			
			$data['id_pulau_select_box'] = $id_pulau_select_box;
			$data['list_of_pulau'] =  $this->Pulau_Kota_Area_model_Back->get_list_of_pulau();
			$data['name_of_submenu_parent'] = $this->Menu_model_Back->get_name_of_submenu_parent($category);
			$data['all_kota_content'] = $this->Kota_model_Back->get_all_kota_content($id_pulau_select_box);
			return $this->load->view("backend/partial/Kota_show_list_Back",$data,true);
		}
		public function show_list_of_kota(){
			$template['css_template'] = $this->get_css_template();
			$template['header'] = $this->get_header();
			$template['menu'] = $this->get_menu();
			$template['body'] = $this->get_list_of_kota();
			$template['footer'] = $this->get_footer();
			$this->load->view("backend/Template_view_Back",$template);
		}
		
		/******** Create New / Edit Form Kota ************/
		public function get_form_kota(){
			$category = $this->uri->segment(2);
			$id = $this->uri->segment(4);
			
			$data['list_of_pulau'] = $this->Pulau_Kota_Area_model_Back->get_list_of_pulau();
			$data['list_of_kota'] = $this->Pulau_Kota_Area_model_Back->get_list_of_kota();
			$data['name_of_submenu_parent'] = $this->Menu_model_Back->get_name_of_submenu_parent($category);
			$data['selected_content_detail'] = $this->Kota_model_Back->get_selected_content_detail($id);
			return $this->load->view("backend/partial/Kota_form_Back",$data,true);
		}
		public function show_form_kota(){
			$template['css_template'] = $this->get_css_template();
			$template['header'] = $this->get_header();
			$template['menu'] = $this->get_menu();
			$template['body'] = $this->get_form_kota();
			$template['footer'] = $this->get_footer();
			$this->load->view("backend/Template_view_Back",$template);
		}
		
		/********* SQL Controller *************/
		public function insert_into_sql_controller() {
			$id_pulau = $this->input->post('id_pulau');
			$nama_kota = $this->input->post('nama_kota');
			
			$this->Kota_model_Back->insert_into_kota($id_pulau,$nama_kota);
			$_SESSION['is_success_operation_to_sql'] = 'success_insert';
			redirect('admin/kota');
		}
		public function update_sql_controller() {
			$id = $this->input->post('id');
			$id_pulau = $this->input->post('id_pulau');
			$nama_kota = $this->input->post('nama_kota');
			
			$this->Kota_model_Back->update_kota($id,$id_pulau,$nama_kota);
			$_SESSION['is_success_operation_to_sql'] = 'success_update';
			redirect('admin/kota/edit/'.$id.'');
		}
		public function delete_sql_controller() {
			$id = $this->uri->segment(4);
			
			$this->Kota_model_Back->delete_kota($id);
			$_SESSION['is_success_operation_to_sql'] = 'success_delete';
			redirect('admin/kota');
		}
	}
?>