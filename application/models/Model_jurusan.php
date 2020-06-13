<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_jurusan extends CI_Model {

	// public function view_data_jurusan(){
	// 	$sql = "SELECT * FROM data_jurusan";

	// 	$query = $this->db->query($sql);

	// 	return $query->result();
	// }

	public function count_classes($limit = null, $offset = null, $select_category = null, $txt_search = null){
		if($txt_search){
				if($select_category === "0"){
					$filter = " data_jurusan.id_jurusan LIKE '%$txt_search%'
								OR data_jurusan.jurusan LIKE '%$txt_search%'
								";
				}else if($select_category == "id_jurusan"){
					$filter = " data_jurusan.id_jurusan = '$txt_search'";
				}else if($select_category == "jurusan"){
					$filter = " data_jurusan.jurusan = '$txt_search'";
				}

				$sql =	"SELECT * FROM data_jurusan WHERE $filter";	

			}else{
				$sql =	"SELECT * FROM data_jurusan";
			}

			$query = $this->db->query($sql);
			return $query->num_rows();
	}

	public function view_data_jurusan($limit = null, $offset = null, $select_category = null, $txt_search = null){		
			if($txt_search){
				if($select_category === "0"){
					$filter = " data_jurusan.id_jurusan LIKE '%$txt_search%'
								OR data_jurusan.jurusan LIKE '%$txt_search%'
								";
				}else if($select_category == "id_jurusan"){
					$filter = " data_jurusan.id_jurusan = '$txt_search'";
				}else if($select_category == "jurusan"){
					$filter = " data_jurusan.jurusan = '$txt_search'";
				}

				$sql =	"SELECT * FROM data_jurusan WHERE $filter";	

			}else{
				$sql =	"SELECT * FROM data_jurusan";
			}
				
		if($limit){
			if(!$offset){
				$sql .= " LIMIT $limit";
			}else{
				$sql .= " LIMIT $limit OFFSET $offset";
			}
		}
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
			$db_col_name['jurusan'] 				= ucwords(htmlspecialchars($cont_to_model['jurusan']));
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

	public function delete_jurusan($id_jurusan){
		$this->db->where('id_jurusan', $id_jurusan);
		$this->db->delete('data_jurusan');
		if($this->db->affected_rows() == 1){
			return true;
		}
	}

}

/* End of file Model_jurusan.php */
/* Location: ./application/models/Model_jurusan.php */