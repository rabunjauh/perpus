<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_penerbit extends CI_Model {

	// public function view_data_penerbit(){
	// 	$sql = "SELECT * FROM data_penerbit";

	// 	$query = $this->db->query($sql);

	// 	return $query->result();
	// }

	public function count_publishers($limit = null, $offset = null, $select_category = null, $txt_search = null){
		if($txt_search){
				if($select_category === "0"){
					$filter = " data_penerbit.id_penerbit LIKE '%$txt_search%'
								OR data_penerbit.nama_penerbit LIKE '%$txt_search%'
								";
				}else if($select_category == "id_penerbit"){
					$filter = " data_penerbit.id_penerbit = '$txt_search'";
				}else if($select_category == "nama_penerbit"){
					$filter = " data_penerbit.nama_penerbit = '$txt_search'";
				}

				$sql =	"SELECT * FROM data_penerbit WHERE $filter";	

			}else{
				$sql =	"SELECT * FROM data_penerbit";
			}

			$query = $this->db->query($sql);
			return $query->num_rows();
	}

	public function view_data_penerbit($limit = null, $offset = null, $select_category = null, $txt_search = null){		
			if($txt_search){
				if($select_category === "0"){
					$filter = " data_penerbit.id_penerbit LIKE '%$txt_search%'
								OR data_penerbit.nama_penerbit LIKE '%$txt_search%'
								";
				}else if($select_category == "id_penerbit"){
					$filter = " data_penerbit.id_penerbit = '$txt_search'";
				}else if($select_category == "nama_penerbit"){
					$filter = " data_penerbit.nama_penerbit = '$txt_search'";
				}

				$sql =	"SELECT * FROM data_penerbit WHERE $filter";	

			}else{
				$sql =	"SELECT * FROM data_penerbit";
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

	public function simpan_data_penerbit($input){
		$info['nama_penerbit'] = htmlspecialchars($input['nama_penerbit']);
		$this->db->insert('data_penerbit', $info);
		if ( $this->db->affected_rows() == 1 ){
			return $this->db->insert_id();
		}else{
			return false;
		}
	}



	public function edit_data_penerbit($cont_to_model, $id_penerbit){ //parameter $cont_to_model diambil dr controller data_penerbit/edit_data_penerbit, parameter $id_penerbit di ambil dari url  
			$db_col_name['nama_penerbit'] 				= htmlspecialchars($cont_to_model['nama_penerbit']);
			$this->db->where('id_penerbit', $id_penerbit);
		$this->db->update('data_penerbit', $db_col_name);
		return $db_col_name;

	}

	public function edit_penerbit_value($id_penerbit = null){ //parameter $id_penerbit di ambil dari url ditambahkan = null dibelakangnya krn type data nya integer jika tidak ada data yg diambil dr url maka milai default paramaternya adalah null

		$sql = "SELECT * FROM data_penerbit
				WHERE id_penerbit = $id_penerbit";

		$query = $this->db->query($sql);
		return $query->row();
	}

	public function delete_penerbit($id_penerbit){
		$this->db->where('id_penerbit', $id_penerbit);
		$this->db->delete('data_penerbit');
		if($this->db->affected_rows() == 1){
			return true;
		}
	}

}

/* End of file Model_penerbit.php */
/* Location: ./application/models/Model_penerbit.php */