<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_akun extends CI_Model {

	public function view_data_akun(){
		$sql = "SELECT * FROM data_akun";

		$query = $this->db->query($sql);

		return $query->result();
	}

	public function simpan_data_akun($input){
		$info['nama_akun'] = ucwords(htmlspecialchars($input['nama_akun']));
		$this->db->insert('data_akun', $info);
		if ( $this->db->affected_rows() == 1 ){
			return $this->db->insert_id();
		}else{
			return false;
		}
	}

	public function edit_data_akun($cont_to_model, $id_akun){ //parameter $cont_to_model diambil dr controller data_pengarang/edit_data_pengarang, parameter $id_pengarang di ambil dari url  
			$db_col_name['nama_akun'] 				= ucwords(htmlspecialchars($cont_to_model['nama_akun']));
			$this->db->where('id_akun', $id_akun);
		$this->db->update('data_akun', $db_col_name);
		return $db_col_name;

	}

	public function edit_akun_value($id_akun = null){ //parameter $id_pengarang di ambil dari url ditambahkan = null dibelakangnya krn type data nya integer jika tidak ada data yg diambil dr url maka milai default paramaternya adalah null

		$sql = "SELECT * FROM data_akun
				WHERE id_akun = $id_akun";

		$query = $this->db->query($sql);
		return $query->row();
	}

}

/* End of file Model_pengarang.php */
/* Location: ./application/models/Model_pengarang.php */