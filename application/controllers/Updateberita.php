<?php

	class Updateberita extends CI_Controller{
		public function index()
		{
            $this->load->view('admin/dashboardHeader');
            $this->load->view('admin/updateberita');
			$this->load->view('admin/dashboardFooter');
		}
	}