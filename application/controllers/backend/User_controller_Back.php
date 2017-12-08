<?php
	class User_controller_Back extends CI_Controller{
		public function __construct(){
			parent::__construct();
			session_start();
			if(!isset($_SESSION['loginuser'])){
				redirect('admin/login');
			}
			$this->load->database();
			$this->load->model("shared/Browser_info_model");
			$this->load->model("backend/Menu_model_Back");
			$this->load->model('backend/User_model_Back');
			$this->load->model('backend/Pulau_Kota_Area_model_Back');
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
		
		/***** Show List of User ********/
		public function get_list_of_user(){
			$category = $this->uri->segment(2);
			$id = $this->uri->segment(4);
			
			$data['name_of_submenu_parent'] = $this->Menu_model_Back->get_name_of_submenu_parent($category);
			$data['all_user_content'] = $this->User_model_Back->get_list_of_user();
			return $this->load->view("backend/partial/User_show_list_Back",$data,true);
		}
		public function show_list_of_user(){
			$template['css_template'] = $this->get_css_template();
			$template['header'] = $this->get_header();
			$template['menu'] = $this->get_menu();
			$template['body'] = $this->get_list_of_user();
			$template['footer'] = $this->get_footer();
			$this->load->view("backend/Template_view_Back",$template);
		}
		
		/******** Create New / Edit Form User ************/
		public function get_form_user(){
			$category = $this->uri->segment(2);
			$id = $this->uri->segment(4);
			
			$data['list_of_user_type'] = $this->User_model_Back->get_list_of_user_type();
			$data['list_of_kota'] = $this->Pulau_Kota_Area_model_Back->get_list_of_kota();
			$data['name_of_submenu_parent'] = $this->Menu_model_Back->get_name_of_submenu_parent($category);
			$data['selected_content_detail'] = $this->User_model_Back->get_selected_content_detail($id);
			return $this->load->view("backend/partial/User_form_Back",$data,true);
		}
		public function show_form_user(){
			$template['css_template'] = $this->get_css_template();
			$template['header'] = $this->get_header();
			$template['menu'] = $this->get_menu();
			$template['body'] = $this->get_form_user();
			$template['footer'] = $this->get_footer();
			$this->load->view("backend/Template_view_Back",$template);
		}
		
		/********* SQL Controller *************/
		public function insert_into_sql_controller() {
			$username = $this->input->post('username');
			$user_email = $this->input->post('user_email');
			$user_password = md5($this->input->post('user_password'));
			$id_user_type = $this->input->post('id_user_type');
			$id_kota = $this->input->post('id_kota');
			
			$this->User_model_Back->insert_into_user($id_kota,$id_user_type,$username,$user_email,$user_password);
			$_SESSION['is_success_operation_to_sql'] = 'success_insert';
			redirect('admin/user');
		}
		public function update_sql_controller() {
			$id = $this->input->post('id');
			$username = $this->input->post('username');
			$user_email = $this->input->post('user_email');
			$user_password = md5($this->input->post('user_password'));
			$id_user_type = $this->input->post('id_user_type');
			$id_kota = $this->input->post('id_kota');
			
			$this->User_model_Back->update_user($id,$id_kota,$id_user_type,$username,$user_email,$user_password);
			$_SESSION['is_success_operation_to_sql'] = 'success_update';
			redirect('admin/user/edit/'.$id.'');
		}
		public function delete_sql_controller() {
			$id = $this->uri->segment(4);
			
			$this->User_model_Back->delete_user($id);
			$_SESSION['is_success_operation_to_sql'] = 'success_delete';
			redirect('admin/user');
		}
	}
?>