<?php

class Makanan extends CI_Controller {

	public $nama = 'Bubur Ayam';
	public $rasa = 'Gurih';
	public $harga = 5000;

	public function __construct()
	{
		parent::__construct();

		$this->load->model('Makanan_model');
		
	}

	public function tampil_data()
	{
		echo $this->nama;
	}

	public function tampil_dari_model()
	{
		echo $this->Makanan_model->get_nama();
	}

	public function detail()
	{
		$makanan = $this->Makanan_model->get_data();

		echo $makanan['harga'];
	}
}
