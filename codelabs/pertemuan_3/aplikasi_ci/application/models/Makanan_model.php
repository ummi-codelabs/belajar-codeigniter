<?php

class Makanan_model extends CI_Model {

	public $nama = 'Bubur ayam';
	public $rasa = 'Gurih';
	public $harga = 5000;

	public function get_nama()
	{
		return $this->nama;
	}

	public function get_data()
	{
		$data = [
			'nama' => $this->nama,
			'rasa' => $this->rasa,
			'harga' => $this->harga
		];

		return $data;
	}
}
