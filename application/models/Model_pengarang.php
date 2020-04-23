<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pengarang extends CI_Model {

	public function view_data_pengarang(){
		$sql = "SELECT * FROM data_pengarang";

		$query = $this->db->query($sql);

		return $query->result();
	}

	public function simpan_data_pengarang($input){
		$info['nama_pengarang'] = htmlspecialchars($input['nama_pengarang']);
		$this->db->insert('data_pengarang', $info);
		if ( $this->db->affected_rows() == 1 ){
			return $this->db->insert_id();
		}else{
			return false;
		}
	}

	public function edit_data_pengarang($cont_to_model, $id_pengarang){ //parameter $cont_to_model diambil dr controller data_pengarang/edit_data_pengarang, parameter $id_pengarang di ambil dari url  
			$db_col_name['nama_pengarang'] 				= htmlspecialchars($cont_to_model['nama_pengarang']);
			$this->db->where('id_pengarang', $id_pengarang);
		$this->db->update('data_pengarang', $db_col_name);
		return $db_col_name;

	}

	public function edit_pengarang_value($id_pengarang = null){ //parameter $id_pengarang di ambil dari url ditambahkan = null dibelakangnya krn type data nya integer jika tidak ada data yg diambil dr url maka milai default paramaternya adalah null

		$sql = "SELECT * FROM data_pengarang
				WHERE id_pengarang = $id_pengarang";

		$query = $this->db->query($sql);
		return $query->row();
	}

}

/* End of file Model_pengarang.php */
/* Location: ./application/models/Model_pengarang.php */