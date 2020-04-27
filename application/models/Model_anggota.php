<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_anggota extends CI_Model {

	public function tampil_anggota($limit, $offset){
		$sql = "SELECT * FROM data_anggota 
				LEFT JOIN data_kelas
				ON data_anggota.id_kelas = data_kelas.id_kelas
				LEFT JOIN data_jurusan
				ON data_anggota.id_jurusan = data_jurusan.id_jurusan
				ORDER BY id_anggota DESC";

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

	public function simpan_data_anggota($input, $config){
		// var_dump($config);die;
		// $nama_file = $config["nama_file"];
		// $ukuran_file = $config["ukuran_file"];
		// $tmp_name = $config["tmp_name"];
		$ext_photo = explode(".", $config["nama_file"]);
		$ext_photo = strtolower(end($ext_photo));
		// var_dump($ext_photo);die;
		if(!in_array($ext_photo, $config["valid_photo"])){
			echo "<script>
					alert('File yang anda upload bukan file gambar!!');
				</script>";
		}

		move_uploaded_file($config["tmp_name"], base_url('assets/images'))
		


		$info['nama_anggota'] 	= ucwords(htmlspecialchars($input['nama_anggota']));
		$info['no_induk'] 		= htmlspecialchars($input['no_induk']);
		$info['no_telepon'] 	= htmlspecialchars($input['no_telepon']);
		$info['kelas'] 			= ucwords(htmlspecialchars($input['kelas']));
		$info['jurusan'] 		= htmlspecialchars($input['jurusan']);
		$info['photo'] 		= $config["nama_file"];		
		// $info['username'] 		= strtolower(htmlspecialchars($input['username']));
		// $info['password'] 		= $input['password'];
		// $confirm_password 		= $input['confirm_password'];
		// $username = $info['username'];

		// //periksa apakah username available atau tidak
		// $sql = "SELECT username FROM data_anggota WHERE username = '$username'";

		// $query = $this->db->query($sql)->num_rows();
		// if ( $query ){
		// 	echo 'username is not available';
		// 	return false;
		// }

		// // periksa apakah password match
		// if ($confirm_password !== $info['password']){
		// 	echo 'password not match';
		// 	return false;
		// }

		// // jika password match enkripsi password
		// $info['password'] = sha1($info['password']);

		$this->db->insert('data_anggota', $info);
		if ( $this->db->affected_rows() == 1 ) {
			return $this->db->insert_id();
		}else{
			return false;
		}

	} 

	public function count_members(){
		$query = $this->db->query("SELECT * FROM data_anggota");
		$count = $query->num_rows();
		return $count;
	}
}

/* End of file Model_user.php */
/* Location: ./application/models/Model_user.php */