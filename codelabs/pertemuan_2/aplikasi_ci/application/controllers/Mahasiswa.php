<?php 

class Mahasiswa extends CI_Controller {

	//localhost/aplikasi_ci/index.php/mahasiswa/index
	public function index()
	{
		$this->load->view('index_mahasiswa');
	}

	// function menampilkan data
	// localhost/aplikasi_ci/index.php/mahasiswa/detail
	public function detail()
	{
		$nim = 'isi nim masing-masing';
		$nama = 'isi nama masing-masing';

		// definisikan array untuk dipassing ke view
		$data = [
			'nim_mahasiswa' => $nim,
			'nama_mahasiswa' => $nama,
			'title' => 'Data Mahasiswa'
		];

		// view(nama_file, data yang dipassing)
		$this->load->view('detail_mahasiswa', $data);
	}
}
