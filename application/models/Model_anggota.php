<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_anggota extends CI_Model {

	public function tampil_anggota($limit = null, $offset = null, $select_category = null, $txt_search = null){
			if($txt_search){
				if($select_category === "0"){
					$filter = " data_anggota.id_anggota LIKE '%$txt_search%'
								OR data_anggota.nama_anggota LIKE '%$txt_search%'
								OR data_anggota.no_induk LIKE '%$txt_search%'
								OR data_anggota.jenis_kelamin LIKE '%$txt_search%'
								OR data_anggota.kelas LIKE '%$txt_search%'
								OR data_anggota.jurusan LIKE '%$txt_search%'
								";
				}
				else if($select_category == "id_anggota"){
					$filter = " data_anggota.id_anggota = '$txt_search'";
				}else if($select_category == "nama_anggota"){
					$filter = " data_anggota.nama_anggota = '$txt_search'";
				}else if($select_category == "no_induk"){
					$filter = " data_anggota.no_induk = '$txt_search'";
				}else if($select_category == "kelas"){
					$filter = " data_anggota.kelas = '$txt_search'";
				}else if($select_category == "jurusan"){
					$filter = " data_anggota.jurusan = '$txt_search'";
				}

				$sql =	"SELECT * FROM data_anggota 
					 LEFT JOIN data_kelas
						 ON data_anggota.id_kelas = data_kelas.id_kelas
						 LEFT JOIN data_jurusan
						 ON data_anggota.id_jurusan = data_jurusan.id_jurusan WHERE $filter
						 ORDER BY data_anggota.id_anggota DESC 	
					";	

			}else{
				$sql =	"SELECT * FROM data_anggota 
					 LEFT JOIN data_kelas
						 ON data_anggota.id_kelas = data_kelas.id_kelas
						 LEFT JOIN data_jurusan
						 ON data_anggota.id_jurusan = data_jurusan.id_jurusan
						 ORDER BY data_anggota.id_anggota DESC 	
					";
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

	public function count_members($limit = null, $offset = null){
		
			$sql =	"SELECT * FROM data_anggota 
						 LEFT JOIN data_kelas
						 ON data_anggota.id_kelas = data_kelas.id_kelas
						 LEFT JOIN data_jurusan
						 ON data_anggota.id_jurusan = data_jurusan.id_jurusan
						";	
			

		$query = $this->db->query($sql);
		return $query->num_rows();
	}

	public function count_members_search($select_category = null, $txt_search = null){
		if ($txt_search) {
			if ($select_category === "0") {
				$filter = " data_anggota.id_anggota LIKE '%$txt_search%'
							OR data_anggota.nama_anggota LIKE '%$txt_search%'
							OR data_anggota.no_induk LIKE '%$txt_search%'
							OR data_anggota.jenis_kelamin LIKE '%$txt_search%'
							OR data_kelas.kelas LIKE '%$txt_search%'
							OR data_jurusan.jurusan LIKE '%$txt_search%'
							OR data_anggota.no_telepon LIKE '%$txt_search%'
							OR data_anggota.email LIKE '%$txt_search%'
							OR data_anggota.tanggal_daftar LIKE '%$txt_search%'
							OR data_anggota.tanggal_input LIKE '%$txt_search%'
							";
			}else if($select_category === "id_anggota"){
				$filter = " data_anggota.id_anggota = '$txt_search'";
			}else if($select_category === "nama_anggota"){
				$filter = " data_anggota.nama_anggota = '$txt_search'";
			}else if($select_category === "no_induk"){
				$filter = " data_anggota.no_induk = '$txt_search'";
			}else if($select_category === "jenis_kelamin"){
				$filter = " data_anggota.jenis_kelamin = '$txt_search'";
			}else if($select_category === "kelas"){
				$filter = " data_kelas.kelas = '$txt_search'";
			}else if($select_category === "jurusan"){
				$filter = " data_jurusan.jurusan = '$txt_search'";
			}else if($select_category === "no_telepon"){
				$filter = " data_anggota.no_telepon = '$txt_search'";
			}else if($select_category === "email"){
				$filter = " data_anggota.email = '$txt_search'";
			}else if($select_category === "tanggal_daftar"){
				$filter = " data_anggota.tanggal_daftar = '$txt_search'";
			}else if($select_category === "tanggal_input"){
				$filter = " data_anggota.tanggal_input = '$txt_search'";
			}

			$sql =	"SELECT * FROM data_anggota 
					 LEFT JOIN data_kelas
					 ON data_anggota.id_kelas = data_kelas.id_kelas
					 LEFT JOIN data_jurusan
					 ON data_anggota.id_jurusan = data_jurusan.id_jurusan
					 WHERE $filter
					";
		}else{
			$sql =	"SELECT * FROM data_anggota 
					 LEFT JOIN data_kelas
					 ON data_anggota.id_kelas = data_kelas.id_kelas
					 LEFT JOIN data_jurusan
					 ON data_anggota.id_jurusan = data_jurusan.id_jurusan
					";	
		}
		$query = $this->db->query($sql);
		return $query->num_rows();
	}

	public function tampil_anggota_search($limit = null, $offset = null, $select_category = null, $txt_search = null){
			if ($txt_search) {
				if ($select_category === "0") {
					$filter = " data_anggota.id_anggota LIKE '%$txt_search%'
								OR data_anggota.nama_anggota LIKE '%$txt_search%'
								OR data_anggota.no_induk LIKE '%$txt_search%'
								OR data_anggota.jenis_kelamin LIKE '%$txt_search%'
								OR data_kelas.kelas LIKE '%$txt_search%'
								OR data_jurusan.jurusan LIKE '%$txt_search%'
								OR data_anggota.no_telepon LIKE '%$txt_search%'
								OR data_anggota.email LIKE '%$txt_search%'
								OR data_anggota.tanggal_daftar LIKE '%$txt_search%'
								OR data_anggota.tanggal_input LIKE '%$txt_search%'
							  ";
				}else if($select_category === "id_anggota"){
					$filter = " data_anggota.id_anggota = '$txt_search'";
				}else if($select_category === "nama_anggota"){
					$filter = " data_anggota.nama_anggota = '$txt_search'";
				}else if($select_category === "no_induk"){
					$filter = " data_anggota.no_induk = '$txt_search'";
				}else if($select_category === "jenis_kelamin"){
					$filter = " data_anggota.jenis_kelamin = '$txt_search'";
				}else if($select_category === "kelas"){
					$filter = " data_kelas.kelas = '$txt_search'";
				}else if($select_category === "jurusan"){
					$filter = " data_jurusan.jurusan = '$txt_search'";
				}else if($select_category === "no_telepon"){
					$filter = " data_anggota.no_telepon = '$txt_search'";
				}else if($select_category === "email"){
					$filter = " data_anggota.email = '$txt_search'";
				}else if($select_category === "tanggal_daftar"){
					$filter = " data_anggota.tanggal_daftar = '$txt_search'";
				}else if($select_category === "tanggal_input"){
					$filter = " data_anggota.tanggal_input = '$txt_search'";
				}

				$sql =	"SELECT * FROM data_anggota 
						 LEFT JOIN data_kelas
						 ON data_anggota.id_kelas = data_kelas.id_kelas
						 LEFT JOIN data_jurusan
						 ON data_anggota.id_jurusan = data_jurusan.id_jurusan
						 WHERE $filter
						 ORDER BY id_anggota DESC
						";
			}else{
				$sql =	"SELECT * FROM data_anggota 
						 LEFT JOIN data_kelas
						 ON data_anggota.id_kelas = data_kelas.id_kelas
						 LEFT JOIN data_jurusan
						 ON data_anggota.id_jurusan = data_jurusan.id_jurusan
						 ORDER BY id_anggota DESC
						";	
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

	

	public function simpan_data_anggota($input){
		// var_dump($config);die;
		// $nama_file = $config["nama_file"];
		// $ukuran_file = $config["ukuran_file"];
		// $tmp_name = $config["tmp_name"];
		// $ext_photo = explode(".", $config["nama_file"]);
		// $ext_photo = strtolower(end($ext_photo));
		// var_dump($ext_photo);die;
		// if(!in_array($ext_photo, $config["valid_photo"])){
		// 	echo "<script>
		// 			alert('File yang anda upload bukan file gambar!!');
		// 		</script>";
		// }

		// move_uploaded_file($config["tmp_name"], base_url('assets/images'))

		$info['nama_anggota'] 	= ucwords(htmlspecialchars($input['nama_anggota']));
		$info['no_induk'] 		= htmlspecialchars($input['no_induk']);
		$info['jenis_kelamin'] 	= $input['jenis_kelamin'];
		$info['no_telepon'] 	= htmlspecialchars($input['no_telepon']);
		$info['email'] 			= strtolower(htmlspecialchars($input['email']));
		$info['id_kelas'] 			= ucwords(htmlspecialchars($input['kelas']));
		$info['id_jurusan'] 		= htmlspecialchars($input['jurusan']);
		$info['tanggal_daftar'] 		= $input['tanggal_daftar'];
		$info['tanggal_input'] 		= date("y-m-d");
		// $info['photo'] 		= $config["nama_file"];		
		// $info['photo'] 		= $config["nama_file"];		
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

	public function edit_member_values($id_anggota = null){
		$sql = "SELECT * FROM data_anggota
				LEFT JOIN data_kelas
				ON data_anggota.id_kelas = data_kelas.id_kelas
				LEFT JOIN data_jurusan
				ON data_anggota.id_jurusan = data_jurusan.id_jurusan
				WHERE id_anggota = $id_anggota";
			
		return $this->db->query($sql)->row();		
	}

	public function edit_data_anggota($input, $id_anggota){
		$info['nama_anggota'] 	= ucwords(htmlspecialchars($input['nama_anggota']));
		$info['no_induk'] 		= htmlspecialchars($input['no_induk']);
		$info['jenis_kelamin'] 	= $input['jenis_kelamin'];
		$info['no_telepon'] 	= htmlspecialchars($input['no_telepon']);
		$info['email'] 			= strtolower(htmlspecialchars($input['email']));
		$info['id_kelas'] 			= ucwords(htmlspecialchars($input['kelas']));
		$info['id_jurusan'] 		= htmlspecialchars($input['jurusan']);
		$this->db->where('id_anggota', $id_anggota);
		$this->db->update('data_anggota', $info);
		return $info;
	}

	public function delete_anggota($id_anggota){
		$this->db->where('id_anggota', $id_anggota);
		$this->db->delete('data_anggota');
		if($this->db->affected_rows() == 1){
			return true;
		}
	}
}

/* End of file Model_user.php */
/* Location: ./application/models/Model_user.php */