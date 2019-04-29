<?php
    class Inputberita extends CI_Controller{
        public function index()
        {
            $this->load->view('admin/dashboardHeader');
            $this->load->view('admin/inputberita');
            $this->load->view('admin/dashboardFooter');
        }
    }