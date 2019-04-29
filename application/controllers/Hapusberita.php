<?php

	class Hapusberita extends CI_Controller{
		public function index()
		{
            $this->load->view('admin/dashboardHeader');
            $this->load->view('admin/hapusberita');
			$this->load->view('admin/dashboardFooter');
		}
	}