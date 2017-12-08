<?php
	class Event_controller_Back extends CI_Controller{
		public function __construct(){
			parent::__construct();
			session_start();
			if(!isset($_SESSION['loginuser'])){
				redirect('admin/login');
			}
			$this->load->database();
			$this->load->model("shared/Browser_info_model");
			$this->load->model("backend/Menu_model_Back");
			$this->load->model("backend/Pulau_Kota_Area_model_Back");
			$this->load->model('backend/Event_model_Back');
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
		
		/***** Show List of All Event ********/
		public function get_list_of_event(){
			$category = $this->uri->segment(2);
			$id_kota_select_box = "all";
			if($this->input->post('id_kota_select_box')!=""){
				$id_kota_select_box = $this->input->post('id_kota_select_box');
			}
			$month = date('m');
			$year = date('Y');
			if($this->input->post('date_search_box')!=""){
				$date = $this->input->post('date_search_box');
				$arr_date = explode("/",$date);
				$month = $arr_date[0];
				$year = $arr_date[1];
			}
			$jenis_event_select_box = "all";
			if($this->input->post('jenis_event_select_box')!=""){
				$jenis_event_select_box = $this->input->post('jenis_event_select_box');
			}
			
			$data['id_kota_select_box'] = $id_kota_select_box;
			$data['jenis_event_select_box'] = $jenis_event_select_box;
			$data['month'] = $month;
			$data['year'] = $year;
			$data['list_of_kota'] =  $this->Pulau_Kota_Area_model_Back->get_list_of_kota();
			$data['list_of_jenis_event'] =  $this->Event_model_Back->get_list_of_jenis_event();
			$data['name_of_submenu_parent'] = $this->Menu_model_Back->get_name_of_submenu_parent($category);
			$data['all_event_content'] = $this->Event_model_Back->get_all_event_content($id_kota_select_box,$jenis_event_select_box,$month,$year);
			return $this->load->view("backend/partial/Event_show_list_Back",$data,true);
		}
		public function show_list_of_event(){
			$template['css_template'] = $this->get_css_template();
			$template['header'] = $this->get_header();
			$template['menu'] = $this->get_menu();
			$template['body'] = $this->get_list_of_event();
			$template['footer'] = $this->get_footer();
			$this->load->view("backend/Template_view_Back",$template);
		}
		
		/******** Create New / Edit Form Event ************/
		public function get_form_event(){
			$category = $this->uri->segment(2);
			$id = $this->uri->segment(4);
			
			$data['list_of_kota'] = $this->Pulau_Kota_Area_model_Back->get_list_of_kota();
			$data['list_of_area'] = $this->Pulau_Kota_Area_model_Back->get_list_of_area();
			$data['list_of_jenis_event'] = $this->Event_model_Back->get_list_of_jenis_event();
			$data['name_of_submenu_parent'] = $this->Menu_model_Back->get_name_of_submenu_parent($category);
			$data['selected_content_detail'] = $this->Event_model_Back->get_selected_content_detail($id);		
			return $this->load->view("backend/partial/Event_form_Back",$data,true);
		}
		public function show_form_event(){
			$template['css_template'] = $this->get_css_template();
			$template['header'] = $this->get_header();
			$template['menu'] = $this->get_menu();
			$template['body'] = $this->get_form_event();
			$template['footer'] = $this->get_footer();
			$this->load->view("backend/Template_view_Back",$template);
		}
		
		/********* SQL Controller *************/
		public function insert_into_sql_controller() {
			$id_area  = $this->input->post('id_area');
			$id_jenis_event = $this->input->post('id_jenis_event');
			$cover_image = $this->input->post('cover_image');
			$title = $this->input->post('tema');
			$lokasi = $this->input->post('lokasi');
			$keterangan = $this->input->post('keterangan');
			$start_date = $this->change_dMYtoYmd($this->input->post('startTanggal'))." ".$this->input->post('startJam'); 
			$end_date = $this->change_dMYtoYmd($this->input->post('endTanggal'))." ".$this->input->post('endJam'); 
			
			$this->Event_model_Back->insert_into_event($id_area,$id_jenis_event,$cover_image,$title,$lokasi,$keterangan,$start_date,$end_date);
			$_SESSION['is_success_operation_to_sql'] = 'success_insert';
			redirect('admin/event');
		}
		//Fungsi Bantuan utk update_sql_controller
		public function change_dMYtoYmd($date){
			$var = explode("/",$date);
			$dd = $var[0];
			$mm = date('m', strtotime(substr($var[1],0,3)));
			$yy = $var[2];
			return $yy."-".$mm."-".$dd;
		}
		public function update_sql_controller() {
			$id = $this->input->post('id');
			$id_area  = $this->input->post('id_area');
			$id_jenis_event = $this->input->post('id_jenis_event');
			$cover_image = $this->input->post('cover_image');
			$title = $this->input->post('tema');
			$lokasi = $this->input->post('lokasi');
			$keterangan = $this->input->post('keterangan');
			$start_date = $this->change_dMYtoYmd($this->input->post('startTanggal'))." ".$this->input->post('startJam'); 
			$end_date = $this->change_dMYtoYmd($this->input->post('endTanggal'))." ".$this->input->post('endJam'); 
			
			$this->Event_model_Back->update_event($id,$id_area,$id_jenis_event,$cover_image,$title,$lokasi,$keterangan,$start_date,$end_date);
			$_SESSION['is_success_operation_to_sql'] = 'success_update';
			redirect('admin/event/edit/'.$id.'');
		}
		public function delete_sql_controller() {
			$id = $this->uri->segment(4);
			
			$this->Event_model_Back->delete_event($id);
			$_SESSION['is_success_operation_to_sql'] = 'success_delete';
			redirect('admin/event');
		}
	}
?>