<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('CModel');
	}

	public function index()
	{

		$data['isi'] = $this->CModel->getAll();
		$this->load->view('uts/tampil', $data);
	}
	public function tambah()
	{
		$this->load->view('uts/tambah');
	}

	public function proses_tambah()
	{
		$jurusan = $this->input->post('kolom_jurusan');
		$kelas = $this->input->post('kolom_kelas');
		$isi = $this->input->post('kolom_isi');

		$data_input = [
			'kolom_jurusan' => $jurusan,
			'kolom_kelas' => $kelas,
			'kolom_isi' => $isi
		];
		$simpan = $this->CModel->add($data_input);	
		redirect('CController/index');
	}


}

/* End of file CController.php */
/* Location: ./application/controllers/CController.php */