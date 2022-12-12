<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function index()
	{
		$this->masuk();
	}



	public function masuk()
	{
		$this->load->view('frontend/login');
	}
	public function daftar()
	{
		$this->load->view('frontend/daftar');
	}
	public function register()
	{
		$this->load->view('frontend/registrasi');
	}
}
