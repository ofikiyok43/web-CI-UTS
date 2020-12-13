<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_mahasiswa');
	}

	public function index()
	{

		$data['isi'] = $this->m_mahasiswa->getAll();
		$this->load->view('tampil', $data);
	}
	public function tambah()
	{
		$this->load->view('tambah');
	}

	public function proses_tambah()
	{
		$nim = $this->input->post('txtnim');
		$nama = $this->input->post('txtnama');
		$prodi = $this->input->post('txtprodi');
		$alamat = $this->input->post('txtalamat');

		$data_input = [
			'nim' => $nim,
			'nama' => $nama,
			'prodi' => $prodi,
			'alamat' => $alamat
		];
		$simpan = $this->m_mahasiswa->add($data_input);	
		redirect('mahasiswa/index');
	}

}

/* End of file mahasiswa.php */
/* Location: ./application/controllers/mahasiswa.php */