<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_kelas extends CI_Model {

	// public function view_data_kelas(){
	// 	$sql = "SELECT * FROM data_kelas";

	// 	$query = $this->db->query($sql);

	// 	return $query->result();
	// }

	public function count_classes($limit = null, $offset = null, $select_category = null, $txt_search = null){
		if($txt_search){
				if($select_category === "0"){
					$filter = " data_kelas.id_kelas LIKE '%$txt_search%'
								OR data_kelas.kelas LIKE '%$txt_search%'
								";
				}else if($select_category == "id_kelas"){
					$filter = " data_kelas.id_kelas = '$txt_search'";
				}else if($select_category == "kelas"){
					$filter = " data_kelas.kelas = '$txt_search'";
				}

				$sql =	"SELECT * FROM data_kelas WHERE $filter";	

			}else{
				$sql =	"SELECT * FROM data_kelas";
			}

			$query = $this->db->query($sql);
			return $query->num_rows();
	}

	public function view_data_kelas($limit = null, $offset = null, $select_category = null, $txt_search = null){		
			if($txt_search){
				if($select_category === "0"){
					$filter = " data_kelas.id_kelas LIKE '%$txt_search%'
								OR data_kelas.kelas LIKE '%$txt_search%'
								";
				}else if($select_category == "id_kelas"){
					$filter = " data_kelas.id_kelas = '$txt_search'";
				}else if($select_category == "kelas"){
					$filter = " data_kelas.kelas = '$txt_search'";
				}

				$sql =	"SELECT * FROM data_kelas WHERE $filter";	

			}else{
				$sql =	"SELECT * FROM data_kelas";
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
			$db_col_name['kelas'] 				= strtoupper(htmlspecialchars($cont_to_model['kelas']));
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

	public function delete_kelas($id_kelas){
		$this->db->where('id_kelas', $id_kelas);
		$this->db->delete('data_kelas');
		if($this->db->affected_rows() == 1){
			return true;
		}
	}

}

/* End of file Model_kelas.php */
/* Location: ./application/models/Model_kelas.php */