<?php

	class Login extends CI_Controller{
		public function __construct()
        {
                parent::__construct();
                $this->load->model('M_admin');
                $this->load->library('session');
                
        }
		public function index()
		{
			$data['judul'] = 'LOGIN';
			$this->load->view('admin/login');
		}
		public function loginAction(){
			$user = $this->input->post('username');
			$pass = $this->input->post('password');
			$q = $this->M_admin->loginAction($user, $pass);
			if ($q) {
				$u = [
					'username' => $user,
					'password' => $pass
				];
				$this->session->set_userdata($u);
				redirect("Dashboard/listberita");
			}else{
				
				redirect("/login");
			}
		}
		public function logout(){
			//$this->session->sess_destroy();
			redirect("/login");
		}
	}