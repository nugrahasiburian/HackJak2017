<?php
	class Pengajaran_all_controller_Front extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->model("shared/Browser_info_model");
			$this->load->model("frontend/Menu_model_Front");
			$this->load->model("frontend/Pengajaran_all_model_Front");
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
		public function get_pengajaran_based_on_month(){
			$month = date('m');
			$year = date('Y');
			if($this->input->post('date_search_box')!=""){
				$date = $this->input->post('date_search_box');
				$arr_date = explode("/",$date);
				$month = $arr_date[0];
				$year = $arr_date[1];
			}
			
			$data['month'] = $month;
			$data['year'] = $year;
			$data['pengajaran_based_on_month'] = $this->Pengajaran_all_model_Front->get_pengajaran_based_on_month($month, $year);
			return $this->load->view("frontend/partial/Pengajaran_all_Front",$data,true);
		}
		public function get_footer(){
			$data['sosmed'] = $this->Footer_model_Front->get_sosmed();
			return $this->load->view("frontend/partial/Footer_Front",$data,true);
		}
		public function index(){
			$template['css_template'] = $this->get_css_template();
			$template['menu'] = $this->get_menu();
			$template['body'] = $this->get_pengajaran_based_on_month();
			$template['footer'] = $this->get_footer();
			$this->load->view("frontend/Template_view_Front",$template);
		}
	}
?>