<?php 

class Mahasiswa extends CI_Controller {

	// properti / atribut
	public $nim = '1930511041';
	public $nama = 'Resita';

	public function __construct()
	{
		parent::__construct();

		// panggil model yang udah dibuat
		$this->load->model('Mahasiswa_model');
	}

	//localhost/aplikasi_ci/index.php/mahasiswa/index
	public function index()
	{
		$this->load->view('index_mahasiswa');
	}

	// function menampilkan data
	// localhost/aplikasi_ci/index.php/mahasiswa/tampil_data
	public function tampil_data()
	{
		// echo $this->nim;
		// echo $this->nama;

		// kita coba ambil data nim
		// menggunakan method get_nim()
		$nim = $this->Mahasiswa_model->get_nim();
		echo $nim;

	}

	//localhost/aplikasi_ci/index.php/mahasiswa/detail
	public function detail()
	{
		// kita coba ambil data mahasiswa
		// menggunakan method get_mahasiswa()
		$mahasiswa = $this->Mahasiswa_model->get_mahasiswa();

		// echo $mahasiswa['nama'];
		// echo $mahasiswa['nim'];

		// definisikan array untuk dipassing ke view
		$data = [
			'nim_mahasiswa' => $mahasiswa['nim'],
			'nama_mahasiswa' => $mahasiswa['nama'],
			'title' => 'Data Mahasiswa'
		];

		$this->load->view('detail_mahasiswa', $data);
	}
}
