<?php

defined('BASEPATH') or exit('No direct script allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		// panggil helper
		$this->load->helper('url');
	}

	public function index()
	{
		$data = [
			'title' => 'Dashboard SIAK',
			'content' => 'Selamat datang di dashboard SIAK'
		];

		$this->load->view('layout/header', $data);
		$this->load->view('layout/navbar', $data);
		$this->load->view('dashboard', $data);
		$this->load->view('layout/footer', $data);
	}
} // end of Dashboard class
