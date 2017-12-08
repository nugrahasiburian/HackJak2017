<?php
	class Trend_busway_controller_Back extends CI_Controller{
		public function __construct(){
			parent::__construct();
			session_start();
			if(!isset($_SESSION['loginuser'])){
				redirect('admin/login');
			}
			$this->load->database();
			$this->load->model("shared/Browser_info_model");
			$this->load->model("backend/Menu_model_Back");
			$this->load->model('backend/Trend_busway_model_Back');
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
		
		/***** Show List of Trend_busway ********/
		public function get_list_of_trend_busway(){
			$category = $this->uri->segment(2);
			
			$data['name_of_submenu_parent'] = $this->Menu_model_Back->get_name_of_submenu_parent($category);
			$data['all_trend_busway_content'] = $this->Trend_busway_model_Back->get_list_of_trend_busway();
			return $this->load->view("backend/partial/Trend_busway_show_list_Back",$data,true);
		}
		public function show_list_of_trend_busway(){
			$template['css_template'] = $this->get_css_template();
			$template['header'] = $this->get_header();
			$template['menu'] = $this->get_menu();
			$template['body'] = $this->get_list_of_trend_busway();
			$template['footer'] = $this->get_footer();
			$this->load->view("backend/Template_view_Back",$template);
		}
		
		/******** Create New / Edit Form trend_busway ************/
		public function get_form_profl(){
			$category = $this->uri->segment(2);
			$id = $this->uri->segment(4);
			
			$data['name_of_submenu_parent'] = $this->Menu_model_Back->get_name_of_submenu_parent($category);
			$data['urutan_trend_busway'] = $this->Trend_busway_model_Back->get_list_of_trend_busway();
			$data['selected_submenu_detail'] = $this->Trend_busway_model_Back->get_selected_content_detail($id);
			return $this->load->view("backend/partial/Trend_busway_form_Back",$data,true);
		}
		public function show_form_trend_busway(){
			$template['css_template'] = $this->get_css_template();
			$template['header'] = $this->get_header();
			$template['menu'] = $this->get_menu();
			$template['body'] = $this->get_form_profl();
			$template['footer'] = $this->get_footer();
			$this->load->view("backend/Template_view_Back",$template);
		}
		
		/********* SQL Controller *************/
		public function insert_into_sql_controller() {
			$cover_image = $this->input->post('cover_image');
			$name = $this->input->post('judul');
			$content = $this->input->post('isi');
			$batas_atas = $this->input->post('batas_atas');
			$arr_select = array();
			for($i=1;$i<=$batas_atas;$i++){
				array_push($arr_select, $this->input->post("select_".$i));
			}
			$this->Trend_busway_model_Back->insert_into_trend_busway($name, $content, $arr_select);
			$_SESSION['is_success_operation_to_sql'] = 'success_insert';
			redirect('admin/trend-busway');
		}
		public function update_sql_controller() {
			$id = $this->input->post('id');
			$name = $this->input->post('judul');
			$content = $this->input->post('isi');
			$batas_atas = $this->input->post('batas_atas');
			$arr_select = array();
			for($i=1;$i<=$batas_atas;$i++){
				array_push($arr_select, $this->input->post("select_".$i));
			}
			
			$this->Trend_busway_model_Back->update_trend_busway($id, $name, $content, $arr_select);
			$_SESSION['is_success_operation_to_sql'] = 'success_update';
			redirect('admin/trend-busway/edit/'.$id);
		}
		public function delete_sql_controller() {
			$id = $this->uri->segment(4);
			
			$this->Trend_busway_model_Back->delete_trend_busway($id);
			$_SESSION['is_success_operation_to_sql'] = 'success_delete';
			redirect('admin/trend-busway');
		}
	}
?>