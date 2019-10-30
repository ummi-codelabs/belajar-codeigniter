<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	//method index 
	public function index()
	{
		//untuk menampilkan view / tampilan welcome_message.php
		$this->load->view('welcome_message');
	}

	public function method_2()
	{
		// menampilkan view_method_2
		// localhost/aplikasi_ci/index.php/welcome/method_2
		$this->load->view('view_method_2');
	}

	public function method_3()
	{
		echo 'ini method 3';
	}
}
