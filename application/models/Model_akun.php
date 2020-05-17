<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_akun extends CI_Model {

	public function view_data_akun($limit = null, $offset = null, $select_category = null, $txt_search = null){		
		if($this->session->userdata('role') === "1"){
			if($txt_search){
				if($select_category === "0"){
					$filter = " data_akun.id_akun LIKE '%$txt_search%'
								OR data_akun.nama_lengkap LIKE '%$txt_search%'
								OR data_akun.no_induk LIKE '%$txt_search%'
								OR data_akun.username LIKE '%$txt_search%'
								OR data_akun.phone LIKE '%$txt_search%'
								OR data_akun.created_date LIKE '%$txt_search%'
								OR data_role.role LIKE '%$txt_search%'
								";
				}
				else if($select_category == "id_akun"){
					$filter = " data_akun.id_akun = '$txt_search'";
				}else if($select_category == "nama_lengkap"){
					$filter = " data_akun.nama_lengkap = '$txt_search'";
				}else if($select_category == "no_induk"){
					$filter = " data_akun.no_induk = '$txt_search'";
				}else if($select_category == "username"){
					$filter = " data_akun.username = '$txt_search'";
				}else if($select_category == "phone"){
					$filter = " data_akun.phone = '$txt_search'";
				}else if($select_category == "created_date"){
					$filter = " data_akun.created_date = '$txt_search'";
				}else if($select_category == "role"){
					$filter = " data_role.role = '$txt_search'";
				}

				$sql =	"SELECT * FROM data_akun
						 LEFT JOIN data_role
						 ON data_akun.id_role = data_role.id_role WHERE $filter
						";	

			}else{
				$sql =	"SELECT * FROM data_akun
						 LEFT JOIN data_role
						 ON data_akun.id_role = data_role.id_role
						";
			}
		}else{
			$username = $this->session->userdata('username');
			$sql = "SELECT * FROM data_akun
					LEFT JOIN data_role
					ON data_akun.id_role = data_role.id_role WHERE username = '$username'";
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

	public function simpan_data_akun($input){
		$info['nama_lengkap'] = ucwords(htmlspecialchars($input['nama_lengkap']));
		$info['no_induk'] = htmlspecialchars($input['no_induk']);
		$info['phone'] = htmlspecialchars($input['phone']);
		$info['username'] = strtolower(htmlspecialchars($input['username']));
		$info['password'] = sha1($input['password']);
		$info['id_role'] = $input['role'];
		$info['created_date'] = date("y-m-d");
		
		

		$this->db->insert('data_akun', $info);
		if ( $this->db->affected_rows() == 1 ){
			return $this->db->insert_id();
		}else{
			return false;
		}
	}

	public function edit_data_akun($input, $id_akun){ //parameter $cont_to_model diambil dr controller data_pengarang/edit_data_pengarang, parameter $id_pengarang di ambil dari url  
		$info['nama_lengkap'] = ucwords(htmlspecialchars($input['nama_lengkap']));
		$info['no_induk'] = htmlspecialchars($input['no_induk']);
		$info['phone'] = htmlspecialchars($input['phone']);
		$info['username'] = strtolower(htmlspecialchars($input['username']));
		$info['password'] = $input['password'];
		$info['id_role'] = $input['role'];
		// var_dump($info);die;
		$this->db->where('id_akun', $id_akun);
		$this->db->update('data_akun', $info);
		return $info;

	}

	public function edit_akun_value($id_akun = null){ //parameter $id_pengarang di ambil dari url ditambahkan = null dibelakangnya krn type data nya integer jika tidak ada data yg diambil dr url maka milai default paramaternya adalah null

		$sql = "SELECT * FROM data_akun
				LEFT JOIN data_role
				ON data_akun.id_role = data_role.id_role
				WHERE id_akun = $id_akun";

		$query = $this->db->query($sql);
		return $query->row();
	}

	public function count_accounts($limit = null, $offset = null, $select_category = null, $txt_search = null){
		if($this->session->userdata('role') === "1"){
			if($txt_search){
				if($select_category === "0"){
					$filter = " data_akun.id_akun LIKE '%$txt_search%'
								OR data_akun.nama_lengkap LIKE '%$txt_search%'
								OR data_akun.no_induk LIKE '%$txt_search%'
								OR data_akun.username LIKE '%$txt_search%'
								OR data_akun.phone LIKE '%$txt_search%'
								OR data_akun.created_date LIKE '%$txt_search%'
								OR data_role.role LIKE '%$txt_search%'
								";
				}
				else if($select_category == "id_akun"){
					$filter = " data_akun.id_akun = '$txt_search'";
				}else if($select_category == "nama_lengkap"){
					$filter = " data_akun.nama_lengkap = '$txt_search'";
				}else if($select_category == "no_induk"){
					$filter = " data_akun.no_induk = '$txt_search'";
				}else if($select_category == "username"){
					$filter = " data_akun.username = '$txt_search'";
				}else if($select_category == "phone"){
					$filter = " data_akun.phone = '$txt_search'";
				}else if($select_category == "created_date"){
					$filter = " data_akun.created_date = '$txt_search'";
				}else if($select_category == "role"){
					$filter = " data_role.role = '$txt_search'";
				}	


				$sql = "SELECT * FROM data_akun
						LEFT JOIN data_role
						ON data_akun.id_role = data_role.id_role WHERE $filter";	

			}else{
				$sql = "SELECT * FROM data_akun
						LEFT JOIN data_role
						ON data_akun.id_role = data_role.id_role";
			}
		}else{
			$username = $this->session->userdata('username');
			$sql = "SELECT * FROM data_akun
					LEFT JOIN data_role
					ON data_akun.id_role = data_role.id_role WHERE username = '$username'";
		}
		
		
		if($limit){
			if(!$offset){
				$sql .= " LIMIT $limit";
			}else{
				$sql .= " LIMIT $limit OFFSET $offset";
			}
		}
		$query = $this->db->query($sql);
		return $query->num_rows();
	}

	public function view_data_role(){
		return $this->db->get('data_role')->result();
	}

	public function reset_password($input, $id_akun){
		$info['password'] = sha1($input['new_password']);
		// var_dump($info);die;
		$this->db->where('id_akun', $id_akun);
		$this->db->update('data_akun', $info);
		return $info;
	}

	public function delete_akun($id_akun){
		$this->db->where('id_akun', $id_akun);
		$this->db->delete('data_akun');
		if($this->db->affected_rows() == 1){
			return true;
		}
	}

	public function change_password($input, $id_akun){
		$info['password'] = $input['new_password'];
		$this->db->where('id_akun', $id_akun);
		$this->db->update('data_akun', $info);
		return $info;
	}

}

/* End of file Model_pengarang.php */
/* Location: ./application/models/Model_pengarang.php */