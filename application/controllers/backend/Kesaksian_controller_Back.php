<?php
	class Kesaksian_controller_Back extends CI_Controller{
		public function __construct(){
			parent::__construct();
			session_start();
			if(!isset($_SESSION['loginuser'])){
				redirect('admin/login');
			}
			$this->load->database();
			$this->load->model("shared/Browser_info_model");
			$this->load->model("backend/Menu_model_Back");
			$this->load->model('backend/Kesaksian_model_Back');
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
		
		/***** Show List of All Kesaksian ********/
		public function get_list_of_kesaksian($month, $year){
			$category = $this->uri->segment(2);
			$data['month'] = $month;
			$data['year'] = $year;
			
			$data['name_of_submenu_parent'] = $this->Menu_model_Back->get_name_of_submenu_parent($category);
			$data['all_kesaksian_content'] = $this->Kesaksian_model_Back->get_all_kesaksian_content($category,$month, $year);
			return $this->load->view("backend/partial/Kesaksian_show_list_Back",$data,true);
		}
		public function show_list_of_kesaksian(){
			$month = date('m');
			$year = date('Y');
			if($this->input->post('date_search_box')!=""){
				$date = $this->input->post('date_search_box');
				$arr_date = explode("/",$date);
				$month = $arr_date[0];
				$year = $arr_date[1];
			}
			
			$template['css_template'] = $this->get_css_template();
			$template['header'] = $this->get_header();
			$template['menu'] = $this->get_menu();
			$template['body'] = $this->get_list_of_kesaksian($month, $year);
			$template['footer'] = $this->get_footer();
			$this->load->view("backend/Template_view_Back",$template);
		}
		
		/******** Create New / Edit Form Kesaksian ************/
		public function get_form_kesaksian(){
			$category = $this->uri->segment(2);
			$id = $this->uri->segment(4);
			
			$data['name_of_submenu_parent'] = $this->Menu_model_Back->get_name_of_submenu_parent($category);
			$data['selected_content_detail'] = $this->Kesaksian_model_Back->get_selected_content_detail($category, $id);		
			return $this->load->view("backend/partial/Kesaksian_form_Back",$data,true);
		}
		public function show_form_kesaksian(){
			$template['css_template'] = $this->get_css_template();
			$template['header'] = $this->get_header();
			$template['menu'] = $this->get_menu();
			$template['body'] = $this->get_form_kesaksian();
			$template['footer'] = $this->get_footer();
			$this->load->view("backend/Template_view_Back",$template);
		}
		
		/********* SQL Controller *************/
		public function insert_into_sql_controller() {
			$cover_image = $this->input->post('cover_image');
			$title = $this->input->post('judul');
			$content = $this->input->post('isi');
			$author = $this->input->post('author');
			$this->Kesaksian_model_Back->insert_into_kesaksian($cover_image, $title, $content, $author);
			$_SESSION['is_success_operation_to_sql'] = 'success_insert';
			redirect('admin/kesaksian');
		}
		public function update_sql_controller() {
			$id = $this->input->post('id');
			$cover_image = $this->input->post('cover_image');
			$title = $this->input->post('judul');
			$content = $this->input->post('isi');
			$author = $this->input->post('author');
			$this->Kesaksian_model_Back->update_kesaksian($id, $cover_image, $title, $content, $author);    
			$_SESSION['is_success_operation_to_sql'] = 'success_update';
			redirect('admin/kesaksian/edit/'.$id.'');
		}
		public function delete_sql_controller() {
			$id = $this->uri->segment(4);
			
			$this->Kesaksian_model_Back->delete_kesaksian($id);
			$_SESSION['is_success_operation_to_sql'] = 'success_delete';
			redirect('admin/kesaksian');
		}
	}
?>