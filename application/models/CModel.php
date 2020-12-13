<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CModel extends CI_Model {

	private $table = 'c_tabel';
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

/* End of file CModel.php */
/* Location: ./application/models/CModel.php */