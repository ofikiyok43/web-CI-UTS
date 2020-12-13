<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mahasiswa extends CI_Model {

	private $table = 'mahasiswa';
	public function getAll()
	{
		// SELECT * FROM mahasiswa
		return $this->db->get($this->table)->result();
	}

	public function add($data_input)
	{
		$this->db->insert($this->table, $data_input);
	}

}

/* End of file m_mahasiswa.php */
/* Location: ./application/models/m_mahasiswa.php */