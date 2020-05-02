<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_akun extends CI_Model {

	public function view_data_akun($limit = null, $offset = null){
		$sql = "SELECT * FROM data_akun
				LEFT JOIN data_role
				ON data_akun.id_role = data_role.id_role";

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

	public function count_accounts(){
		return $this->db->get('data_akun')->num_rows();
	}

	public function view_data_role(){
		return $this->db->get('data_role')->result();
	}

}

/* End of file Model_pengarang.php */
/* Location: ./application/models/Model_pengarang.php */