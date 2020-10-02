<?php 

class Mahasiswa_model extends CI_Model {

	// atribut
	public $nim = '1930511041';
	public $nama = 'Resita'; 

	// method untuk get nim 
	public function get_nim()
	{
		return $this->nim;
	}

	// method untuk get data mahasiswa
	public function get_mahasiswa()
	{
		$data = [
			'nim' => $this->nim,
			'nama' => $this->nama
		];

		return $data;
	}
}
