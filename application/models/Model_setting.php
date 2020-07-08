<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_setting extends CI_Model {

	public function view_setting(){
		$sql = "SELECT * FROM setting";

		$query = $this->db->query($sql);
		return $query->row();
	}

	public function tambah_setting($input){
		$info['nama_sekolah'] 	= ucwords(htmlspecialchars($input['nama_sekolah']));
		$info['alamat'] 	= ucwords(htmlspecialchars($input['alamat']));
		$info['email'] 	= strtolower(htmlspecialchars($input['email']));
		$info['lama_pinjam'] 	= htmlspecialchars($input['lama_pinjam']);
		$info['jumlah_max'] 	= htmlspecialchars($input['jumlah_max']);
		$info['denda'] 	= htmlspecialchars($input['denda']);
		$info['perpanjangan'] 	= htmlspecialchars($input['perpanjangan']);

		$this->db->insert('setting', $info);
		if ( $this->db->affected_rows() == 1 ) {
			return $this->db->insert_id();
		}else{
			return false;
		}
	}

	public function edit_setting($input, $idsetting){
		$info['nama_sekolah'] 	= ucwords(htmlspecialchars($input['nama_sekolah']));
		$info['alamat'] 	= ucwords(htmlspecialchars($input['alamat']));
		$info['email'] 	= strtolower(htmlspecialchars($input['email']));
		$info['lama_pinjam'] 	= htmlspecialchars($input['lama_pinjam']);
		$info['jumlah_max'] 	= htmlspecialchars($input['jumlah_max']);
		$info['denda'] 	= htmlspecialchars($input['denda']);
		$info['perpanjangan'] 	= htmlspecialchars($input['perpanjangan']);

		$this->db->where('idsetting', $idsetting);
		$this->db->update('setting', $info);
		return $info;
	}

}	

/* End of file Model_setting.php */
/* Location: ./application/models/Model_setting.php */