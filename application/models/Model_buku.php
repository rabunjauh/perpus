<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_buku extends CI_Model {

	// Data Buku
	public function count_book($limit = null, $offset = null, $select_category = null, $txt_search = null){
		if ($txt_search) {
			if ($select_category === "0") {
				$filter = " data_buku.id_buku LIKE '%$txt_search%'
							OR data_buku.isbn LIKE '%$txt_search%'
							OR data_buku.kode_buku LIKE '%$txt_search%'
							OR data_buku.judul_buku LIKE '%$txt_search%'
							OR data_pengarang.nama_pengarang LIKE '%$txt_search%'
							OR data_penerbit.nama_penerbit LIKE '%$txt_search%'
							OR data_buku.tahun_terbit LIKE '%$txt_search%'
							OR data_rak.kode_rak LIKE '%$txt_search%'
						  ";
			}else if($select_category === "id_buku"){
				$filter = " data_buku.id_buku = '$txt_search'";
			}else if($select_category === "isbn"){
				$filter = " data_buku.isbn = '$txt_search'";
			}else if($select_category === "kode_buku"){
				$filter = " data_buku.kode_buku = '$txt_search'";
			}else if($select_category === "judul_buku"){
				$filter = " data_buku.judul_buku = '$txt_search'";
			}else if($select_category === "nama_pengarang"){
				$filter = " data_pengarang.nama_pengarang = '$txt_search'";
			}else if($select_category === "nama_penerbit"){
				$filter = " data_penerbit.nama_penerbit = '$txt_search'";
			}else if($select_category === "tahun_terbit"){
				$filter = " data_buku.tahun_terbit = '$txt_search'";
			}else if($select_category === "kode_rak"){
				$filter = " data_buku.kode_rak = '$txt_search'";
			}

			$sql = "SELECT data_buku.id_buku, data_buku.isbn, data_buku.kode_buku, data_buku.judul_buku, data_pengarang.nama_pengarang, data_penerbit.nama_penerbit, data_buku.tahun_terbit, data_buku.keterangan, data_rak.kode_rak  
				FROM data_buku
				LEFT JOIN data_pengarang ON data_buku.id_pengarang_buku = data_pengarang.id_pengarang
				LEFT JOIN data_penerbit ON data_buku.id_penerbit = data_penerbit.id_penerbit
				LEFT JOIN data_rak ON data_buku.id_rak = data_rak.id_rak
				WHERE $filter
				ORDER BY data_buku.id_buku DESC";
		}else{
			$sql = 'SELECT data_buku.id_buku, data_buku.isbn, data_buku.kode_buku, data_buku.judul_buku, data_pengarang.nama_pengarang, data_penerbit.nama_penerbit, data_buku.tahun_terbit, data_buku.keterangan, data_rak.kode_rak  
				FROM data_buku
				LEFT JOIN data_pengarang ON data_buku.id_pengarang_buku = data_pengarang.id_pengarang
				LEFT JOIN data_penerbit ON data_buku.id_penerbit = data_penerbit.id_penerbit
				LEFT JOIN data_rak ON data_buku.id_rak = data_rak.id_rak
				ORDER BY data_buku.id_buku DESC';
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

	public function view_data_buku($limit = null, $offset = null, $select_category = null, $txt_search = null){
		if ($txt_search) {
			if ($select_category === "0") {
				$filter = " data_buku.id_buku LIKE '%$txt_search%'
							OR data_buku.isbn LIKE '%$txt_search%'
							OR data_buku.kode_buku LIKE '%$txt_search%'
							OR data_buku.judul_buku LIKE '%$txt_search%'
							OR data_pengarang.nama_pengarang LIKE '%$txt_search%'
							OR data_penerbit.nama_penerbit LIKE '%$txt_search%'
							OR data_buku.tahun_terbit LIKE '%$txt_search%'
							OR data_rak.kode_rak LIKE '%$txt_search%'
						  ";
			}else if($select_category === "id_buku"){
				$filter = " data_buku.id_buku = '$txt_search'";
			}else if($select_category === "isbn"){
				$filter = " data_buku.isbn = '$txt_search'";
			}else if($select_category === "kode_buku"){
				$filter = " data_buku.kode_buku = '$txt_search'";
			}else if($select_category === "judul_buku"){
				$filter = " data_buku.judul_buku = '$txt_search'";
			}else if($select_category === "nama_pengarang"){
				$filter = " data_pengarang.nama_pengarang = '$txt_search'";
			}else if($select_category === "nama_penerbit"){
				$filter = " data_penerbit.nama_penerbit = '$txt_search'";
			}else if($select_category === "tahun_terbit"){
				$filter = " data_buku.tahun_terbit = '$txt_search'";
			}else if($select_category === "kode_rak"){
				$filter = " data_buku.kode_rak = '$txt_search'";
			}

			$sql = "SELECT data_buku.id_buku, data_buku.isbn, data_buku.kode_buku, data_buku.judul_buku, data_pengarang.nama_pengarang, data_penerbit.nama_penerbit, data_buku.tahun_terbit, data_buku.keterangan, data_rak.kode_rak, stock_buku.stock_buku  
				FROM data_buku
				LEFT JOIN data_pengarang ON data_buku.id_pengarang_buku = data_pengarang.id_pengarang
				LEFT JOIN data_penerbit ON data_buku.id_penerbit = data_penerbit.id_penerbit
				LEFT JOIN data_rak ON data_buku.id_rak = data_rak.id_rak
				LEFT JOIN stock_buku ON data_buku.id_buku = stock_buku.id_buku
				WHERE $filter
				ORDER BY data_buku.id_buku DESC";
		}else{
			$sql = 'SELECT data_buku.id_buku, data_buku.isbn, data_buku.kode_buku, data_buku.judul_buku, data_pengarang.nama_pengarang, data_penerbit.nama_penerbit, data_buku.tahun_terbit, data_buku.keterangan, data_rak.kode_rak, stock_buku.stock_buku  
				FROM data_buku
				LEFT JOIN data_pengarang ON data_buku.id_pengarang_buku = data_pengarang.id_pengarang
				LEFT JOIN data_penerbit ON data_buku.id_penerbit = data_penerbit.id_penerbit
				LEFT JOIN data_rak ON data_buku.id_rak = data_rak.id_rak
				LEFT JOIN stock_buku ON data_buku.id_buku = stock_buku.id_buku
				ORDER BY data_buku.id_buku DESC';
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

	public function simpan_data_buku($input){
		$info['isbn'] 					= $input['isbn'];
		$info['kode_buku'] 					= htmlspecialchars(strtoupper($input['kode_buku']));
		$info['judul_buku'] 			= htmlspecialchars(ucwords($input['judul_buku']));
		$info['id_pengarang_buku'] 		= $input['id_pengarang'];
		$info['id_penerbit'] 			= $input['id_penerbit'];
		$info['tahun_terbit'] 			= htmlspecialchars($input['tahun_terbit']);
		$info['keterangan'] 			= htmlspecialchars(ltrim($input['keterangan']));
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
			$db_col_name['kode_buku'] 					= htmlspecialchars(strtoupper($cont_to_model['kode_buku']));
			$db_col_name['judul_buku'] 			= htmlspecialchars(ucwords($cont_to_model['judul_buku']));
			$db_col_name['id_pengarang_buku'] 	= $cont_to_model['id_pengarang'];
			$db_col_name['id_penerbit'] 		= $cont_to_model['id_penerbit'];
			$db_col_name['tahun_terbit']		= htmlspecialchars($cont_to_model['tahun_terbit']);
			$db_col_name['keterangan'] 			= htmlspecialchars(ltrim($cont_to_model['keterangan']));
			$db_col_name['id_rak'] 				= htmlspecialchars($cont_to_model['id_rak']);

		$this->db->where('id_buku', $id_buku);
		$this->db->update('data_buku', $db_col_name);
		return $db_col_name;

	}

	public function edit_buku_value($id_buku = null){ //parameter $id_buku di ambil dari url ditambahkan = null dibelakangnya krn type data nya integer jika tidak ada data yg diambil dr url maka milai default paramaternya adalah null

		$sql = "SELECT data_buku.id_buku, data_buku.isbn, data_buku.kode_buku, data_buku.judul_buku, data_buku.id_pengarang_buku, data_pengarang.nama_pengarang, data_buku.id_penerbit, data_penerbit.nama_penerbit, data_buku.tahun_terbit, data_buku.keterangan, data_buku.id_rak, data_rak.kode_rak  
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

	// Stock
	public function count_stocks($limit = null, $offset = null, $select_category = null, $txt_search = null){
		if ($txt_search) {
			if ($select_category === "0") {
				$filter = " stock_buku.id_stock_buku LIKE '%$txt_search%'
							OR stock_buku.stock_buku LIKE '%$txt_search%'
							OR data_buku.id_buku LIKE '%$txt_search%'
							OR data_buku.isbn LIKE '%$txt_search%'
							OR data_buku.kode_buku LIKE '%$txt_search%'
							OR data_buku.judul_buku LIKE '%$txt_search%'
							OR data_pengarang.nama_pengarang LIKE '%$txt_search%'
							OR data_penerbit.nama_penerbit LIKE '%$txt_search%'
							OR data_buku.tahun_terbit LIKE '%$txt_search%'
							OR data_rak.kode_rak LIKE '%$txt_search%'
						  ";
			}else if($select_category === "id_buku"){
				$filter = " data_buku.id_buku = '$txt_search'";
			}else if($select_category === "isbn"){
				$filter = " data_buku.isbn = '$txt_search'";
			}else if($select_category === "kode_buku"){
				$filter = " data_buku.kode_buku = '$txt_search'";
			}else if($select_category === "judul_buku"){
				$filter = " data_buku.judul_buku = '$txt_search'";
			}else if($select_category === "nama_pengarang"){
				$filter = " data_pengarang.nama_pengarang = '$txt_search'";
			}else if($select_category === "nama_penerbit"){
				$filter = " data_penerbit.nama_penerbit = '$txt_search'";
			}else if($select_category === "tahun_terbit"){
				$filter = " data_buku.tahun_terbit = '$txt_search'";
			}else if($select_category === "kode_rak"){
				$filter = " data_buku.kode_rak = '$txt_search'";
			}

			$sql = "SELECT stock_buku.id_stock_buku, stock_buku.stock_buku, data_buku.isbn, data_buku.kode_buku, data_buku.judul_buku, data_pengarang.nama_pengarang, data_penerbit.nama_penerbit, data_buku.tahun_terbit, data_buku.keterangan, data_rak.kode_rak   
				FROM stock_buku
				LEFT JOIN data_buku ON stock_buku.id_buku = data_buku.id_buku
				LEFT JOIN data_pengarang ON data_buku.id_pengarang_buku = data_pengarang.id_pengarang
				LEFT JOIN data_penerbit ON data_buku.id_penerbit = data_penerbit.id_penerbit
				LEFT JOIN data_rak ON data_buku.id_rak = data_rak.id_rak
				WHERE $filter
				ORDER BY data_buku.id_buku DESC";
		}else{
			$sql = 'SELECT stock_buku.id_stock_buku, data_buku.isbn, data_buku.kode_buku, data_buku.judul_buku, data_pengarang.nama_pengarang, data_penerbit.nama_penerbit, data_buku.tahun_terbit, data_buku.keterangan, data_rak.kode_rak   
				FROM stock_buku
				LEFT JOIN data_buku ON stock_buku.id_buku = data_buku.id_buku
				LEFT JOIN data_pengarang ON data_buku.id_pengarang_buku = data_pengarang.id_pengarang
				LEFT JOIN data_penerbit ON data_buku.id_penerbit = data_penerbit.id_penerbit
				LEFT JOIN data_rak ON data_buku.id_rak = data_rak.id_rak';
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

	public function view_stock_buku($limit = null, $offset = null, $select_category = null, $txt_search = null){

		if ($txt_search) {
			if ($select_category === "0") {
				$filter = " stock_buku.id_stock_buku LIKE '%$txt_search%'
							OR stock_buku.stock_buku LIKE '%$txt_search%'
							OR data_buku.id_buku LIKE '%$txt_search%'
							OR data_buku.isbn LIKE '%$txt_search%'
							OR data_buku.kode_buku LIKE '%$txt_search%'
							OR data_buku.judul_buku LIKE '%$txt_search%'
							OR data_pengarang.nama_pengarang LIKE '%$txt_search%'
							OR data_penerbit.nama_penerbit LIKE '%$txt_search%'
							OR data_buku.tahun_terbit LIKE '%$txt_search%'
							OR data_rak.kode_rak LIKE '%$txt_search%'
						  ";
			}else if($select_category === "id_buku"){
				$filter = " data_buku.id_buku = '$txt_search'";
			}else if($select_category === "isbn"){
				$filter = " data_buku.isbn = '$txt_search'";
			}else if($select_category === "kode_buku"){
				$filter = " data_buku.kode_buku = '$txt_search'";
			}else if($select_category === "judul_buku"){
				$filter = " data_buku.judul_buku = '$txt_search'";
			}else if($select_category === "nama_pengarang"){
				$filter = " data_pengarang.nama_pengarang = '$txt_search'";
			}else if($select_category === "nama_penerbit"){
				$filter = " data_penerbit.nama_penerbit = '$txt_search'";
			}else if($select_category === "tahun_terbit"){
				$filter = " data_buku.tahun_terbit = '$txt_search'";
			}else if($select_category === "kode_rak"){
				$filter = " data_buku.kode_rak = '$txt_search'";
			}

			$sql = "SELECT stock_buku.id_stock_buku, stock_buku.stock_buku, data_buku.isbn, data_buku.kode_buku, data_buku.judul_buku, data_pengarang.nama_pengarang, data_penerbit.nama_penerbit, data_buku.tahun_terbit, data_buku.keterangan, data_rak.kode_rak   
				FROM stock_buku
				LEFT JOIN data_buku ON stock_buku.id_buku = data_buku.id_buku
				LEFT JOIN data_pengarang ON data_buku.id_pengarang_buku = data_pengarang.id_pengarang
				LEFT JOIN data_penerbit ON data_buku.id_penerbit = data_penerbit.id_penerbit
				LEFT JOIN data_rak ON data_buku.id_rak = data_rak.id_rak
				WHERE $filter
				ORDER BY data_buku.id_buku DESC";
		}else{
			$sql = "SELECT stock_buku.id_stock_buku, stock_buku.stock_buku, data_buku.isbn, data_buku.kode_buku, data_buku.judul_buku, data_pengarang.nama_pengarang, data_penerbit.nama_penerbit, data_buku.tahun_terbit, data_buku.keterangan, data_rak.kode_rak   
				FROM stock_buku
				LEFT JOIN data_buku ON stock_buku.id_buku = data_buku.id_buku
				LEFT JOIN data_pengarang ON data_buku.id_pengarang_buku = data_pengarang.id_pengarang
				LEFT JOIN data_penerbit ON data_buku.id_penerbit = data_penerbit.id_penerbit
				LEFT JOIN data_rak ON data_buku.id_rak = data_rak.id_rak
				ORDER BY data_buku.id_buku DESC";;
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

		// $sql = "SELECT stock_buku.stock_buku, stock_buku.id_buku, data_buku.isbn, data_buku.kode_buku, data_buku.judul_buku, data_buku.id_pengarang_buku, data_buku.id_penerbit, data_pengarang.nama_pengarang, data_penerbit.nama_penerbit, data_buku.tahun_terbit
		// 	 	FROM stock_buku
		// 	 	LEFT JOIN data_buku ON stock_buku.id_buku = data_buku.id_buku
		// 		LEFT JOIN data_pengarang ON data_buku.id_pengarang_buku = data_pengarang.id_pengarang
		// 		LEFT JOIN data_penerbit ON data_buku.id_penerbit = data_penerbit.id_penerbit";

		// $query = $this->db->query($sql);

		// return $query->result();
	}

	public function update_stock_buku_pinjam($id_buku, $jumlah_buku){
		$this->model_buku->cek_tabel_stock_buku($id_buku);
		if ($this->model_buku->cek_tabel_stock_buku($id_buku)){
			$jumlah_buku_update = intval($this->cek_tabel_stock_buku($id_buku)->stock_buku) - intval($jumlah_buku);
			$this->db->set('stock_buku', $jumlah_buku_update);
			$this->db->where('id_buku', $id_buku);
			$this->db->update('stock_buku');
		}else{
			return false;
		}
	}

	public function cek_tabel_stock_buku($id_buku)
	{
		$sql = "SELECT stock_buku FROM stock_buku WHERE id_buku = '$id_buku'";
		$query = $this->db->query($sql);
		return $query->row();
	}

	public function update_stock_buku($id_buku, $qty){
		if($this->model_buku->cek_tabel_stock_buku($id_buku)){
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

	public function edit_stock_buku($id_buku, $qty){
		// if($this->model_buku->cek_tabel_stock_buku($id_buku)){
			// if($id_inventory){
				// mengambil nilai dari query lalu convert ke integer
				$qty_update = intval($this->model_buku->cek_tabel_stock_buku($id_buku)->stock_buku - ($qty));
		// }else{
			// 	// mengambil nilai dari query lalu convert ke integer
			// 	$qty_update = (intval($this->model_buku->cek_tabel_stock_buku($id_buku)->stock_buku) - intval($prev_qty)) + intval($qty);
			// }			
			$this->db->set('stock_buku', $qty_update);
			$this->db->where('id_buku', $id_buku);
			$this->db->update('stock_buku');
		// } 
		// else
		// {
		// 	$this->db->set('stock_buku', $qty);
		// 	$this->db->set('id_buku', $id_buku);		
		// 	$this->db->insert('stock_buku');

		// }
		
	}

	public function updateLoanBookStock($id_buku, $qty){
		// if($this->model_buku->cek_tabel_stock_buku($id_buku)){
			// if($id_inventory){
				// mengambil nilai dari query lalu convert ke integer
				$qty_update = intval($this->model_buku->cek_tabel_stock_buku($id_buku)->stock_buku + ($qty));
		// }else{
			// 	// mengambil nilai dari query lalu convert ke integer
			// 	$qty_update = (intval($this->model_buku->cek_tabel_stock_buku($id_buku)->stock_buku) - intval($prev_qty)) + intval($qty);
			// }			
			$this->db->set('stock_buku', $qty_update);
			$this->db->where('id_buku', $id_buku);
			$this->db->update('stock_buku');
		// } 
		// else
		// {
		// 	$this->db->set('stock_buku', $qty);
		// 	$this->db->set('id_buku', $id_buku);		
		// 	$this->db->insert('stock_buku');

		// }
		
	}

	//  Inventory
	public function count_inventory($limit = null, $offset = null, $select_category = null, $txt_search = null){
		if ($txt_search) {
			if ($select_category === "0") {
				$filter = " data_buku.id_buku LIKE '%$txt_search%'
							OR data_buku.isbn LIKE '%$txt_search%'
							OR data_buku.kode_buku LIKE '%$txt_search%'
							OR data_buku.judul_buku LIKE '%$txt_search%'
							OR data_pengarang.nama_pengarang LIKE '%$txt_search%'
							OR data_penerbit.nama_penerbit LIKE '%$txt_search%'
							OR data_buku.tahun_terbit LIKE '%$txt_search%'
							OR data_rak.kode_rak LIKE '%$txt_search%'
						  ";
			}else if($select_category === "id_buku"){
				$filter = " data_buku.id_buku = '$txt_search'";
			}else if($select_category === "isbn"){
				$filter = " data_buku.isbn = '$txt_search'";
			}else if($select_category === "kode_buku"){
				$filter = " data_buku.kode_buku = '$txt_search'";
			}else if($select_category === "judul_buku"){
				$filter = " data_buku.judul_buku = '$txt_search'";
			}else if($select_category === "nama_pengarang"){
				$filter = " data_pengarang.nama_pengarang = '$txt_search'";
			}else if($select_category === "nama_penerbit"){
				$filter = " data_penerbit.nama_penerbit = '$txt_search'";
			}else if($select_category === "tahun_terbit"){
				$filter = " data_buku.tahun_terbit = '$txt_search'";
			}else if($select_category === "kode_rak"){
				$filter = " data_buku.kode_rak = '$txt_search'";
			}

			$sql = "SELECT * FROM inventory WHERE $filter ORDER BY inventory.id_inventory DESC";
		}else{
			$sql = "SELECT * FROM inventory ORDER BY inventory.id_inventory DESC";
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

	public function view_inventory($limit = null, $offset = null, $select_category = null, $txt_search = null, $id_buku = null){
		if ($txt_search) {
			if ($select_category === "0") {
				$filter = " stock_buku.id_stock_buku LIKE '%$txt_search%'
							OR stock_buku.stock_buku LIKE '%$txt_search%'
							OR data_buku.id_buku LIKE '%$txt_search%'
							OR data_buku.isbn LIKE '%$txt_search%'
							OR data_buku.kode_buku LIKE '%$txt_search%'
							OR data_buku.judul_buku LIKE '%$txt_search%'
							OR data_pengarang.nama_pengarang LIKE '%$txt_search%'
							OR data_penerbit.nama_penerbit LIKE '%$txt_search%'
							OR data_buku.tahun_terbit LIKE '%$txt_search%'
							OR data_rak.kode_rak LIKE '%$txt_search%'
						  ";
			}else if($select_category === "id_buku"){
				$filter = " data_buku.id_buku = '$txt_search'";
			}else if($select_category === "isbn"){
				$filter = " data_buku.isbn = '$txt_search'";
			}else if($select_category === "kode_buku"){
				$filter = " data_buku.kode_buku = '$txt_search'";
			}else if($select_category === "judul_buku"){
				$filter = " data_buku.judul_buku = '$txt_search'";
			}else if($select_category === "nama_pengarang"){
				$filter = " data_pengarang.nama_pengarang = '$txt_search'";
			}else if($select_category === "nama_penerbit"){
				$filter = " data_penerbit.nama_penerbit = '$txt_search'";
			}else if($select_category === "tahun_terbit"){
				$filter = " data_buku.tahun_terbit = '$txt_search'";
			}else if($select_category === "kode_rak"){
				$filter = " data_buku.kode_rak = '$txt_search'";
			}

			$sql = "SELECT * FROM inventory WHERE $filter ORDER BY inventory.id_inventory DESC";
		}else{
			$sql = "SELECT * FROM inventory ORDER BY inventory.id_inventory DESC";
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

	public function simpan_inventory_buku($cont_to_model){
		$info['tgl_inventory'] 			= $cont_to_model['tgl_inventory'];
		$info['keterangan'] 			= htmlspecialchars($cont_to_model['keterangan']);
		$this->db->insert('inventory', $info);

		if ($this->db->affected_rows() == 1){		
			return $this->db->insert_id(); 	
		}

	}

	public function edit_inventory_buku($cont_to_model, $id_inventory){
		$info['tgl_inventory'] 			= $cont_to_model['tgl_inventory'];
		$info['keterangan'] 			= htmlspecialchars($cont_to_model['keterangan']);

		$this->db->where('id_inventory', $id_inventory);
		$this->db->update('inventory', $info);
		return $info;

	}

	public function delInventory($id_inventory){
		$this->db->where('id_inventory', $id_inventory);
		$this->db->delete('inventory');
		if($this->db->affected_rows() == 1){
			return true;
		}
	}

	// Detail Inventory
	public function view_detail_inventory($id_inventory){
		$sql = "SELECT detail_inventory.id_detail_inventory, detail_inventory.id_buku, detail_inventory.jumlah_buku, data_buku.kode_buku, data_buku.isbn, data_buku.judul_buku, data_pengarang.nama_pengarang, data_penerbit.nama_penerbit, data_rak.kode_rak
			FROM detail_inventory
			LEFT JOIN inventory ON detail_inventory.id_inventory = inventory.id_inventory
			LEFT JOIN data_buku ON detail_inventory.id_buku = data_buku.id_buku
			LEFT JOIN data_pengarang ON data_buku.id_pengarang_buku = data_pengarang.id_pengarang
	 		LEFT JOIN data_penerbit ON data_buku.id_penerbit = data_penerbit.id_penerbit
	 		LEFT JOIN data_rak ON data_buku.id_rak = data_rak.id_rak
	 		WHERE detail_inventory.id_inventory = '$id_inventory'
	 		ORDER BY detail_inventory.id_inventory DESC";
		 		
		$query = $this->db->query($sql);
		return $query->result();
	}	

	public function simpan_detail_inventory($cont_to_model){
		$info['id_buku'] = htmlspecialchars($cont_to_model['id_buku']);
		$info['jumlah_buku'] = htmlspecialchars($cont_to_model['jumlah_buku']);
		$info['id_inventory'] = htmlspecialchars($cont_to_model['id_inventory']);
		$this->db->insert('detail_inventory', $info);
		if ($this->db->affected_rows() == 1) {
			return $this->db->insert_id();
		}
	}

	public function edit_detail_inventory($cont_to_model, $id_inventory, $id_detail_inventory){
		$info['id_buku'] = htmlspecialchars($cont_to_model['id_buku']);
		$info['jumlah_buku'] = htmlspecialchars($cont_to_model['jumlah_buku']);
		
		$this->db->where('id_inventory', $id_inventory);
		$this->db->where('id_inventory', $id_inventory);
		$this->db->update('detail_inventory', $info);
		return $info;
	}

	public function edit_inventory_value($id_inventory){
		$sql = "SELECT * FROM inventory	WHERE id_inventory = $id_inventory";
		
		$query = $this->db->query($sql);
		return $query->row();
	}

	public function edit_buku_inventory($id_inventory){
		$sql = "SELECT detail_inventory.jumlah_buku, data_buku.id_buku, data_buku.kode_buku, data_buku.judul_buku
				FROM detail_inventory
				LEFT JOIN data_buku ON detail_inventory.id_buku = data_buku.id_buku
				WHERE id_inventory = '$id_inventory'"; 

		$query = $this->db->query($sql);
		return $query->result();		
	}

	public function delInvDetail($id_inventory){
		$this->db->where('id_inventory', $id_inventory);
		$this->db->delete('detail_inventory');
		if($this->db->affected_rows() == 1){
			return true;
		}
	}

	// Peminjaman Buku
	public function count_peminjaman_buku($limit = null, $offset = null, $select_category = null, $txt_search = null){
		if ($txt_search) {
			if ($select_category === "0") {
				$filter = " peminjaman.id_peminjaman LIKE '%$txt_search%'
							OR data_anggota.nama_anggota LIKE '%$txt_search%'
							OR peminjaman.tanggal_peminjaman LIKE '%$txt_search%'
							OR peminjaman.keterangan LIKE '%$txt_search%'
						  ";
			}else if($select_category === "id_peminjaman"){
				$filter = " peminjaman.id_peminjaman = '$txt_search'";
			}else if($select_category === "nama_anggota"){
				$filter = " data_anggota.nama_anggota = '$txt_search'";
			}else if($select_category === "tanggal_peminjaman"){
				$filter = " peminjaman.tanggal_peminjaman = '$txt_search'";
			}else if($select_category === "keterangan"){
				$filter = " peminjaman.keterangan = '$txt_search'";
			}

			$sql = "SELECT peminjaman.id_peminjaman, peminjaman.tanggal_peminjaman, peminjaman.keterangan, data_anggota.no_induk, data_anggota.nama_anggota 
				FROM peminjaman 
				LEFT JOIN data_anggota ON peminjaman.id_anggota = data_anggota.id_anggota
				WHERE $filter
				";
		}else{
			$sql = 'SELECT peminjaman.id_peminjaman, peminjaman.tanggal_peminjaman, peminjaman.keterangan, data_anggota.no_induk, data_anggota.nama_anggota 
				FROM peminjaman 
				LEFT JOIN data_anggota ON peminjaman.id_anggota = data_anggota.id_anggota
				';
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

	public function view_peminjaman($limit = null, $offset = null, $select_category = null, $txt_search = null){
		if ($txt_search) {
			if ($select_category === "0") {
				$filter = " peminjaman.id_peminjaman LIKE '%$txt_search%'
							OR data_anggota.nama_anggota LIKE '%$txt_search%'
							OR peminjaman.tanggal_peminjaman LIKE '%$txt_search%'
							OR peminjaman.keterangan LIKE '%$txt_search%'
						  ";
			}else if($select_category === "id_peminjaman"){
				$filter = " peminjaman.id_peminjaman = '$txt_search'";
			}else if($select_category === "nama_anggota"){
				$filter = " data_anggota.nama_anggota = '$txt_search'";
			}else if($select_category === "tanggal_peminjaman"){
				$filter = " peminjaman.tanggal_peminjaman = '$txt_search'";
			}else if($select_category === "keterangan"){
				$filter = " peminjaman.keterangan = '$txt_search'";
			}

			$sql = "SELECT peminjaman.id_peminjaman, peminjaman.tanggal_peminjaman, peminjaman.keterangan, peminjaman.status_peminjaman_buku,  data_anggota.no_induk, data_anggota.nama_anggota 
				FROM peminjaman 
				LEFT JOIN data_anggota ON peminjaman.id_anggota = data_anggota.id_anggota
				WHERE $filter
				ORDER BY peminjaman.id_peminjaman DESC";
		}else{
			$sql = 'SELECT peminjaman.id_peminjaman, peminjaman.tanggal_peminjaman, peminjaman.keterangan, peminjaman.status_peminjaman_buku, data_anggota.no_induk, data_anggota.nama_anggota 
				FROM peminjaman 
				LEFT JOIN data_anggota ON peminjaman.id_anggota = data_anggota.id_anggota
				ORDER BY peminjaman.id_peminjaman DESC';
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

	public function peminjaman_baru($cont_to_model){
		$info['id_anggota'] = htmlspecialchars($cont_to_model['id_anggota']);
		$info['tanggal_peminjaman'] = htmlspecialchars($cont_to_model['tanggal_peminjaman']);
		$info['keterangan'] = htmlspecialchars(ltrim($cont_to_model['keterangan']));
		$this->db->insert('peminjaman', $info);
		if ($this->db->affected_rows() == 1) {
			return $this->db->insert_id();
		}
	}

	public function editLoanVal($loanId){
		$sql = "SELECT peminjaman.id_peminjaman, peminjaman.id_anggota, peminjaman.tanggal_peminjaman, peminjaman.keterangan, data_anggota.nama_anggota FROM peminjaman
				LEFT JOIN data_anggota ON peminjaman.id_anggota = data_anggota.id_anggota 
				WHERE id_peminjaman = $loanId";
		
		$query = $this->db->query($sql);
		return $query->row();
	}

	public function editBookLoanVal($loanId){
		$sql = "SELECT detail_peminjaman.jumlah_buku, data_buku.id_buku, data_buku.kode_buku, data_buku.judul_buku
				FROM detail_peminjaman
				LEFT JOIN data_buku ON detail_peminjaman.id_buku = data_buku.id_buku
				WHERE id_peminjaman = '$loanId'"; 

		$query = $this->db->query($sql);
		return $query->result();		
	}

	public function editLoan($cont_to_model, $loanId){
		$info['id_anggota'] = htmlspecialchars($cont_to_model['id_anggota']);
		$info['tanggal_peminjaman'] = htmlspecialchars($cont_to_model['tanggal_peminjaman']);
		$info['keterangan'] = htmlspecialchars(ltrim($cont_to_model['keterangan']));

		$this->db->where('id_peminjaman', $loanId);
		$this->db->update('peminjaman', $info);
		return $info;

	}

	public function delLoan($loanId){
		$this->db->where('id_peminjaman', $loanId);
		$this->db->delete('peminjaman');
		if($this->db->affected_rows() == 1){
			return true;
		}
	}

	// Detail Peminjaman Buku
	public function view_detail_data_peminjaman_buku($id_peminjaman){
			$sql = "SELECT detail_peminjaman.id_buku, detail_peminjaman.id_detail_peminjaman, detail_peminjaman.jumlah_buku, data_buku.judul_buku
				FROM detail_peminjaman 
				LEFT JOIN data_buku ON detail_peminjaman.id_buku = data_buku.id_buku
			 	WHERE detail_peminjaman.id_peminjaman = '$id_peminjaman' 
				ORDER BY detail_peminjaman.id_peminjaman DESC"
				;
		
		$query = $this->db->query($sql);
		return $query->result();		
	}

	public function simpan_detail_peminjaman($cont_to_model){
		$info['id_buku'] = htmlspecialchars($cont_to_model['id_buku']);
		$info['jumlah_buku'] = htmlspecialchars($cont_to_model['jumlah_buku']);
		$info['id_peminjaman'] = htmlspecialchars($cont_to_model['id_peminjaman']);
		$this->db->insert('detail_peminjaman', $info);
		if ($this->db->affected_rows() == 1) {
			return $this->db->insert_id();
		}
	}

	public function delLoanDetail($loanId){
		$this->db->where('id_peminjaman', $loanId);
		$this->db->delete('detail_peminjaman');
		if($this->db->affected_rows() == 1){
			return true;
		}
	}
}

/* End of file Model_buku.php */
/* Location: ./application/models/Model_buku.php */