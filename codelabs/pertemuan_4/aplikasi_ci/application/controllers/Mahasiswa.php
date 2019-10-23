<?php 

class Mahasiswa extends CI_Controller {

	// properti / atribut
	public $nim = '183051108';
	public $nama = 'Adang';

	public function __construct()
	{
		parent::__construct();

		$this->load->model('Mahasiswa_model');
		
	}

	//localhost/aplikasi_ci/index.php/mahasiswa/index
	public function index()
	{
		$nama = $this->nama;
		$nim = $this->nim;

		$data = [
			'nama_mahasiswa' => $nama,
			'nim_mahasiswa' => $nim
		];

		$this->load->view('view_daftar_mahasiswa', $data);
	}

	public function view_mahasiswa()
	{
		$mahasiswa = array(
			'nim' => $this->nim,
			'nama' => $this->nama
		);

		$data = array(
			'data_mahasiswa' => $mahasiswa
		);

		$this->load->view('view_mahasiswa', $data);
	}

	// function menampilkan data
	// localhost/aplikasi_ci/index.php/mahasiswa/tampil_data
	public function tampil_data()
	{
		// echo $this->nim;
		$nim = $this->Mahasiswa_model->get_nim();
		echo $nim;

	}

	public function detail()
	{
		$mahasiswa = $this->Mahasiswa_model->get_mahasiswa();

		echo $mahasiswa['nama'];
	}
}
