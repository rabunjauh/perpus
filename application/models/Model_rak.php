<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_rak extends CI_Model {

	public function view_data_rak(){
		$sql = "SELECT * FROM data_rak";

		$query = $this->db->query($sql);

		return $query->result();
	}

	public function simpan_data_rak($input){
		$info['kode_rak'] = htmlspecialchars($input['kode_rak']);
		$this->db->insert('data_rak', $info);
		if ( $this->db->affected_rows() == 1 ){
			return $this->db->insert_id();
		}else{
			return false;
		}
	}

	public function edit_data_rak($cont_to_model, $id_rak){ //parameter $cont_to_model diambil dr controller data_rak/edit_data_rak, parameter $id_rak di ambil dari url  
			$db_col_name['kode_rak'] 				= htmlspecialchars($cont_to_model['kode_rak']);
			$this->db->where('id_rak', $id_rak);
		$this->db->update('data_rak', $db_col_name);
		return $db_col_name;

	}

	public function edit_rak_value($id_rak = null){ //parameter $id_rak di ambil dari url ditambahkan = null dibelakangnya krn type data nya integer jika tidak ada data yg diambil dr url maka milai default paramaternya adalah null

		$sql = "SELECT * FROM data_rak
				WHERE id_rak = $id_rak";

		$query = $this->db->query($sql);
		return $query->row();
	}

}

/* End of file Model_rak.php */
/* Location: ./application/models/Model_rak.php */