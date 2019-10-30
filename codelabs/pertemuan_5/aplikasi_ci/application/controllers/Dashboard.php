<?php 

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->helper('url');
		
	}
	
	public function index()
	{
		//echo "ini controller dashboard";

		$title = 'Ini halaman dashboard';
		$content = 'ini isi halaman dashboard';

		$data = array(
			'title' => $title,
			'content' => $content
		);

		$this->load->view('layout/header', $data);
		$this->load->view('vw_dashboard', $data);
		$this->load->view('layout/footer', $data);
	}
}
