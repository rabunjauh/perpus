
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_buku extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('model_buku');
		$this->load->model('model_pengarang');
		$this->load->model('model_penerbit');
		$this->load->model('model_rak');
		$this->load->model('model_buku');
		$this->load->model('model_anggota');
		$this->load->model('model_setting');
		if ( !$this->session->userdata('username')) {
			redirect(base_url('login'));
		}		
	}

	// View book master data
	public function index($select_category = false, $txt_search = false){
		if (!$select_category AND !$txt_search) {
			$select_category = $this->input->post('select_category');
			$txt_search = htmlspecialchars($this->input->post('txt_search'));
		}

		$config['full_tag_open'] = '<nav><ul class="pagination">';
	    $config['full_tag_close'] = '</ul></nav>';

	    $config['num_tag_open'] = '<li class="page-item">';
	    $config['num_tag_close'] = '</li>';

	    $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
	    $config['cur_tag_close'] = '</a><span class="sr-only">(current)</span></span></li>';

	    $config['prev_tag_open'] = '<li class="page-item">';
	    $config['prev_tag_close'] = '</li>';

	    $config['next_tag_open'] = '<li class="page-item">';
	    $config['next_tag_close'] = '</li>';

	    $config['first_link'] = 'First';
	    $config['prev_link'] = 'Previous';
	    $config['last_link'] = 'Last';
	    $config['next_link'] = 'Next';

	    $config['first_tag_open'] = '<li class="page-item">';
	    $config['first_tag_close'] = '</li>';
	    $config['last_tag_open'] = '<li class="page-item">';
	    $config['last_tag_close'] = '</li>';
		$config['attributes'] = array('class' => 'page-link');
	    $config['total_rows'] = $this->model_buku->count_book('', '', $select_category, urldecode($txt_search));

	   if($txt_search){
				$config["base_url"] = base_url("data_buku/index/" . $select_category . "/" . $txt_search);
   		}else{
   			$config["base_url"] = base_url("data_buku/index/0/0");
		}

		if($txt_search === false){
			$config['uri_segment'] = '3';
		}else{
	    	$config['uri_segment'] = '5';
	    }

	    $config['per_page'] = '5';
	    $this->pagination->initialize($config);

	    $data = [];
		$data['title']  	= 'Master Data Buku';
		$data['header'] 	= $this->load->view('headers/head', '', TRUE);
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);
		$data['no']			= $this->uri->segment(5);
		$data['result']		= $config['total_rows'];
		$data['books'] 		= $this->model_buku->view_data_buku($config['per_page'], $this->uri->segment(5), $select_category, urldecode($txt_search));
		$data['content'] 	= $this->load->view('contents/view_data_buku', $data, TRUE);
		$data['footer'] 	= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	public function tambah_data_buku(){
		if ($this->input->post()){
			$this->load->library('form_validation');
			$this->form_validation->set_rules('isbn', 'ISBN', 'required|numeric|max_length[13]');
			$this->form_validation->set_rules('kode_buku', 'Kode Buku', 'required');
			$this->form_validation->set_rules('judul_buku', 'Judul Buku', 'required');
			$this->form_validation->set_rules('tahun_terbit', 'Tahun Terbit', 'required|numeric|exact_length[4]');
			$this->form_validation->set_rules('keterangan', 'Keterangan');
			if ($this->form_validation->run() != false){
				$form_info = [];
				$form_info['isbn'] 			= $this->input->post('isbn', TRUE);
				$form_info['kode_buku'] 	= $this->input->post('kode_buku', TRUE);
				$form_info['judul_buku'] 	= $this->input->post('judul_buku', TRUE);
				$form_info['id_pengarang'] 	= $this->input->post('id_pengarang', TRUE);
				$form_info['id_penerbit'] 	= $this->input->post('id_penerbit', TRUE);
				$form_info['tahun_terbit']	= $this->input->post('tahun_terbit', TRUE);
				$form_info['keterangan']	= $this->input->post('keterangan', TRUE);
				$form_info['id_rak'] 		= $this->input->post('id_rak', TRUE);
				if($this->model_buku->simpan_data_buku($form_info) !== 0){
					$message = '<div class="alert alert-success">Data buku berhasil ditambahkan!</div>';
						$this->session->set_flashdata('message', $message);
						redirect(base_url('data_buku'));
				}else{
					$message = '<div class="alert alert-danger">Penambahan data gagal!</div>';
						$this->session->set_flashdata('message', $message);
						redirect(base_url('data_buku/tambah_data_buku'));
				}
			}
		}
		$data['title'] 				= 'Tambah Data Buku';
		$data['authors'] 			= $this->model_pengarang->view_data_pengarang(10,10);
		$data['publishers'] 		= $this->model_penerbit->view_data_penerbit();
		$data['bookshelves'] 		= $this->model_rak->view_data_rak();
		$data['header'] 			= $this->load->view('headers/head', '', TRUE);
		$data['navigation'] 		= $this->load->view('headers/navigation', '', TRUE);
		$data['content_pengarang'] 	= $this->load->view('contents/view_cari_pengarang', $data, TRUE);
		// $data['authors'] = $this->model_pengarang->view_data_pengarang($config['per_page'], $this->uri->segment(3));
		$data['footer'] 			= $this->load->view('footers/footer', '', TRUE);
		$data['content'] 			= $this->load->view('forms/form_tambah_data_buku', $data, TRUE);
		$this->load->view('main', $data);
	}

	public function edit_data_buku($id_buku){
		if (isset ($_POST['button_edit_buku'])) {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('isbn', 'ISBN', 'required|numeric|max_length[13]');
			$this->form_validation->set_rules('kode_buku', 'Kode Buku', 'required');
			$this->form_validation->set_rules('judul_buku', 'Judul Buku', 'required');
			$this->form_validation->set_rules('pengarang_buku', 'Pengarang Buku', 'required');
			$this->form_validation->set_rules('penerbit_buku', 'Penerbit Buku', 'required');
			$this->form_validation->set_rules('tahun_terbit', 'Tahun Terbit', 'required');
			$this->form_validation->set_rules('keterangan', 'Keterangan');
			if ($this->form_validation->run() != false){
				//value array sebelah kiri = hrs sesuai dengan nama kolom table database
				//value array sebelah kanan = hrs sesuai dengan nama input type form
				$cont_to_model['isbn'] 				= $this->input->post('isbn');
				$cont_to_model['kode_buku'] 		= $this->input->post('kode_buku');
				$cont_to_model['judul_buku'] 		= $this->input->post('judul_buku');
				$cont_to_model['id_pengarang'] 		= $this->input->post('id_pengarang');
				$cont_to_model['id_penerbit'] 		= $this->input->post('id_penerbit');
				$cont_to_model['tahun_terbit']		= $this->input->post('tahun_terbit');
				$cont_to_model['keterangan'] 		= $this->input->post('keterangan');
				$cont_to_model['id_rak'] 			= $this->input->post('id_rak');
				if (!$this->model_buku->edit_data_buku($cont_to_model, $id_buku)) {
					$message = '<div class="alert alert-success">Data buku berhasil diubah!</div>';
						$this->session->set_flashdata('message', $message);
					redirect(base_url('data_buku/edit_data_buku/' . $id_buku));
				}else{
					$message = '<div class="alert alert-danger">Perubahan data gagal!</div>';
						$this->session->set_flashdata('message', $message);
					redirect(base_url('data_buku'));
				}
			}	
		}		
		$data['title']				= 'Edit Data Buku';
		$data['authors'] 			= $this->model_pengarang->view_data_pengarang();
		$data['publishers'] 		= $this->model_penerbit->view_data_penerbit();
		$data['shelves'] 			= $this->model_rak->view_data_rak();
		$data['books'] 				= $this->model_buku->view_data_buku();
		$data['edit_buku_values'] 	= $this->model_buku->edit_buku_value($id_buku);
		$data['header'] 			= $this->load->view('headers/head', '', TRUE);
		$data['navigation'] 		= $this->load->view('headers/navigation', '', TRUE);
		$data['content'] 			= $this->load->view('forms/form_edit_data_buku', $data, TRUE);
		$data['footer'] 			= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);	
	}

	public function delete_data_buku($id_buku){
		if(!$this->model_buku->delete_buku($id_buku)){
			$message = '<div class="alert alert-danger">Data buku gagal dihapus!</div>';
			$this->session->set_flashdata('message', $message);
			redirect(base_url('data_buku'));
		}else{
			$message = '<div class="alert alert-success">Data buku berhasil dihapus!</div>';
			$this->session->set_flashdata('message', $message);
			redirect(base_url('data_buku'));
		}
	}

	// Stock
	public function stock_buku($select_category = false, $txt_search = false){
		if (!$select_category AND !$txt_search) {
			$select_category = $this->input->post('select_category');
			$txt_search = htmlspecialchars($this->input->post('txt_search'));
		}

		$config = [];
		$config['full_tag_open'] = '<nav><ul class="pagination">';
	    $config['full_tag_close'] = '</ul></nav>';

	    $config['num_tag_open'] = '<li class="page-item">';
	    $config['num_tag_close'] = '</li>';

	    $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
	    $config['cur_tag_close'] = '</a><span class="sr-only">(current)</span></span></li>';

	    $config['prev_tag_open'] = '<li class="page-item">';
	    $config['prev_tag_close'] = '</li>';

	    $config['next_tag_open'] = '<li class="page-item">';
	    $config['next_tag_close'] = '</li>';

	    $config['first_link'] = 'First';
	    $config['prev_link'] = 'Previous';
	    $config['last_link'] = 'Last';
	    $config['next_link'] = 'Next';

	    $config['first_tag_open'] = '<li class="page-item">';
	    $config['first_tag_close'] = '</li>';
	    $config['last_tag_open'] = '<li class="page-item">';
	    $config['last_tag_close'] = '</li>';
		$config['attributes'] = array('class' => 'page-link');

	   	$config['total_rows'] = $this->model_buku->count_stocks('', '', $select_category, urldecode($txt_search));

	    if($txt_search){
				$config["base_url"] = base_url("data_buku/stock_buku/" . $select_category . "/" . $txt_search);
   		}else{
   			$config["base_url"] = base_url("data_buku/stock_buku/0/0");
		}


		if($txt_search === false){
			$config['uri_segment'] = '3';
		}else{
	    	$config['uri_segment'] = '5';
	    }

	    $config['per_page'] = '5';
	    $this->pagination->initialize($config);

		$data['title']  	= 'Stock Buku';
		$data['header'] 	= $this->load->view('headers/head', '', TRUE);
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);
		$data['no']			= $this->uri->segment(5);
		$data['result']		= $config['total_rows'];
		$data['stocks'] 	= $this->model_buku->view_stock_buku($config['per_page'], $this->uri->segment(5), $select_category, urldecode($txt_search));
		$data['content'] 	= $this->load->view('contents/view_stock_buku', $data, TRUE);
		$data['footer'] 	= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	//  Inventory
	public function inventory($select_category = false, $txt_search = false){
		if (!$select_category AND !$txt_search) {
			$select_category = $this->input->post('select_category');
			$txt_search = htmlspecialchars($this->input->post('txt_search'));
		}

		$config = [];
		$config['full_tag_open'] = '<nav><ul class="pagination">';
	    $config['full_tag_close'] = '</ul></nav>';

	    $config['num_tag_open'] = '<li class="page-item">';
	    $config['num_tag_close'] = '</li>';

	    $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
	    $config['cur_tag_close'] = '</a><span class="sr-only">(current)</span></span></li>';

	    $config['prev_tag_open'] = '<li class="page-item">';
	    $config['prev_tag_close'] = '</li>';

	    $config['next_tag_open'] = '<li class="page-item">';
	    $config['next_tag_close'] = '</li>';

	    $config['first_link'] = 'First';
	    $config['prev_link'] = 'Previous';
	    $config['last_link'] = 'Last';
	    $config['next_link'] = 'Next';

	    $config['first_tag_open'] = '<li class="page-item">';
	    $config['first_tag_close'] = '</li>';
	    $config['last_tag_open'] = '<li class="page-item">';
	    $config['last_tag_close'] = '</li>';
		$config['attributes'] = array('class' => 'page-link');

	    $config['total_rows'] = $this->model_buku->count_inventory('', '', $select_category, urldecode($txt_search));

	     if($txt_search){
				$config["base_url"] = base_url("data_buku/inventory/" . $select_category . "/" . $txt_search);
   		}else{
   			$config["base_url"] = base_url("data_buku/inventory/0/0");
		}

		if($txt_search === false){
			$config['uri_segment'] = '3';
		}else{
	    	$config['uri_segment'] = '5';
	    }

	    $config['per_page'] = '5';
	    $this->pagination->initialize($config);

		$data['title'] 			= 'Inventory';
		$data['header'] 		= $this->load->view('headers/head', '', TRUE);
		$data['navigation'] 	= $this->load->view('headers/navigation', '', TRUE);
		$data['no']				= $this->uri->segment(5);
		$data['result']			= $config['total_rows'];
		$data['inventories'] 	= $this->model_buku->view_inventory($config['per_page'], $this->uri->segment(5), $select_category, urldecode($txt_search));
		$data['content'] 		= $this->load->view('contents/view_inventory', $data, TRUE);
		$data['footer'] 		= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	

	public function tambah_inventory_buku(){
		if ($this->input->post()) {
			$this->form_validation->set_rules('tgl_inventory', 'Tanggal Inventory', 'required');
			$this->form_validation->set_rules('id_buku[]', 'ID Buku', 'required');
			$this->form_validation->set_rules('jumlah_buku[]', 'Jumlah Buku', 'required|numeric');
			if($this->form_validation->run() !=false){
				$cont_to_model['tgl_inventory'] 	= $this->input->post('tgl_inventory');
				$cont_to_model['keterangan'] 			= $this->input->post('keterangan');
				$id_inventory = $this->model_buku->simpan_inventory_buku($cont_to_model);
				if($id_inventory){
					$id_buku = $this->input->post('id_buku', true);
					$jumlah_buku = $this->input->post('jumlah_buku', true);
					if(!$id_buku){
						$message = '<div class="alert alert-danger">Inventory gagal</div>';
						$this->session->set_flashdata('message', $message);
						redirect(base_url('data_buku/tambah_inventory_buku'));		
					}
					for($i = 0; $i < sizeof($id_buku); $i++){								
						$cont_to_model['id_buku'] = $id_buku[$i];
						$cont_to_model['jumlah_buku'] = $jumlah_buku[$i];
						$cont_to_model['id_inventory'] = $id_inventory;
						$this->model_buku->simpan_detail_inventory($cont_to_model);
						$this->model_buku->update_stock_buku($cont_to_model['id_buku'], $cont_to_model['jumlah_buku']);							
					}				
					$message = '<div class="alert alert-sucess">Inventory berhasil</div>';
					$this->session->set_flashdata('message', $message);
					redirect(base_url('data_buku/inventory'));
				}else{
					$message = '<div class="alert alert-danger">Inventory gagal</div>';
					$this->session->set_flashdata('message', $message);
				}
			}	
		}
		$data['title'] 			= 'Form Inventory';
		$data['header'] 		= $this->load->view('headers/head', '', TRUE);
		$data['navigation'] 	= $this->load->view('headers/navigation', '', TRUE);
		$data['books'] 			= $this->model_buku->view_data_buku();
		$data['content'] 		= $this->load->view('forms/form_tambah_stock_buku', $data, TRUE);
		$data['footer'] 		= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	public function edit_inventory_buku($id_inventory){
		if ($this->input->post()){
			$this->form_validation->set_rules('tgl_inventory', 'Tanggal Inventory', 'required');
			$this->form_validation->set_rules('id_buku[]', 'ID Buku', 'required');
			$this->form_validation->set_rules('jumlah_buku[]', 'Jumlah Buku', 'required|numeric');
			if($this->form_validation->run() !=false){
				$cont_to_model['tgl_inventory'] 	= $this->input->post('tgl_inventory');
				$cont_to_model['keterangan'] 			= $this->input->post('keterangan');
				if($this->model_buku->edit_inventory_buku($cont_to_model, $id_inventory)){
					$prevDetInventory = $this->model_buku->view_detail_inventory($id_inventory);
					for($i=0; $i < sizeof($prevDetInventory); $i++)
						{$this->model_buku->edit_stock_buku($prevDetInventory[$i]->id_buku, $prevDetInventory[$i]->jumlah_buku);
					}						
					$this->model_buku->delInvDetail($id_inventory);
					
					$id_buku = $this->input->post('id_buku', true);
					$jumlah_buku = $this->input->post('jumlah_buku', true);
					if(!$id_buku){
						$message = '<div class="alert alert-danger">Inventory gagal</div>';
						$this->session->set_flashdata('message', $message);
						redirect(base_url('data_buku/edit_inventory_buku/' . $id_inventory));		
					}
					for($i = 0; $i < sizeof($id_buku); $i++){											
						$cont_to_model['id_buku'] = $id_buku[$i];
						$cont_to_model['jumlah_buku'] = $jumlah_buku[$i];
						$cont_to_model['id_inventory'] = $id_inventory;
						$this->model_buku->simpan_detail_inventory($cont_to_model);
						$this->model_buku->update_stock_buku($cont_to_model['id_buku'], $cont_to_model['jumlah_buku']);									
					}
					$message = '<div class="alert alert-sucess">Inventory berhasil</div>';
					$this->session->set_flashdata('message', $message);
					redirect(base_url('data_buku/inventory'));
				}else{
					$message = '<div class="alert alert-danger">Inventory gagal</div>';
					$this->session->set_flashdata('message', $message);
				}
			}	
		}
		$data['title'] 			= 'Form Inventory';
		$data['header'] 		= $this->load->view('headers/head', '', TRUE);
		$data['navigation'] 	= $this->load->view('headers/navigation', '', TRUE);
		$data['edit_inventory_value'] = $this->model_buku->edit_inventory_value($id_inventory);
		$data['books'] 			= $this->model_buku->edit_buku_inventory($id_inventory);
		$data['content'] 		= $this->load->view('forms/form_edit_stock_buku', $data, TRUE);
		$data['footer'] 		= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	public function delInventory($id_inventory){
		$prevDetInventory = $this->model_buku->view_detail_inventory($id_inventory);
		for($i=0; $i < sizeof($prevDetInventory); $i++){
			$this->model_buku->edit_stock_buku($prevDetInventory[$i]->id_buku, $prevDetInventory[$i]->jumlah_buku);
		}
		$this->model_buku->delInvDetail($id_inventory);
		if($this->model_buku->delInventory($id_inventory)){			
			$message = '<div class="alert alert-success">Data inventory berhasil dihapus!</div>';
			$this->session->set_flashdata('message', $message);
			redirect(base_url('data_buku/inventory'));
		}else{
			$message = '<div class="alert alert-danger">Data inventory gagal dihapus!</div>';
			$this->session->set_flashdata('message', $message);
			redirect(base_url('data_buku/inventory'));
		}
	}
	
	// Detail Inventory
	public function detail_inventory($id_inventory){
		$data['title'] 				= 'Detail Inventory';
		$data['header'] 			= $this->load->view('headers/head', '', TRUE);
		$data['navigation'] 		= $this->load->view('headers/navigation', '', TRUE);
		$data['inventory_details']	= $this->model_buku->view_detail_inventory($id_inventory);
		$data['content'] 			= $this->load->view('contents/view_detail_inventory', $data, TRUE);
		$data['footer'] 			= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	// Peminjaman Buku
	public function peminjaman(){
		$config = [];
		$config['full_tag_open'] = '<nav><ul class="pagination">';
	    $config['full_tag_close'] = '</ul></nav>';

	    $config['num_tag_open'] = '<li class="page-item">';
	    $config['num_tag_close'] = '</li>';

	    $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
	    $config['cur_tag_close'] = '</a><span class="sr-only">(current)</span></span></li>';

	    $config['prev_tag_open'] = '<li class="page-item">';
	    $config['prev_tag_close'] = '</li>';

	    $config['next_tag_open'] = '<li class="page-item">';
	    $config['next_tag_close'] = '</li>';

	    $config['first_link'] = 'First';
	    $config['prev_link'] = 'Previous';
	    $config['last_link'] = 'Last';
	    $config['next_link'] = 'Next';

	    $config['first_tag_open'] = '<li class="page-item">';
	    $config['first_tag_close'] = '</li>';
	    $config['last_tag_open'] = '<li class="page-item">';
	    $config['last_tag_close'] = '</li>';
		$config['attributes'] = array('class' => 'page-link');

	    $config["base_url"] = base_url() . "data_buku/peminjaman";
	    $config['total_rows'] = $this->model_buku->count_peminjaman_buku();
	    $config['per_page'] = '5';
	    $config['uri_segment'] = '3';
	    $this->pagination->initialize($config);

		$data['title'] 			= 'Peminjaman';
		$data['header'] 		= $this->load->view('headers/head', '', TRUE);
		$data['navigation'] 	= $this->load->view('headers/navigation', '', TRUE);
		$data['result']		= $config['total_rows'];
		$data['borrows']		= $this->model_buku->view_peminjaman($config['per_page'] = '5', $this->uri->segment(3));
		$data['content'] 		= $this->load->view('contents/view_peminjaman', $data, TRUE);
		$data['footer'] 		= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	public function peminjaman_baru(){
		if ($this->input->post()) {
			$this->form_validation->set_rules('anggota', 'Anggota', 'required');
			$this->form_validation->set_rules('id_buku[]', 'ID Buku', 'required');
			$this->form_validation->set_rules('jumlah_buku[]', 'Jumlah Buku', 'required|numeric');
			$this->form_validation->set_rules('tanggal_peminjaman', 'Tanggal Peminjaman', 'required');
			if($this->form_validation->run() !=false){
				$cont_to_model['id_anggota'] 			= $this->input->post('id_anggota');
				$cont_to_model['tanggal_peminjaman'] 	= $this->input->post('tanggal_peminjaman');
				$cont_to_model['keterangan'] 			= $this->input->post('keterangan');
				$id_peminjaman = $this->model_buku->peminjaman_baru($cont_to_model);
				$this->model_anggota->update_status_anggota($cont_to_model['id_anggota']);
				if($id_peminjaman){
					$id_buku = $this->input->post('id_buku', true);
					$jumlah_buku = $this->input->post('jumlah_buku', true);
					for($i = 0; $i < sizeof($id_buku); $i++){
						if ($this->model_buku->cek_tabel_stock_buku($id_buku[$i])->stock_buku >= $jumlah_buku[$i] )	{				
								$cont_to_model['id_buku'] = $id_buku[$i];
								$cont_to_model['jumlah_buku'] = $jumlah_buku[$i];
								$cont_to_model['id_peminjaman'] = $id_peminjaman;
								$this->model_buku->simpan_detail_peminjaman($cont_to_model);
								$this->model_buku->update_stock_buku_pinjam($cont_to_model['id_buku'], $cont_to_model['jumlah_buku']);
							}else{
							$message = '<div class="alert alert-danger">Maaf ada stock buku yang sedang kosong!</div>';
							$this->session->set_flashdata('message', $message);
						}
					}
					$message = '<div class="alert alert-sucess">Peminjaman baru berhasil</div>';
					$this->session->set_flashdata('message', $message);
					redirect(base_url('data_buku/peminjaman'));
				}else{
					$message = '<div class="alert alert-danger">Peminjaman baru gagal</div>';
					$this->session->set_flashdata('message', $message);
				}
				// if ($this->model_buku->cek_tabel_stock_buku($cont_to_model['id_buku']))	{
				// 	 if ( !== 0){
				// 		$message = '<div class="alert alert-sucess">Peminjaman baru berhasil</div>';
				// 		$this->session->set_flashdata('message', $message);
				// 		$this->model_buku->update_stock_buku_pinjam($cont_to_model['buku'], $cont_to_model['jumlah_buku']); 
				// 	}
				// 	else
				// 	{
				// 		$message = '<div class="alert alert-danger">Peminjaman baru gagal</div>';
				// 		$this->session->set_flashdata('message', $message);
				// 	}
				// }
				// else
				// {
				// 	$message = '<div class="alert alert-danger">Maaf stock buku sedang kosong!</div>';
				// 	$this->session->set_flashdata('message', $message);
				// }
			}				
		}
		$data['title'] 			= 'Form Peminjaman';
		$data['header'] 		= $this->load->view('headers/head', '', TRUE);
		$data['navigation'] 	= $this->load->view('headers/navigation', '', TRUE);
		// $data['members'] 		= $this->model_buku->tampil_buku();
		$data['setting']		= $this->model_setting->view_setting();
		$data['books'] 			= $this->model_buku->view_data_buku();
		$data['content'] 		= $this->load->view('forms/form_peminjaman_buku', $data, TRUE);
		$data['footer'] 		= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	public function editLoan($loanId){
		if ($this->input->post()){
			$this->form_validation->set_rules('anggota', 'Anggota', 'required');
			$this->form_validation->set_rules('tanggal_peminjaman', 'Tanggal Peminjaman', 'required');
			$this->form_validation->set_rules('id_buku[]', 'ID Buku', 'required');
			$this->form_validation->set_rules('jumlah_buku[]', 'Jumlah Buku', 'required|numeric');
			if($this->form_validation->run() !=false){
				$cont_to_model['id_anggota'] 			= $this->input->post('id_anggota');
				$cont_to_model['tanggal_peminjaman'] 	= $this->input->post('tanggal_peminjaman');
				$cont_to_model['keterangan'] 			= $this->input->post('keterangan');
				if($this->model_buku->editLoan($cont_to_model, $loanId)){
					$prevLoanDetail = $this->model_buku->view_detail_data_peminjaman_buku($loanId);
					// var_dump($prevLoanDetail);die;
					for($i=0; $i < sizeof($prevLoanDetail); $i++)
						{$this->model_buku->edit_stock_buku($prevLoanDetail[$i]->id_buku, $prevLoanDetail[$i]->jumlah_buku);
					}						
					$this->model_buku->delLoanDetail($loanId);
					
					$id_buku = $this->input->post('id_buku', true);
					$jumlah_buku = $this->input->post('jumlah_buku', true);
					for($i = 0; $i < sizeof($id_buku); $i++){
						if ($this->model_buku->cek_tabel_stock_buku($id_buku[$i])->stock_buku >= $jumlah_buku[$i] )	{				
								$cont_to_model['id_buku'] = $id_buku[$i];
								$cont_to_model['jumlah_buku'] = $jumlah_buku[$i];
								$cont_to_model['id_peminjaman'] = $id_peminjaman;
								$this->model_buku->simpan_detail_peminjaman($cont_to_model);
								$this->model_buku->update_stock_buku_pinjam($cont_to_model['id_buku'], $cont_to_model['jumlah_buku']);
							}else{
							$message = '<div class="alert alert-danger">Maaf ada stock buku yang sedang kosong!</div>';
							$this->session->set_flashdata('message', $message);
						}
					}
					$message = '<div class="alert alert-sucess">Peminjaman baru berhasil</div>';
					$this->session->set_flashdata('message', $message);
					redirect(base_url('data_buku/peminjaman'));
				}else{
					$message = '<div class="alert alert-danger">Peminjaman baru gagal</div>';
					$this->session->set_flashdata('message', $message);
				}
			}	
		}
		$data['title'] 			= 'Form Inventory';
		$data['header'] 		= $this->load->view('headers/head', '', TRUE);
		$data['navigation'] 	= $this->load->view('headers/navigation', '', TRUE);
		$data['editLoanVal'] = $this->model_buku->editLoanVal($loanId);
		$data['editBookLoanValues'] 			= $this->model_buku->editBookLoanVal($loanId);
		$data['content'] 		= $this->load->view('forms/form_edit_peminjaman', $data, TRUE);
		$data['footer'] 		= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	public function detail_data_peminjaman_buku($id_peminjaman){
		$data['title'] 			= 'Detail data peminjaman buku';
		$data['header'] 		= $this->load->view('headers/head', '', TRUE);
		$data['navigation'] 	= $this->load->view('headers/navigation', '', TRUE);
		$data['borrow_details']		= $this->model_buku->view_detail_data_peminjaman_buku($id_peminjaman);
		$data['content'] 		= $this->load->view('contents/view_detail_data_peminjaman_buku', $data, TRUE);
		$data['footer'] 		= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}	

	public function cari_buku(){
		$config = [];

		$config['full_tag_open'] = '<nav><ul class="pagination">';
	    $config['full_tag_close'] = '</ul></nav>';

	    $config['num_tag_open'] = '<li class="page-item">';
	    $config['num_tag_close'] = '</li>';

	    $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
	    $config['cur_tag_close'] = '</a><span class="sr-only">(current)</span></span></li>';

	    $config['prev_tag_open'] = '<li class="page-item">';
	    $config['prev_tag_close'] = '</li>';

	    $config['next_tag_open'] = '<li class="page-item">';
	    $config['next_tag_close'] = '</li>';

	    $config['first_link'] = 'First';
	    $config['prev_link'] = 'Previous';
	    $config['last_link'] = 'Last';
	    $config['next_link'] = 'Next';

	    $config['first_tag_open'] = '<li class="page-item">';
	    $config['first_tag_close'] = '</li>';
	    $config['last_tag_open'] = '<li class="page-item">';
	    $config['last_tag_close'] = '</li>';
		$config['attributes'] = array('class' => 'page-link');

	    $config['total_rows'] = $this->model_buku->count_book();
	    $config["base_url"] = base_url() . "data_buku/cari_buku";
	    $config['uri_segment'] = '3';
		$config['per_page'] = '5';
	    $this->pagination->initialize($config);

		$data = [];
		$data['title'] = 'Buku';
		$data['header'] 			= $this->load->view('headers/head', '', TRUE);
		$data['no']	= $this->uri->segment(3);
		$data['result'] = $config['total_rows'];
		$data['buku'] = $this->model_buku->view_data_buku($config['per_page'], $this->uri->segment(3));
		$data['footer'] 			= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('contents/view_cari_buku', $data);
	}

	public function search_buku_cari($select_category="0", $txt_search ="0"){
		// $this->load->helper('html');
		if (!$select_category AND !$txt_search) {
			$select_category = $this->input->post('select_category');
			$txt_search = htmlspecialchars($this->input->post('txt_search'));
		}
		$config['full_tag_open'] = '<nav><ul class="pagination">';
	    $config['full_tag_close'] = '</ul></nav>';

	    $config['num_tag_open'] = '<li class="page-item">';
	    $config['num_tag_close'] = '</li>';

	    $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
	    $config['cur_tag_close'] = '</a><span class="sr-only">(current)</span></span></li>';

	    $config['prev_tag_open'] = '<li class="page-item">';
	    $config['prev_tag_close'] = '</li>';

	    $config['next_tag_open'] = '<li class="page-item">';
	    $config['next_tag_close'] = '</li>';

	    $config['first_link'] = 'First';
	    $config['prev_link'] = 'Previous';
	    $config['last_link'] = 'Last';
	    $config['next_link'] = 'Next';

	    $config['first_tag_open'] = '<li class="page-item">';
	    $config['first_tag_close'] = '</li>';
	    $config['last_tag_open'] = '<li class="page-item">';
	    $config['last_tag_close'] = '</li>';
		$config['attributes'] = array('class' => 'page-link');
	   		
   		$config['total_rows'] = $this->model_buku->count_book('', '', $select_category, urldecode($txt_search));

   		if($txt_search){
			$config["base_url"] = base_url("data_buku/search_buku_cari/" . $select_category . "/" . $txt_search);
   		}else{
   			$config["base_url"] = base_url("data_buku/search_buku_cari/0/0");
		}

		if($txt_search === false){
			$config['uri_segment'] = '3';
		}else{
	    	$config['uri_segment'] = '5';
	    }

	    $config['per_page'] = '5';
	    $this->pagination->initialize($config);

		$data = [];
		$data['title'] 			= 'Data Buku';
		$data['header'] 		= $this->load->view('headers/head', '', TRUE);
		$data['navigation'] 	= $this->load->view('headers/navigation', '', TRUE);
		$data['buku'] 		= $this->model_buku->view_data_buku($config['per_page'],  $this->uri->segment(5), $select_category, urldecode($txt_search));
		$data['no']	= $this->uri->segment(5);
		$data['result'] = $config['total_rows'];
		$data['footer'] 		= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('contents/view_cari_buku', $data);
	}

	public function pengembalian()
	{
		$data['title'] = 'Pengembalian';
	}
}

	
