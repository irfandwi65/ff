<?php

	class Listberita extends CI_Controller{
		public function index()
		{
            $this->load->view('admin/dashboardHeader');
            $this->load->view('admin/listberita');
			$this->load->view('admin/dashboardFooter');
		}
	}