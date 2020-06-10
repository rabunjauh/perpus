<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pengarang extends CI_Model {

	// public function view_data_pengarang(){
	// 	$sql = "SELECT * FROM data_pengarang";

	// 	$query = $this->db->query($sql);

	// 	return $query->result();
	// }

	public function count_authors($limit = null, $offset = null, $select_category = null, $txt_search = null){
		if($txt_search){
				if($select_category === "0"){
					$filter = " data_pengarang.id_pengarang LIKE '%$txt_search%'
								OR data_pengarang.nama_pengarang LIKE '%$txt_search%'
								";
				}else if($select_category == "id_pengarang"){
					$filter = " data_pengarang.id_pengarang = '$txt_search'";
				}else if($select_category == "nama_pengarang"){
					$filter = " data_pengarang.nama_pengarang = '$txt_search'";
				}

				$sql =	"SELECT * FROM data_pengarang WHERE $filter";	

			}else{
				$sql =	"SELECT * FROM data_pengarang";
			}

			$query = $this->db->query($sql);
			return $query->num_rows();
	}

	public function view_data_pengarang($limit = null, $offset = null, $select_category = null, $txt_search = null){		
			if($txt_search){
				if($select_category === "0"){
					$filter = " data_pengarang.id_pengarang LIKE '%$txt_search%'
								OR data_pengarang.nama_pengarang LIKE '%$txt_search%'
								";
				}else if($select_category == "id_pengarang"){
					$filter = " data_pengarang.id_pengarang = '$txt_search'";
				}else if($select_category == "nama_pengarang"){
					$filter = " data_pengarang.nama_pengarang = '$txt_search'";
				}

				$sql =	"SELECT * FROM data_pengarang WHERE $filter
						";	

			}else{
				$sql =	"SELECT * FROM data_pengarang
						";
			}
				
		if($limit){
			if(!$offset){
				$sql .= " LIMIT $limit";
			}else{
				$sql .= " LIMIT $limit OFFSET $offset";
			}
		}
		// echo "view_data_akun->" . $sql;
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