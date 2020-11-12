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

	public function get_nama()
	{
		return $this->nama;
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

	public function get_all()
	{
		return [
			[
				'id' => 1,
				'nim' => '1930511041',
				'nama' => 'Resita'
			],
			[
				'id' => 2,
				'nim' => '1930511044',
				'nama' => 'Tika'
			],
			[
				'id' => 3,
				'nim' => '1930511050',
				'nama' => 'Ramdhan'
			],
			[
				'id' => 4,
				'nim' => '1930511051',
				'nama' => 'Nahla'
			],
			[
				'id' => 5,
				'nim' => '1930511052',
				'nama' => 'Reski'
			]
		];
	}
}
