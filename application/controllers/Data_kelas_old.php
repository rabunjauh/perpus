<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_kelas extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('model_kelas');
		$this->load->library('form_validation');
	}

	public function index(){
		$data = [];
		$data['title'] 			= 'Data Kelas';
		$data['header'] 		= $this->load->view('headers/head', '', TRUE);
		$data['navigation'] 	= $this->load->view('headers/navigation', '', TRUE);
		$data['kelas'] 			= $this->model_kelas->view_data_kelas();
		$data['content'] 		= $this->load->view('contents/view_data_kelas', $data, TRUE);
		$data['footer'] 		= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	public function tambah_data_kelas(){
		if ( $this->input->post() ) {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('kelas[]', 'Kelas', 'required|alpha');
			if ($this->form_validation->run() !=false) {				
				$kelas = $this->input->post('kelas', true);				
				for($i = 0; $i < sizeof($kelas); $i++){
					$form_info = [];
					$form_info['kelas'] = $kelas[$i];
					if ( $this->model_kelas->simpan_data_kelas($form_info) ) {
						$message = '<div class="alert alert-success">Kelas berhasil ditambahkan!</div>';
						$this->session->set_flashdata('message', $message);
					}else{
						$message = '<div class="alert alert-danger">Penambahan data gagal!</div>';
						$this->session->set_flashdata('message', $message);	
					}
				}
			}
		}
		$data = [];
		$data['title'] 			= 'Tambah Data Kelas';
		$data['header'] 		= $this->load->view('headers/head', '', TRUE);
		$data['navigation'] 	= $this->load->view('headers/navigation', '', TRUE);
		$data['content'] 		= $this->load->view('forms/form_tambah_data_kelas', $data, TRUE);
		$data['footer'] 		= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);	
 	}

 	public function edit_data_kelas($id_kelas){
		if (isset ($_POST['button_edit_kelas'])) {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('kelas', 'Nama Kelas', 'required');
			if ($this->form_validation->run() != false){
			//value array sebelah kiri = hrs sesuai dengan nama kolom table database
			//value array sebelah kanan = hrs sesuai dengan nama input type form
			$cont_to_model['kelas'] = $this->input->post('kelas');
				if (!$this->model_kelas->edit_data_kelas($cont_to_model, $id_kelas)) {
					redirect(base_url('data_kelas/edit_data_kelas/' . $id_kelas));
				}else{
					redirect(base_url('data_kelas'));
				}
			}	
		}		
		$data['title']				= 'Edit Data Kelas';
		$data['edit_kelas_values'] 	= $this->model_kelas->edit_kelas_value($id_kelas);
		$data['kelas'] 				= $this->model_kelas->view_data_kelas();
		$data['header'] 			= $this->load->view('headers/head', '', TRUE);
		$data['navigation'] 		= $this->load->view('headers/navigation', '', TRUE);
		$data['content'] 			= $this->load->view('forms/form_edit_data_kelas', $data, TRUE);
		$data['footer'] 			= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);	
	}

	public function cari_kelas(){
		$data = [];
		$data['title'] = 'kelas';
		$data['kelas'] = $this->model_kelas->view_data_kelas();
		$data['footer'] 			= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('contents/view_cari_kelas', $data);
	}
}

/* End of file Data_kelas.php */
/* Location: ./application/controllers/Data_kelas.php */