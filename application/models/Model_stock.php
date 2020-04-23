<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_stock extends CI_Model {

	$sql = "SELECT * data_buku.id_buku, data_buku.isbn, data_buku.judul_buku, data_buku.id_pengarang, data_buku.id_penerbit, stock_buku.id_stock_buku, stock_buku.stock_buku
			FROM data_buku
			LEFT JOIN stock_buku";	

}

/* End of file Model_stock.php */
/* Location: ./application/models/Model_stock.php */