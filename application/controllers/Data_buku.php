
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_buku extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('model_buku');
		$this->load->model('model_pengarang');
		$this->load->model('model_penerbit');
		$this->load->model('model_rak');
		$this->load->model('model_anggota');
		if ( !$this->session->userdata('username')) {
			redirect(base_url('login'));
		}		
	}

	public function index(){
		$data = [];
		$config = [];
		$config['full_tag_open'] = '<ul class="pagination">';
	    $config['full_tag_close'] = '</ul>';

	    $config['num_tag_open'] = '<li>';
	    $config['num_tag_close'] = '</li>';

	    $config['cur_tag_open'] = '<li class="active"><span>';
	    $config['cur_tag_close'] = '<span class="sr-only">(current)</span></span></li>';

	    $config['prev_tag_open'] = '<li>';
	    $config['prev_tag_close'] = '</li>';

	    $config['next_tag_open'] = '<li>';
	    $config['next_tag_close'] = '</li>';

	    $config['first_link'] = 'First';
	    $config['prev_link'] = 'Previous';
	    $config['last_link'] = 'Last';
	    $config['next_link'] = 'Next';

	    $config['first_tag_open'] = '<li>';
	    $config['first_tag_close'] = '</li>';
	    $config['last_tag_open'] = '<li>';
	    $config['last_tag_close'] = '</li>';

	    $config["base_url"] = base_url() . "data_buku/index";
	    $config['total_rows'] = $this->model_buku->count_book();
	    $config['per_page'] = '10';
	    $config['uri_segment'] = '3';
	    $this->pagination->initialize($config);

		$data['title']  	= 'Master Data Buku';
		$data['header'] 	= $this->load->view('headers/head', '', TRUE);
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);
		$data['books'] 		= $this->model_buku->view_data_buku($config['per_page'], $this->uri->segment(3));
		$data['content'] 	= $this->load->view('contents/view_data_buku', $data, TRUE);
		$data['footer'] 	= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	public function tambah_data_buku(){
		if ($this->input->post()){
			$this->load->library('form_validation');
			$this->form_validation->set_rules('isbn', 'ISBN', 'required|numeric|max_length[13]');
			$this->form_validation->set_rules('judul_buku', 'Judul Buku', 'required');
			$this->form_validation->set_rules('tahun_terbit', 'Tahun Terbit', 'required|numeric|exact_length[4]');
			$this->form_validation->set_rules('keterangan', 'Keterangan');
			if ($this->form_validation->run() != false){
				$form_info = [];
				$form_info['isbn'] 			= $this->input->post('isbn', TRUE);
				$form_info['judul_buku'] 	= $this->input->post('judul_buku', TRUE);
				$form_info['id_pengarang'] 	= $this->input->post('id_pengarang', TRUE);
				$form_info['id_penerbit'] 	= $this->input->post('id_penerbit', TRUE);
				$form_info['tahun_terbit']	= $this->input->post('tahun_terbit', TRUE);
				$form_info['keterangan']	= $this->input->post('keterangan', TRUE);
				$form_info['id_rak'] 		= $this->input->post('id_rak', TRUE);
				if($this->model_buku->simpan_data_buku($form_info) !== 0){
					header('Location: ' . base_url('data_buku'));
				}else{
					echo "tambah data gagal";
				}
			}
		}
		$data['title'] 			= 'Tambah Data Buku';
		$data['authors'] 		= $this->model_pengarang->view_data_pengarang();
		$data['publishers'] 	= $this->model_penerbit->view_data_penerbit();
		$data['bookshelves'] 	= $this->model_rak->view_data_rak();
		$data['header'] 		= $this->load->view('headers/head', '', TRUE);
		$data['navigation'] 	= $this->load->view('headers/navigation', '', TRUE);
		$data['content'] 		= $this->load->view('forms/form_tambah_data_buku', $data, TRUE);
		$data['footer'] 		= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	public function edit_data_buku($id_buku){
		if (isset ($_POST['button_edit_buku'])) {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('isbn', 'ISBN', 'required|numeric|max_length[13]');
			$this->form_validation->set_rules('judul_buku', 'Judul Buku', 'required');
			$this->form_validation->set_rules('pengarang_buku', 'Pengarang Buku', 'required');
			$this->form_validation->set_rules('penerbit_buku', 'Penerbit Buku', 'required');
			$this->form_validation->set_rules('tahun_terbit', 'Tahun Terbit', 'required');
			$this->form_validation->set_rules('keterangan', 'Keterangan');
			if ($this->form_validation->run() != false){
				//value array sebelah kiri = hrs sesuai dengan nama kolom table database
				//value array sebelah kanan = hrs sesuai dengan nama input type form
				$cont_to_model['isbn'] 				= $this->input->post('isbn');
				$cont_to_model['judul_buku'] 		= $this->input->post('judul_buku');
				$cont_to_model['id_pengarang'] 		= $this->input->post('id_pengarang');
				$cont_to_model['id_penerbit'] 		= $this->input->post('id_penerbit');
				$cont_to_model['tahun_terbit']		= $this->input->post('tahun_terbit');
				$cont_to_model['keterangan'] 		= $this->input->post('keterangan');
				$cont_to_model['id_rak'] 			= $this->input->post('id_rak');
				// var_dump($cont_to_model);die;
				if (!$this->model_buku->edit_data_buku($cont_to_model, $id_buku)) {
					redirect(base_url('data_buku/edit_data_buku/' . $id_buku));
				}else{
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
			$message = '<div class="alert alert-danger">Buku gagal dihapus!</div>';
			$this->session->set_flashdata('message', $message);
			redirect(base_url('data_buku'));
		}else{
			$message = '<div class="alert alert-success">Buku berhasil dihapus!</div>';
			$this->session->set_flashdata('message', $message);
			redirect(base_url('data_buku'));
		}
	}

	public function stock_buku(){
		$data['title']  	= 'Stock Buku';
		$data['header'] 	= $this->load->view('headers/head', '', TRUE);
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);
		$data['stocks'] 	= $this->model_buku->view_stock_buku();
		$data['content'] 	= $this->load->view('contents/view_stock_buku', $data, TRUE);
		$data['footer'] 	= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	public function tambah_inventory_buku(){
		if ($this->input->post()) {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('qty', 'Quantity', 'required|numeric');
			$this->form_validation->set_rules('tgl_inventory', 'Tanggal Inventory', 'required');
			if ($this->form_validation->run() != false) 
			{
				$cont_to_model['id_buku'] = $this->input->post('judul_buku');				
				$cont_to_model['qty'] = $this->input->post('qty');
				$cont_to_model['tgl_inventory'] = $this->input->post('tgl_inventory');
				$cont_to_model['keterangan'] = $this->input->post('keterangan');
				//menyimpan data ke tabel inventory jika berhasil update sotck buku
				if ($this->model_buku->simpan_inventory_buku($cont_to_model) !== 0) 
				{
					$message = '<div class="alert alert-success">Tambah Stock Berhasil</div>';
					$this->session->set_flashdata('message', $message);
					$this->model_buku->update_stock_buku($cont_to_model['qty'], $cont_to_model['id_buku']);
					redirect(base_url('data_buku/stock_buku/'));
				}
				else
				{
					$message = '<div class="alert alert-danger">Tambah Stock Gagal</div>';
					$this->session->set_flashdata('message', $message);
					redirect(base_url('data_buku/tambah_inventory_buku/'));
				}
			}
		}
		$data['title']  	= 'Tambah Stock Buku';
		$data['header'] 	= $this->load->view('headers/head', '', TRUE);
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);
		$data['books'] 		= $this->model_buku->view_data_buku();
		$data['content'] 	= $this->load->view('forms/form_tambah_stock_buku', $data, TRUE);
		$data['footer'] 	= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	public function inventory()
	{
		$data['title'] 			= 'Inventory';
		$data['header'] 		= $this->load->view('headers/head', '', TRUE);
		$data['navigation'] 	= $this->load->view('headers/navigation', '', TRUE);
		$data['inventories'] 	= $this->model_buku->view_inventory();
		$data['content'] 		= $this->load->view('contents/view_inventory', $data, TRUE);
		$data['footer'] 		= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	public function peminjaman()
	{
		$data['title'] 			= 'Peminjaman';
		$data['header'] 		= $this->load->view('headers/head', '', TRUE);
		$data['navigation'] 	= $this->load->view('headers/navigation', '', TRUE);
		$data['borrows']		= $this->model_buku->view_peminjaman();
		$data['content'] 		= $this->load->view('contents/view_peminjaman', $data, TRUE);
		$data['footer'] 		= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	public function peminjaman_baru()
	{
		if ($this->input->post()) {
			$cont_to_model['anggota'] 				= $this->input->post('anggota');
			$cont_to_model['buku'] 					= $this->input->post('buku');
			$cont_to_model['jumlah_buku'] 			= $this->input->post('jumlah_buku');
			$cont_to_model['tanggal_peminjaman'] 	= $this->input->post('tanggal_peminjaman');
			$cont_to_model['keterangan'] 			= $this->input->post('keterangan');
			if ($this->model_buku->cek_tabel_stock_buku($cont_to_model['buku']))
			{
				 if ($this->model_buku->peminjaman_baru($cont_to_model) !== 0){
					$message = '<div class="alert alert-sucess">Peminjaman baru berhasil</div>';
					$this->session->set_flashdata('message', $message);
					$this->model_buku->update_stock_buku_pinjam($cont_to_model['buku'], $cont_to_model['jumlah_buku']); 
				}
				else
				{
					$message = '<div class="alert alert-danger">Peminjaman baru gagal</div>';
					$this->session->set_flashdata('message', $message);
				}
			}
			else
			{
				$message = '<div class="alert alert-danger">Maaf stock buku sedang kosong!</div>';
				$this->session->set_flashdata('message', $message);
			}
		}
		$data['title'] 			= 'Peminjaman Baru';
		$data['header'] 		= $this->load->view('headers/head', '', TRUE);
		$data['navigation'] 	= $this->load->view('headers/navigation', '', TRUE);
		$data['members'] 		= $this->model_anggota->tampil_anggota();
		$data['books'] 			= $this->model_buku->view_data_buku();
		$data['content'] 		= $this->load->view('forms/form_peminjaman_buku', $data, TRUE);
		$data['footer'] 		= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	public function search(){
		
	}

	public function pengembalian()
	{
		$data['title'] = 'Pengembalian';
	}
}

	
