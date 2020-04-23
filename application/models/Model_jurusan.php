<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_jurusan extends CI_Model {

	public function view_data_jurusan(){
		$sql = "SELECT * FROM data_jurusan";

		$query = $this->db->query($sql);

		return $query->result();
	}

	public function simpan_data_jurusan($input){
		$info['jurusan'] = ucwords(htmlspecialchars($input['jurusan']));
		$this->db->insert('data_jurusan', $info);
		if ( $this->db->affected_rows() == 1 ){
			return $this->db->insert_id();
		}else{
			return false;
		}
	}

	public function edit_data_jurusan($cont_to_model, $id_jurusan){ //parameter $cont_to_model diambil dr controller data_jurusan/edit_data_jurusan, parameter $id_jurusan di ambil dari url  
		$db_col_name['jurusan'] = ucwords(htmlspecialchars($cont_to_model['jurusan']));
		$this->db->where('id_jurusan', $id_jurusan);
		$this->db->update('data_jurusan', $db_col_name);
		return $db_col_name;

	}

	public function edit_jurusan_value($id_jurusan = null){ //parameter $id_jurusan di ambil dari url ditambahkan = null dibelakangnya krn type data nya integer jika tidak ada data yg diambil dr url maka milai default paramaternya adalah null

	$sql = "SELECT * FROM data_jurusan
			WHERE id_jurusan = $id_jurusan";

	$query = $this->db->query($sql);
	return $query->row();
	}

}

/* End of file Model_jurusan.php */
/* Location: ./application/models/Model_jurusan.php */