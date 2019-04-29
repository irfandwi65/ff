<?php

	class Pemilu_luar_negeri extends CI_Controller{
		public function index()
		{
			$data['judul'] = 'Pemilu Luar Negeri Ricuh';
			$this->load->view('templates/header' , $data);
			$this->load->view('News_page/Pemilu_luar_negeri');
			$this->load->view('templates/footer');
		}
	}