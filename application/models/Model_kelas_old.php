<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_kelas extends CI_Model {

	public function view_data_kelas(){
		$sql = "SELECT * FROM data_kelas";

		$query = $this->db->query($sql);

		return $query->result();
	}

	public function simpan_data_kelas($input){
		$info['kelas'] = strtoupper(htmlspecialchars($input['kelas']));
		$this->db->insert('data_kelas', $info);
		if ( $this->db->affected_rows() == 1 ){
			return $this->db->insert_id();
		}else{
			return false;
		}
	}

	public function edit_data_kelas($cont_to_model, $id_kelas){ //parameter $cont_to_model diambil dr controller data_kelas/edit_data_kelas, parameter $id_kelas di ambil dari url  
		$db_col_name['kelas'] = strtoupper(htmlspecialchars($cont_to_model['kelas']));
		$this->db->where('id_kelas', $id_kelas);
		$this->db->update('data_kelas', $db_col_name);
		return $db_col_name;

	}

	public function edit_kelas_value($id_kelas = null){ //parameter $id_kelas di ambil dari url ditambahkan = null dibelakangnya krn type data nya integer jika tidak ada data yg diambil dr url maka milai default paramaternya adalah null

	$sql = "SELECT * FROM data_kelas
			WHERE id_kelas = $id_kelas";

	$query = $this->db->query($sql);
	return $query->row();
	}

}

/* End of file Model_kelas.php */
/* Location: ./application/models/Model_kelas.php */