<?php
	class Alamat_controller_Front extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->model("shared/Browser_info_model");
			$this->load->model("frontend/Menu_model_Front");
			$this->load->model("frontend/Alamat_model_Front");
			$this->load->model("frontend/Footer_model_Front");
		}
		public function get_css_template(){
			$data['browser_info'] = $this->Browser_info_model->get_db_browser_info();
			return $this->load->view("frontend/partial/CSS_Front",$data,true);
		}
		public function get_menu(){
			$data['browser_info'] = $this->Browser_info_model->get_db_browser_info();
			$data ['menu'] = $this->Menu_model_Front->get_db_menu();
			return $this->load->view("frontend/partial/Menu_Front",$data,true);
		}
		public function get_alamat(){
			$data['pulau_indonesia'] = $this->Alamat_model_Front->get_pulau_indonesia();
			$data['kota_kota'] = $this->Alamat_model_Front->get_kota_kota();
			$data['alamat_sekre'] = $this->Alamat_model_Front->get_alamat_sekre();
			
			return $this->load->view("frontend/partial/Alamat_Front",$data,true);
		}
		public function get_footer(){
			$data['sosmed'] = $this->Footer_model_Front->get_sosmed();
			return $this->load->view("frontend/partial/Footer_Front",$data,true);
		}
		public function index(){
			$template['css_template'] = $this->get_css_template();
			$template['menu'] = $this->get_menu();
			$template['body'] = $this->get_alamat();
			$template['footer'] = $this->get_footer();
			$this->load->view("frontend/Template_view_Front",$template);
		}
	}
?>