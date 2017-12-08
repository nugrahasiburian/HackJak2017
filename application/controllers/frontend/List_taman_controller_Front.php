<?php
	class List_taman_controller_Front extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->model("shared/Browser_info_model");
			$this->load->model("frontend/Menu_model_Front");
			$this->load->model("frontend/List_taman_all_model_Front");
			$this->load->model("frontend/Footer_model_Front");
		}
		public function get_css_template(){
			$category = $this->uri->segment(1);
			$data['browser_info'] = $this->Browser_info_model->get_db_browser_info();
			return $this->load->view("frontend/partial/CSS_Front",$data,true);
		}
		public function get_menu(){
			$data['browser_info'] = $this->Browser_info_model->get_db_browser_info();
			$data ['menu'] = $this->Menu_model_Front->get_db_menu();
			return $this->load->view("frontend/partial/Menu_Front",$data,true);
		}
		public function get_list_taman(){
			$nama_kelurahan = $_POST['nama_kelurahan'];
			$data['list_taman'] = $this->List_taman_all_model_Front->get_list_taman($nama_kelurahan);
			return $this->load->view("frontend/partial/List_taman_all_Front",$data,true);
		}
		public function get_footer(){
			$data['sosmed'] = $this->Footer_model_Front->get_sosmed();
			return $this->load->view("frontend/partial/Footer_Front",$data,true);
		}
		public function index(){
			$template['css_template'] = $this->get_css_template();
			$template['menu'] = $this->get_menu();
			$template['body'] = $this->get_list_taman();
			$template['footer'] = $this->get_footer();
			$this->load->view("frontend/Template_view_Front",$template);
		}
	}
?>