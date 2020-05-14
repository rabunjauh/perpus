<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_buku extends CI_Model {

	public function view_data_buku($limit = null, $offset = null){
		// var_dump($offset);die;
		$sql = 'SELECT data_buku.id_buku, data_buku.isbn, data_buku.judul_buku, data_pengarang.nama_pengarang, data_penerbit.nama_penerbit, data_buku.tahun_terbit, data_buku.keterangan, data_rak.kode_rak  
				FROM data_buku
				LEFT JOIN data_pengarang ON data_buku.id_pengarang_buku = data_pengarang.id_pengarang
				LEFT JOIN data_penerbit ON data_buku.id_penerbit = data_penerbit.id_penerbit
				LEFT JOIN data_rak ON data_buku.id_rak = data_rak.id_rak
				ORDER BY data_buku.id_buku DESC';
				
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

	public function simpan_data_buku($input){
		$info['isbn'] 					= $input['isbn'];
		$info['judul_buku'] 			= htmlspecialchars($input['judul_buku']);
		$info['id_pengarang_buku'] 		= $input['id_pengarang'];
		$info['id_penerbit'] 			= $input['id_penerbit'];
		$info['tahun_terbit'] 			= htmlspecialchars($input['tahun_terbit']);
		$info['keterangan'] 			= htmlspecialchars($input['keterangan']);
		$info['id_rak'] 				= $input['id_rak'];
		$this->db->insert('data_buku', $info);
		if ($this->db->affected_rows() == 1){
			return $this->db->insert_id();
		}else{
			return FALSE;
		}
	}

	public function edit_data_buku($cont_to_model, $id_buku){ //parameter $cont_to_model diambil dr controller data_buku/edit_data_buku, parameter $id_buku di ambil dari url  
			$db_col_name['isbn'] 				= htmlspecialchars($cont_to_model['isbn']);
			$db_col_name['judul_buku'] 			= htmlspecialchars($cont_to_model['judul_buku']);
			$db_col_name['id_pengarang_buku'] 	= $cont_to_model['id_pengarang'];
			$db_col_name['id_penerbit'] 		= $cont_to_model['id_penerbit'];
			$db_col_name['tahun_terbit']		= htmlspecialchars($cont_to_model['tahun_terbit']);
			$db_col_name['keterangan'] 			= htmlspecialchars($cont_to_model['keterangan']);
			$db_col_name['id_rak'] 				= htmlspecialchars($cont_to_model['id_rak']);

		$this->db->where('id_buku', $id_buku);
		$this->db->update('data_buku', $db_col_name);
		return $db_col_name;

	}

	public function edit_buku_value($id_buku = null){ //parameter $id_buku di ambil dari url ditambahkan = null dibelakangnya krn type data nya integer jika tidak ada data yg diambil dr url maka milai default paramaternya adalah null

		$sql = "SELECT data_buku.id_buku, data_buku.isbn, data_buku.judul_buku, data_buku.id_pengarang_buku, data_pengarang.nama_pengarang, data_buku.id_penerbit, data_penerbit.nama_penerbit, data_buku.tahun_terbit, data_buku.keterangan, data_buku.id_rak, data_rak.kode_rak  
				FROM data_buku
				LEFT JOIN data_pengarang ON data_buku.id_pengarang_buku = data_pengarang.id_pengarang
				LEFT JOIN data_penerbit ON data_buku.id_penerbit = data_penerbit.id_penerbit
				LEFT JOIN data_rak ON data_buku.id_rak = data_rak.id_rak
				WHERE id_buku = $id_buku";

		$query = $this->db->query($sql);
		return $query->row();
	}

	public function delete_buku($id_buku){
		$this->db->where('id_buku', $id_buku);
		$this->db->delete('data_buku');
		if($this->db->affected_rows() == 1){
			return true;
		}
	}

	public function view_stock_buku(){
		$sql = "SELECT stock_buku.stock_buku, stock_buku.id_buku, data_buku.isbn, data_buku.judul_buku, data_buku.id_pengarang_buku, data_buku.id_penerbit, data_pengarang.nama_pengarang, data_penerbit.nama_penerbit, data_buku.tahun_terbit
			 	FROM stock_buku
			 	LEFT JOIN data_buku ON stock_buku.id_buku = data_buku.id_buku
				LEFT JOIN data_pengarang ON data_buku.id_pengarang_buku = data_pengarang.id_pengarang
				LEFT JOIN data_penerbit ON data_buku.id_penerbit = data_penerbit.id_penerbit";

		$query = $this->db->query($sql);

		return $query->result();
	}

	public function simpan_inventory_buku($cont_to_model){
		$info['id_buku'] 				= $cont_to_model['id_buku'];
		$info['quantity_inventory'] 	= $cont_to_model['qty'];
		$info['tgl_inventory'] 			= $cont_to_model['tgl_inventory'];
		$info['keterangan'] 			= htmlspecialchars($cont_to_model['keterangan']);
		$this->db->insert('inventory', $info);
		if ($this->db->affected_rows() == 1) 	
		{		
			return $this->db->insert_id(); 	
		}

	}

	public function cek_tabel_stock_buku($id_buku)
	{
		$sql = "SELECT stock_buku FROM stock_buku WHERE id_buku = '$id_buku'";
		// var_dump($sql);die;
		$query = $this->db->query($sql);
		return $query->row();
		// var_dump($query->row());die;
	}

	public function update_stock_buku($qty, $id_buku)
	{
		if($this->model_buku->cek_tabel_stock_buku($id_buku))
		{
			// mengambil nilai dari query lalu convert ke integer
			$qty_update = intval($this->model_buku->cek_tabel_stock_buku($id_buku)->stock_buku) + intval($qty);			
			$this->db->set('stock_buku', $qty_update);
			$this->db->where('id_buku', $id_buku);
			$this->db->update('stock_buku');
		} 
		else
		{
			$this->db->set('stock_buku', $qty);
			$this->db->set('id_buku', $id_buku);		
			$this->db->insert('stock_buku');

		}
		
	}

	public function view_inventory()
	{
		$sql = "SELECT data_buku.isbn, data_buku.judul_buku, data_pengarang.nama_pengarang, data_penerbit.nama_penerbit, data_buku.tahun_terbit, data_buku.keterangan, inventory.id_inventory, inventory.id_buku, inventory.quantity_inventory, inventory.tgl_inventory, inventory.keterangan, data_buku.isbn
				FROM data_buku
				LEFT JOIN data_pengarang ON data_buku.id_pengarang_buku = data_pengarang.id_pengarang
				LEFT JOIN data_penerbit ON data_buku.id_penerbit = data_penerbit.id_penerbit
				LEFT JOIN inventory ON data_buku.id_buku = inventory.id_buku
				ORDER BY id_inventory DESC";
		$query = $this->db->query($sql);
		return $query->result();
	}	

	public function view_peminjaman()
	{
		$sql = "SELECT peminjaman.id_peminjaman, peminjaman.jumlah_buku, peminjaman.tanggal_peminjaman, peminjaman.keterangan, data_anggota.nama_anggota, data_anggota.no_induk, data_buku.judul_buku, data_anggota.nama_anggota 
		FROM peminjaman 
		LEFT JOIN data_anggota ON peminjaman.id_anggota = data_anggota.id_anggota
		LEFT JOIN data_buku ON peminjaman.id_buku = data_buku.id_buku";
		$query = $this->db->query($sql);
		return $query->result();
		// var_dump($query->result());die;		
	}

	public function peminjaman_baru($cont_to_model)
	{
		$info['id_anggota'] = $cont_to_model['anggota'];
		$info['id_buku'] = $cont_to_model['buku'];
		$info['jumlah_buku'] = $cont_to_model['jumlah_buku'];
		$info['tanggal_peminjaman'] = $cont_to_model['tanggal_peminjaman'];
		$info['keterangan'] = $cont_to_model['keterangan'];
		$this->db->insert('peminjaman', $info);
		if ($this->db->affected_rows() == 1) {
			return $this->db->insert_id();
		}
	}

	public function update_stock_buku_pinjam($id_buku, $jumlah_buku)
	{
		$this->model_buku->cek_tabel_stock_buku($id_buku);
		if ($this->model_buku->cek_tabel_stock_buku($id_buku)) 
		{
			$jumlah_buku_update = intval($this->cek_tabel_stock_buku($id_buku)->stock_buku) - intval($jumlah_buku);
			$this->db->set('stock_buku', $jumlah_buku_update);
			$this->db->where('id_buku', $id_buku);
			$this->db->update('stock_buku');
		}
		else
		{
			return false;
		}
	}

	public function count_book(){
		$query = $this->db->query("SELECT * FROM data_buku");
		$count = $query->num_rows();
		return $count;
	}
}

/* End of file Model_buku.php */
/* Location: ./application/models/Model_buku.php */