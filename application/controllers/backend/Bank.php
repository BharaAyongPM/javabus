<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bank extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('tglindo_helper');
		$this->load->model('getkod_model');
		$this->getsecurity();
		date_default_timezone_set("Asia/Jakarta");
	}
	function getsecurity($value = '')
	{
		$username = $this->session->userdata('username_admin');
		if (empty($username)) {
			$this->session->sess_destroy();
			redirect('backend/login');
		}
	}
	public function index()
	{
		$data['title'] = "Link BANK";
		$data['bank'] = $this->db->query("SELECT * FROM tbl_bank ")->result_array();
		// die(print_r($data));
		$this->load->view('backend/bank', $data);
	}
	public function viewbank($id = "")
	{
		$data['title'] = "Link BANK";
		$data['bank'] = $this->db->query("SELECT * FROM tbl_bank WHERE kd_bank = '" . $id . "'")->row_array();
		// die(print_r($data));
		$this->load->view('backend/view_bank', $data);
	}
	public function tambahbank()
	{
		$kode = $this->getkod_model->get_kodbank();
		$data = array(
			'kd_bank' => $kode,
			'nasabah_bank' => $this->input->post('nasabah_bank'),
			'nama_bank'		 => $this->input->post('nama_bank'),
			'nomrek_bank'		 => $this->input->post('nomrek_bank'),
		);
		// die(print_r($data));
		$this->db->insert('tbl_bank', $data);
		$this->session->set_flashdata('message', 'swal("Berhasil", "Data Bus Di Simpan", "success");');
		redirect('backend/bank');
	}
}

/* End of file Bank.php */
/* Location: ./application/controllers/backend/Bank.php */
