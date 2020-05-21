<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

	public function login($input){
		$username = strtolower(htmlspecialchars($input['username']));
		$password = sha1($input['password']);

		$sql = "SELECT nama_lengkap, no_induk, username, password, id_role FROM data_akun WHERE username = '$username' AND password = '$password' LIMIT 1";

		$query = $this->db->query($sql)->row();
		$role = $query->id_role;
		$nama_lengkap = $query->nama_lengkap;

		if ( $query ) {
			$user_data = [
				'nama_lengkap' => $nama_lengkap,
				'username' => $username,
				'role' => $role,
				];
			$this->session->set_userdata($user_data);
			return true;
		}
	}
}

/* End of file model_login.php */
/* Location: ./application/models/model_login.php */