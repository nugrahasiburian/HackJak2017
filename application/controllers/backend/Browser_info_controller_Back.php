<?php
	class Browser_info_controller_Back extends CI_Controller{
		public function __construct(){
			parent::__construct();
			session_start();
			if(!isset($_SESSION['loginuser'])){
				redirect('admin/login');
			}
			$this->load->database();
			$this->load->model("shared/Browser_info_model");
			$this->load->model("backend/Menu_model_Back");
			$this->load->model('backend/Browser_info_model_Back');
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
		
		/***** Show List of All Browser Info ********/
		public function get_broswer_info(){
			$category = $this->uri->segment(2);
			
			$data['name_of_submenu_parent'] = $this->Menu_model_Back->get_name_of_submenu_parent($category);
			$data['browser_info_content'] = $this->Browser_info_model_Back->get_browser_info_content();
			return $this->load->view("backend/partial/Browser_info_show_Back",$data,true);
		}
		public function show_list_of_browser_info(){
			$template['css_template'] = $this->get_css_template();
			$template['header'] = $this->get_header();
			$template['menu'] = $this->get_menu();
			$template['body'] = $this->get_broswer_info();
			$template['footer'] = $this->get_footer();
			$this->load->view("backend/Template_view_Back",$template);
		}
		
		/******** Create New / Edit Form Browser Info ************/
		public function get_form_browser_info(){
			$category = $this->uri->segment(2);
			$id = $this->uri->segment(4);
			
			$data['name_of_submenu_parent'] = $this->Menu_model_Back->get_name_of_submenu_parent($category);
			$data['selected_content_detail'] = $this->Browser_info_model_Back->get_selected_content_detail($id);		
			return $this->load->view("backend/partial/Browser_info_form_Back",$data,true);
		}
		public function show_form_browser_info(){
			$template['css_template'] = $this->get_css_template();
			$template['header'] = $this->get_header();
			$template['menu'] = $this->get_menu();
			$template['body'] = $this->get_form_browser_info();
			$template['footer'] = $this->get_footer();
			$this->load->view("backend/Template_view_Back",$template);
		}
		
		/********* SQL Controller *************/
		public function insert_into_sql_controller() {
			$site_name  = $this->input->post('site_name');
			$title = $this->input->post('title');
			$icon = $this->input->post('icon');
			
			$this->Browser_info_model_Back->insert_into_browser_info($site_name,$title,$icon);
			$_SESSION['is_success_operation_to_sql'] = 'success_insert';
			redirect('admin/browser_info');
		}
		public function update_sql_controller() {
			$id = $this->input->post('id');
			$site_name  = $this->input->post('site_name');
			$title = $this->input->post('title');
			$icon = $this->input->post('icon');
			
			$this->Browser_info_model_Back->update_browser_info($id,$site_name,$title,$icon);
			$_SESSION['is_success_operation_to_sql'] = 'success_update';
			redirect('admin/browser_info/edit/'.$id.'');
		}
		public function delete_sql_controller() {
			$id = $this->uri->segment(4);
			
			$this->Browser_info_model_Back->delete_browser_info($id);
			$_SESSION['is_success_operation_to_sql'] = 'success_delete';
			redirect('admin/browser_info');
		}
	}
?>