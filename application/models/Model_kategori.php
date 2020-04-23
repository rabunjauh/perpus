<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_kategori extends CI_Model {

	public function view_data_kategori(){
		$sql = "SELECT * FROM kategori_buku ORDER BY kode_kategori ASC";

		$query = $this->db->query($sql);

		return $query->result();
	}

}

/* End of file Model_kategori.php */
/* Location: ./application/models/Model_kategori.php */