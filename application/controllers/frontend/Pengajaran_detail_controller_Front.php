<?php
	class Pengajaran_detail_controller_Front extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->model("shared/Browser_info_model");
			$this->load->model("frontend/Menu_model_Front");
			$this->load->model("frontend/Pengajaran_detail_model_Front");
			$this->load->model("frontend/Footer_model_Front");
		}
		public function get_css_template(){
			$category = $this->uri->segment(1);
			$id = $this->uri->segment(2);
			
			$data['browser_info'] = $this->Browser_info_model->get_db_browser_info();
			$data['og_fb'] = $this->Browser_info_model->get_og_fb_submenu($category,$id);
			return $this->load->view("frontend/partial/CSS_Front",$data,true);
		}
		public function get_menu(){
			$data['browser_info'] = $this->Browser_info_model->get_db_browser_info();
			$data ['menu'] = $this->Menu_model_Front->get_db_menu();
			return $this->load->view("frontend/partial/Menu_Front",$data,true);
		}
		public function get_body(){
			$id = $this->uri->segment(2);
			$data['pengajaran_detail'] = $this->Pengajaran_detail_model_Front->get_pengajaran_detail($id);
			$data['pengajaran_more_resources'] = $this->Pengajaran_detail_model_Front->get_pengajaran_more_resources($id);
			return $this->load->view("frontend/partial/Pengajaran_detail_Front",$data,true);
		}
		public function get_footer(){
			$data['sosmed'] = $this->Footer_model_Front->get_sosmed();
			return $this->load->view("frontend/partial/Footer_Front",$data,true);
		}
		public function show_pengajaran_detail(){
			$template['css_template'] = $this->get_css_template();
			$template['menu'] = $this->get_menu();
			$template['body'] = $this->get_body();
			$template['footer'] = $this->get_footer();
			$this->load->view("frontend/Template_view_Front",$template);
		}
	}
?>