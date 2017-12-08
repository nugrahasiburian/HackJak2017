<?php
	class Home_controller_Front extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->model("shared/Browser_info_model");
			$this->load->model("frontend/Menu_model_Front");
			$this->load->model("frontend/Home_model_Front");
			$this->load->model("frontend/Event_all_model_Front");
			$this->load->model("frontend/Footer_model_Front");
		}
		public function load_css_template(){
			$category = $this->uri->segment(1);
			$data['browser_info'] = $this->Browser_info_model->get_db_browser_info();
			return $this->load->view("frontend/partial/CSS_Front",$data,true);
		}
		public function load_menu(){
			$data['browser_info'] = $this->Browser_info_model->get_db_browser_info();
			$data ['menu'] = $this->Menu_model_Front->get_db_menu();
			return $this->load->view("frontend/partial/Menu_Front",$data,true);
		}
		public function load_body(){
			$data['kecamatan'] = $this->Home_model_Front->get_db_kecamatan();
			$data['kelurahan'] = $this->Home_model_Front->get_db_kelurahan();
			
			return $this->load->view("frontend/partial/Home_Front",$data,true);
		}
		public function load_footer(){
			$data['sosmed'] = $this->Footer_model_Front->get_sosmed();
			return $this->load->view("frontend/partial/Footer_Front",$data,true);
		}
		public function index(){
			$template['css_template'] = $this->load_css_template();
			$template['menu'] = $this->load_menu();
			$template['body'] = $this->load_body();
			$template['footer'] = $this->load_footer();
			$this->load->view("frontend/Template_view_Front",$template);
		}
	}
?>