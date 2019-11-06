<?php 

class Mahasiswa extends CI_Controller {

	// properti / atribut
	public $nim = '183051108';
	public $nama = 'Adang';

	public function __construct()
	{
		parent::__construct();

		$this->load->model('Mahasiswa_model');

		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->helper('form');
		
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

	public function form_tambah()
	{
		$this->form_validation->set_rules('nim', 'NIM', 'required');
		$this->form_validation->set_rules('nama', 'NAMA', 'required');

		if ($this->form_validation->run() === FALSE) {
			//tampilkan form
			$this->load->view('form_add');
		} else {
			
			$nim = $this->input->post('nim', true);
			$nama = $this->input->post('nama', true);

			//echo $nim;

			//proses insert

			//alihkan ke halaman index
			redirect('mahasiswa/index');

		}

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
