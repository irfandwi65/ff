<?php  

	class Home extends CI_Controller{
		public function __construct()
        {
                parent::__construct();
                $this->load->model('M_berita');
        }
		public function index()
		{
			$data['judul'] = 'ASUMSI - Portal Berita Online Terbaru & Terpercaya(HOMEPAGE)';
			$data['berita'] = $this->M_berita->getAll();			
			$data['topthree'] = $this->M_berita->getTopThree();
			$this->load->view('templates/header' , $data);
			$this->load->view('home/index');
			$this->load->view('templates/footer');
		}
		public function berita($id)
		{
			$data['berita'] = $this->M_berita->getById($id);
			$data['judul'] = 'ASUMSI';
			$this->load->view('templates/header', $data);
			$this->load->view('page/news');
			$this->load->view('templates/footer');
		}
	}