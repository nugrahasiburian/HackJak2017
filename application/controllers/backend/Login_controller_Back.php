<?php
	class Login_controller_Back extends CI_Controller{
		public function __construct(){
          	parent::__construct();
          	session_start();
          	$this->load->database();
          	$this->load->library('form_validation');
			$this->load->model("shared/Browser_info_model");
          	$this->load->model('backend/Login_model_Back');
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
		public function get_footer(){
			return $this->load->view("backend/partial/Footer_Back",NULL,true);
		}
		public function show_form_login(){
			$template['css_template'] = $this->get_css_template();
			$template['header'] = $this->get_header();
			$template['footer'] = $this->get_footer();
			$this->load->view("backend/partial/Login_Back",$template);
		}
		public function login(){
          	if(isset($_SESSION['user_email']) && isset($_SESSION['loginuser']) && $_SESSION['loginuser']==TRUE){
				redirect('admin/home');
			}else{
				//get the posted values
				$user_email = $this->input->post("txt_user_email");
				$user_password = $this->input->post("txt_user_password");
	
				//set validations
				$this->form_validation->set_rules("txt_user_email", "Username", "trim|required");
				$this->form_validation->set_rules("txt_user_password", "Password", "trim|required");
				
				if ($this->form_validation->run() == FALSE){
					//validation fails
					$this->show_form_login();
				}
				else{
					//validation succeeds
					if ($this->input->post('btn_login') == "Login"){
						//check if user_email and user_password is correct
						$usr_result = $this->Login_model_Back->get_user($user_email, $user_password);
						if ($usr_result[0]['username']!=""){ //active user record is present
							//set the session variables
							$_SESSION['id_user'] = $usr_result[0]['id'];
							$_SESSION['id_kota'] = $usr_result[0]['id_kota'];
							$_SESSION['username'] = $usr_result[0]['username'];
							$_SESSION['id_user_type'] = $usr_result[0]['id_user_type'];
							$_SESSION['loginuser'] = TRUE;
							
							redirect("admin/home");
						}else{
							$_SESSION['msg'] = '<div class="alert alert-danger text-center">Invalid user_email and user_password!</div>';
							redirect('admin');
						}
				   }else{
						redirect('admin/home');
				   }
				}
          	}
     	}
		public function logout(){
			// Unset all of the session variables.
			$_SESSION = array();
			
			// If it's desired to kill the session, also delete the session cookie.
			// Note: This will destroy the session, and not just the session data!
			if (ini_get("session.use_cookies")) {
				$params = session_get_cookie_params();
				setcookie(session_name(), '', time() - 42000,
					$params["path"], $params["domain"],
					$params["secure"], $params["httponly"]
				);
			}
			
			// Finally, destroy the session.
			session_destroy();
			redirect('admin');
		}
	}
?>