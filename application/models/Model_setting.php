<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_setting extends CI_Model {

	public function view_setting(){
		$sql = "SELECT * FROM setting";

		$query = $this->db->query($sql);
		return $query->result();
	}

}

/* End of file Model_setting.php */
/* Location: ./application/models/Model_setting.php */