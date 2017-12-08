<?php
	class Default_controller extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('../controllers/frontend/Home_controller_Front');
		}
		public function index(){
			$this->Home_controller_Front->index();
		}
	}
?>