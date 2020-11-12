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

		// panggil helper
		$this->load->helper(['url', 'form']);

		// panggil library
		$this->load->library(['session', 'form_validation']);
	}

	//localhost/aplikasi_ci/index.php/mahasiswa/index
	public function index()
	{

		$mahasiswa = $this->Mahasiswa_model->get_all();

		$data = [
			'data_mahasiswa' => $mahasiswa,
			'title' => 'Data Mahasiswa'
		];

		$this->load->view('layout/header', $data); // static
		$this->load->view('layout/navbar', $data); // static
		$this->load->view('index_mahasiswa', $data); // dinamis
		$this->load->view('layout/footer', $data); // static

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
	public function detail($param_nim, $param_nama)
	{
		// $nim = $this->nim;
		// $nama = $this->nama;

		$nim = $param_nim;
		$nama = $param_nama;

		$data = [
				'nim_mahasiswa' => $nim,
				'nama_mahasiswa' => $nama,
				'title' => 'data mahasiswa'
			];

		$this->load->view('layout/header', $data);
		$this->load->view('layout/navbar', $data);

		$this->load->view('detail_mahasiswa', $data);
		$this->load->view('layout/footer', $data);
	}

	public function form_add()
	{
		$this->form_validation->set_rules('nim', 'NIM', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');

		if ($this->form_validation->run() === false) {

			$data = [
				'title' => 'Form tambah data'
			];

			$this->load->view('layout/header', $data);
			$this->load->view('layout/navbar', $data);
			$this->load->view('form_add_mahasiswa');
			$this->load->view('layout/footer', $data);
			
		} else {
			$nim = $this->input->post('nim', true);
			$nama = $this->input->post('nama', true);

			// echo $nim;

			// proses insert

			// notifikasi
			$this->session->set_flashdata('notifikasi', 'Data berhasil disimpan');

			// alihkan ke halaman index
			redirect('mahasiswa');
		}
	}
}
