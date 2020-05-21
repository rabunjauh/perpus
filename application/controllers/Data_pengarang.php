<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pengarang extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('model_pengarang');
		$this->load->library('form_validation');
	}

	public function index(){
		$data = [];
		$data['title'] = 'Data Pengarang';
		$data['header'] = $this->load->view('headers/head', '', TRUE);
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);
		$data['pengarang'] = $this->model_pengarang->view_data_pengarang();
		$data['content'] = $this->load->view('contents/view_data_pengarang', $data, TRUE);
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	public function tambah_data_pengarang(){
		if ( $this->input->post() ) {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nama_pengarang[]', 'Nama Pengarang', 'required');
			if ($this->form_validation->run() !=false) {				
				$pengarang = $this->input->post('nama_pengarang', true);				
				for($i = 0; $i < sizeof($pengarang); $i++){
					$form_info = [];
					$form_info['nama_pengarang'] = $pengarang[$i];
					if ( $this->model_pengarang->simpan_data_pengarang($form_info) ) {
						$message = '<div class="alert alert-success">Pengarang berhasil ditambahkan!</div>';
						$this->session->set_flashdata('message', $message);
					}else{
						$message = '<div class="alert alert-danger">Penambahan data gagal!</div>';
						$this->session->set_flashdata('message', $message);	
					}
				}
			}
		}
		$data = [];
		$data['title'] = 'Tambah Data Pengarang';
		$data['header'] = $this->load->view('headers/head', '', TRUE);
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);
		$data['content'] = $this->load->view('forms/form_tambah_data_pengarang', $data, TRUE);
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);	
 	}

 	public function edit_data_pengarang($id_pengarang){
		if (isset ($_POST['button_edit_pengarang'])) {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nama_pengarang', 'Nama Pengarang', 'required');
			if ($this->form_validation->run() != false){
			//value array sebelah kiri = hrs sesuai dengan nama kolom table database
			//value array sebelah kanan = hrs sesuai dengan nama input type form
			$cont_to_model['nama_pengarang'] 				= $this->input->post('nama_pengarang');
				if (!$this->model_pengarang->edit_data_pengarang($cont_to_model, $id_pengarang)) {
					redirect(base_url('data_pengarang/edit_data_pengarang/' . $id_pengarang));
				}else{
					redirect(base_url('data_pengarang'));
				}
			}	
		}		
		$data['title']				= 'Edit Data Pengarang';
		$data['edit_pengarang_values'] 	= $this->model_pengarang->edit_pengarang_value($id_pengarang);
		$data['pengarang'] = $this->model_pengarang->view_data_pengarang();
		$data['header'] 			= $this->load->view('headers/head', '', TRUE);
		$data['navigation'] 		= $this->load->view('headers/navigation', '', TRUE);
		$data['content'] 			= $this->load->view('forms/form_edit_data_pengarang', $data, TRUE);
		$data['footer'] 			= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);	
	}

	public function cari_pengarang(){
		$data = [];
		$data['title'] = 'Pengarang';
		$data['header'] 			= $this->load->view('headers/head', '', TRUE);
		$data['pengarang'] = $this->model_pengarang->view_data_pengarang();
		$data['footer'] 			= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('contents/view_cari_pengarang', $data);
	}

	public function get_pengarang(){
		echo "ok";
	}

}

/* End of file Data_pengarang.php */
/* Location: ./application/controllers/Data_pengarang.php */