<?php
	class Home_controller_Back extends CI_Controller{
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
		public function load_css_template(){
			$data['browser_info'] = $this->Browser_info_model->get_db_browser_info();
			return $this->load->view("backend/partial/CSS_Back",$data,true);
		}
		public function load_header(){
			if(isset($_SESSION['username'])){
				$data['username'] = "Login : ".$_SESSION['username'];
			}else{
				$data['username'] = "";
			}
			return $this->load->view("backend/partial/Header_Back",$data,true);
		}
		public function load_menu(){
			$category = $this->uri->segment(2);
			$data ['list_of_menu_parent'] = $this->Menu_model_Back->get_list_of_menu_parent($_SESSION['id_user_type']);
			return $this->load->view("backend/partial/Menu_Back",$data,true);
		}
		public function load_body(){
			return $this->load->view("backend/partial/Home_Back",NULL,true);
		}
		public function load_footer(){
			return $this->load->view("backend/partial/Footer_Back",NULL,true);
		}
		public function index(){
			$template['css_template'] = $this->load_css_template();
			$template['header'] = $this->load_header();
			$template['menu'] = $this->load_menu();
			$template['body'] = $this->load_body();
			$template['footer'] = $this->load_footer();
			$this->load->view("backend/Template_view_Back",$template);
		}
	}
?>