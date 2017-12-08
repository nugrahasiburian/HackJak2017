<?php
	class Taman_controller_Back extends CI_Controller{
		public function __construct(){
			parent::__construct();
			session_start();
			if(!isset($_SESSION['loginuser'])){
				redirect('admin/login');
			}
			$this->load->database();
			$this->load->model("shared/Browser_info_model");
			$this->load->model("backend/Menu_model_Back");
			$this->load->model('backend/Taman_model_Back');
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
		
		/***** Show List of All Taman ********/
		public function get_list_of_taman(){
			$category = $this->uri->segment(2);
			
			$data['name_of_submenu_parent'] = $this->Menu_model_Back->get_name_of_submenu_parent($category);
			$data['all_taman_content'] = $this->Taman_model_Back->get_all_taman_content($category);
			return $this->load->view("backend/partial/Taman_show_list_Back",$data,true);
		}
		public function show_list_of_taman(){
			$template['css_template'] = $this->get_css_template();
			$template['header'] = $this->get_header();
			$template['menu'] = $this->get_menu();
			$template['body'] = $this->get_list_of_taman();
			$template['footer'] = $this->get_footer();
			$this->load->view("backend/Template_view_Back",$template);
		}
		
		/******** Create New / Edit Form Taman ************/
		public function get_form_taman(){
			$category = $this->uri->segment(2);
			$id = $this->uri->segment(4);
			
			$data['name_of_submenu_parent'] = $this->Menu_model_Back->get_name_of_submenu_parent($category);
			$data['selected_content_detail'] = $this->Taman_model_Back->get_selected_content_detail($category, $id);		
			return $this->load->view("backend/partial/Taman_form_Back",$data,true);
		}
		public function show_form_taman(){
			$template['css_template'] = $this->get_css_template();
			$template['header'] = $this->get_header();
			$template['menu'] = $this->get_menu();
			$template['body'] = $this->get_form_taman();
			$template['footer'] = $this->get_footer();
			$this->load->view("backend/Template_view_Back",$template);
		}
		
		/********* SQL Controller *************/
		public function insert_into_sql_controller() {
			$cover_image = $this->input->post('cover_image');
			$nama_taman = $this->input->post('nama_taman');
			$infrastruktur = $this->input->post('infrastruktur');
			$this->Taman_model_Back->insert_into_taman($cover_image, $nama_taman, $infrastruktur);
			$_SESSION['is_success_operation_to_sql'] = 'success_insert';
			redirect('admin/taman');
		}
		public function update_sql_controller() {
			$id = $this->input->post('id');
			$cover_image = $this->input->post('cover_image');
			$nama_taman = $this->input->post('nama_taman');
			$infrastruktur = $this->input->post('infrastruktur');
			$this->Taman_model_Back->update_taman($id, $cover_image, $nama_taman, $infrastruktur);    
			$_SESSION['is_success_operation_to_sql'] = 'success_update';
			redirect('admin/taman/edit/'.$id.'');
		}
		public function delete_sql_controller() {
			$id = $this->uri->segment(4);
			
			$this->Taman_model_Back->delete_taman($id);
			$_SESSION['is_success_operation_to_sql'] = 'success_delete';
			redirect('admin/taman');
		}
	}
?>