<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

	public function login($input){
		$username = strtolower(htmlspecialchars($input['username']));
		$password = sha1($input['password']);

		$sql = "SELECT username, password FROM data_anggota WHERE username = '$username' AND password = '$password' LIMIT 1";

		$query = $this->db->query($sql)->row();

		if ( $query ) {
			$this->session->set_userdata('username', $username);
			return true;
		}
	}
}

/* End of file model_login.php */
/* Location: ./application/models/model_login.php */