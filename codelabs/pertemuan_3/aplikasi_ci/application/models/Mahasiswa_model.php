<?php 

class Mahasiswa_model extends CI_Model {

	// atribut
	public $nim = '1830511108';
	public $nama = 'Adang'; 

	// method 
	public function get_nim()
	{
		return $this->nim;

	}

	public function get_mahasiswa()
	{
		$data = [
			'nim' => $this->nim,
			'nama' => $this->nama
		];

		return $data;

	}
}
