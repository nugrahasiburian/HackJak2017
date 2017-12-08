<?php
	class Jenis_event_controller_Back extends CI_Controller{
		public function __construct(){
			parent::__construct();
			session_start();
			if(!isset($_SESSION['loginuser'])){
				redirect('admin/login');
			}
			$this->load->database();
			$this->load->model("shared/Browser_info_model");
			$this->load->model("backend/Menu_model_Back");
			$this->load->model('backend/Jenis_event_model_Back');
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
		
		/***** Show List of All Jenis_event ********/
		public function get_list_of_jenis_event(){
			$category = $this->uri->segment(2);
			
			$data['name_of_submenu_parent'] = $this->Menu_model_Back->get_name_of_submenu_parent($category);
			$data['all_jenis_event_content'] = $this->Jenis_event_model_Back->get_list_of_jenis_event();
			return $this->load->view("backend/partial/Jenis_event_show_list_Back",$data,true);
		}
		public function show_list_of_jenis_event(){
			$template['css_template'] = $this->get_css_template();
			$template['header'] = $this->get_header();
			$template['menu'] = $this->get_menu();
			$template['body'] = $this->get_list_of_jenis_event();
			$template['footer'] = $this->get_footer();
			$this->load->view("backend/Template_view_Back",$template);
		}
		
		/******** Create New / Edit Form Jenis_event ************/
		public function get_form_jenis_event(){
			$category = $this->uri->segment(2);
			$id = $this->uri->segment(4);
			
			$data['name_of_submenu_parent'] = $this->Menu_model_Back->get_name_of_submenu_parent($category);
			$data['urutan_jenis_event'] = $this->Jenis_event_model_Back->get_list_of_jenis_event();
			$data['selected_content_detail'] = $this->Jenis_event_model_Back->get_selected_content_detail($id);
			return $this->load->view("backend/partial/Jenis_event_form_Back",$data,true);
		}
		public function show_form_jenis_event(){
			$template['css_template'] = $this->get_css_template();
			$template['header'] = $this->get_header();
			$template['menu'] = $this->get_menu();
			$template['body'] = $this->get_form_jenis_event();
			$template['footer'] = $this->get_footer();
			$this->load->view("backend/Template_view_Back",$template);
		}
		
		/********* SQL Controller *************/
		public function insert_into_sql_controller() {
			$nama_jenis_event = $this->input->post('nama_jenis_event');
			$batas_atas = $this->input->post('batas_atas');
			$arr_select = array();
			for($i=1;$i<=$batas_atas;$i++){
				array_push($arr_select, $this->input->post("select_".$i));
			}
			$this->Jenis_event_model_Back->insert_into_jenis_event($nama_jenis_event, $arr_select);
			$_SESSION['is_success_operation_to_sql'] = 'success_insert';
			redirect('admin/jenis-event');
		}
		public function update_sql_controller() {
			$id = $this->input->post('id');
			$nama_jenis_event = $this->input->post('nama_jenis_event');
			$batas_atas = $this->input->post('batas_atas');
			$arr_select = array();
			for($i=1;$i<=$batas_atas;$i++){
				array_push($arr_select, $this->input->post("select_".$i));
			}
			
			$this->Jenis_event_model_Back->update_jenis_event($id, $nama_jenis_event, $arr_select);
			$_SESSION['is_success_operation_to_sql'] = 'success_update';
			redirect('admin/jenis-event/edit/'.$id.'');
		}
		public function delete_sql_controller() {
			$id = $this->uri->segment(4);
			
			$this->Jenis_event_model_Back->delete_jenis_event($id);
			$_SESSION['is_success_operation_to_sql'] = 'success_delete';
			redirect('admin/jenis-event');
		}
	}
?>