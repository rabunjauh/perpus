<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_akun extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('model_akun');
		$this->load->library('form_validation');
	}

	public function index(){
		$data = [];
		$data['title'] = 'Data Akun';
		$data['header'] = $this->load->view('headers/head', '', TRUE);
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);
		$data['akun'] = $this->model_akun->view_data_akun();
		$data['content'] = $this->load->view('contents/view_data_akun', $data, TRUE);
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	public function tambah_data_akun(){
		if ( $this->input->post() ) {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nama_akun[]', 'Nama Akun', 'required');
			if ($this->form_validation->run() !=false) {				
				$akun = $this->input->post('nama_akun', true);				
				for($i = 0; $i < sizeof($akun); $i++){
					$form_info = [];
					$form_info['nama_akun'] = $akun[$i];
					if ( $this->model_akun->simpan_data_akun($form_info) ) {
						$message = '<div class="alert alert-success">Akun berhasil ditambahkan!</div>';
						$this->session->set_flashdata('message', $message);
					}else{
						$message = '<div class="alert alert-danger">Penambahan data gagal!</div>';
						$this->session->set_flashdata('message', $message);	
					}
				}
			}
		}
		$data = [];
		$data['title'] = 'Tambah Data Akun';
		$data['header'] = $this->load->view('headers/head', '', TRUE);
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);
		$data['content'] = $this->load->view('forms/form_tambah_data_akun', $data, TRUE);
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);	
 	}

 	public function edit_data_akun($id_akun){
		if (isset ($_POST['button_edit_akun'])) {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nama_akun', 'Nama Akun', 'required');
			if ($this->form_validation->run() != false){
			//value array sebelah kiri = hrs sesuai dengan nama kolom table database
			//value array sebelah kanan = hrs sesuai dengan nama input type form
			$cont_to_model['nama_akun'] 				= $this->input->post('nama_akun');
				if (!$this->model_akun->edit_data_akun($cont_to_model, $id_akun)) {
					redirect(base_url('data_akun/edit_data_akun/' . $id_akun));
				}else{
					redirect(base_url('data_akun'));
				}
			}	
		}		
		$data['title']				= 'Edit Data Akun';
		$data['edit_akun_values'] 	= $this->model_akun->edit_akun_value($id_akun);
		$data['akun'] = $this->model_akun->view_data_akun();
		$data['header'] 			= $this->load->view('headers/head', '', TRUE);
		$data['navigation'] 		= $this->load->view('headers/navigation', '', TRUE);
		$data['content'] 			= $this->load->view('forms/form_edit_data_akun', $data, TRUE);
		$data['footer'] 			= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);	
	}

	public function cari_pengarang(){
		$data = [];
		$data['title'] = 'Pengarang';
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