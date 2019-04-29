<?php

	class Dashboard extends CI_Controller{
		public function __construct()
        {
                parent::__construct();
                $this->load->model('M_admin');
                $this->load->model('M_berita');
                $this->load->library('session');
                $this->load->library('upload');
                
        }
		public function index()
		{
			$this->load->view('admin/dashboardHeader');
			$this->load->view('admin/Dashboard');
			$this->load->view('admin/dashboardFooter');
		}
		public function inputBerita()
		{
			$this->load->view('admin/dashboardHeader');
			$this->load->view('admin/inputberita');
			$this->load->view('admin/dashboardFooter');
		}
		public function listberita()
		{
			$this->load->view('admin/dashboardHeader');
			$data['berita'] = $this->M_berita->getAll();
            $this->load->view('admin/listberita',$data);
            $this->load->view('admin/dashboardFooter');
		}
		public function inputBeritaAction()
		{
			$judul = $this->input->post('judul');
			$kategori = $this->input->post('kategori');
			$penulis = $this->input->post('penulis');
			$isi = $this->input->post('isi');
			$gambar = $judul;
			//upload
			$config['upload_path']          = './image/';
            $config['allowed_types']        = 'jpg';
            $config['file_name'] 			= $judul;
            $config['overwrite'] 			= true;
            // $config['max_size']             = 100;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;
            $this->load->library('upload',$config);     
    		$this->upload->initialize($config);
            if (!$this->upload->do_upload('gambar'))
            {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('admin/dashboardHeader');
                $this->load->view('admin/inputberita', $error);
                $this->load->view('admin/dashboardFooter');
            }
            else
            {
            	$gambars = str_replace(' ', '_', $judul);
            	$this->M_berita->inputBeritaAction($judul,$kategori, $penulis, $isi, $gambars);
                redirect('Dashboard/listberita');
            }
		}
		public function delete($id)
		{
			$g = $this->M_berita->getGambarsById($id);
			foreach ($g as $key) {
				 unlink('./image/'.$key->gambar);
			}
			$this->M_berita->deleteBeritaById($id);
			redirect('Dashboard/listberita');
		}
		public function edit($id)
		{
			$this->load->view('admin/dashboardHeader');
			$data['berita'] = $this->M_berita->getById($id);
			$this->load->view('admin/updateberita', $data);
			$this->load->view('admin/dashboardFooter');
		}
		public function editAction($id)
		{
			$g = $this->M_berita->getGambarsById($id);
			foreach ($g as $key) {
				 unlink('./image/'.$key->gambar);
			}
			$judul = $this->input->post('judul');
			$kategori = $this->input->post('kategori');
			$penulis = $this->input->post('penulis');
			$isi = $this->input->post('isi');
			$gambar = $judul;
			//upload
			$config['upload_path']          = './image/';
            $config['allowed_types']        = 'jpg';
            $config['file_name'] 			= $judul;
            $config['overwrite'] 			= true;
            // $config['max_size']             = 100;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;
            $this->load->library('upload',$config);     
    		$this->upload->initialize($config);
            if (!$this->upload->do_upload('gambar'))
            {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('admin/dashboardHeader');
                $this->load->view('admin/inputberita', $error);
                $this->load->view('admin/dashboardFooter');
            }
            else
            {
            	$gambars = str_replace(' ', '_', $judul);
            	$this->M_berita->editBeritaAction($id, $judul, $kategori, $penulis, $isi, $gambars);
                redirect('Dashboard/listberita');
            }
		}
		
	}