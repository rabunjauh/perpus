<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_rak extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('model_rak');
		if (!$this->session->userdata('username')){
			redirect(base_url('login'));
		}
	}	

	public function index(){
		$data = [];
		$data['title'] = 'Data Rak';
		$data['header'] = $this->load->view('headers/head', '', TRUE);
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);
		$data['rak'] = $this->model_rak->view_data_rak();
		$data['content'] = $this->load->view('contents/view_data_rak', $data, TRUE);
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	public function tambah_data_rak(){
		if ( $this->input->post() ) {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('kode_rak', 'Kode Rak', 'required');
			if ($this->form_validation->run() !=false) {
				
				$form_info = [];
				$form_info['kode_rak'] = strtoupper($this->input->post('kode_rak'));
				if ( $this->model_rak->simpan_data_rak($form_info) ) {
					$message = '<div class="alert alert-success">Kode Rak berhasil ditambahkan!</div>';
					$this->session->set_flashdata('message', $message);
				}else{
					$message = '<div class="alert alert-danger">Penambahan data gagal!</div>';
					$this->session->set_flashdata('message', $message);	
				}
			}
		}
		$data = [];
		$data['title'] = 'Tambah Data Rak';
		$data['header'] = $this->load->view('headers/head', '', TRUE);
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);
		$data['content'] = $this->load->view('forms/form_tambah_data_rak', $data, TRUE);
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);	
 	}

 	public function edit_data_rak($id_rak){
		if (isset ($_POST['button_edit_rak'])) {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('kode_rak', 'Kode Rak', 'required');
			if ($this->form_validation->run() != false){
			//value array sebelah kiri = hrs sesuai dengan nama kolom table database
			//value array sebelah kanan = hrs sesuai dengan nama input type form
			$cont_to_model['kode_rak'] 				= strtoupper($this->input->post('kode_rak'));
				if (!$this->model_rak->edit_data_rak($cont_to_model, $id_rak)) {
					redirect(base_url('data_rak/edit_data_rak/' . $id_rak));
				}else{
					redirect(base_url('data_rak'));
				}
			}	
		}		
		$data['title']				= 'Edit Data Rak';
		$data['edit_rak_values'] 	= $this->model_rak->edit_rak_value($id_rak);
		$data['rak'] = $this->model_rak->view_data_rak();
		$data['header'] 			= $this->load->view('headers/head', '', TRUE);
		$data['navigation'] 		= $this->load->view('headers/navigation', '', TRUE);
		$data['content'] 			= $this->load->view('forms/form_edit_data_rak', $data, TRUE);
		$data['footer'] 			= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);	
	}

	public function cari_rak(){
		$data = [];
		$data['title'] = 'rak';
		$data['rak'] = $this->model_rak->view_data_rak();
		$data['footer'] 			= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('contents/view_cari_rak', $data);
	}

}

/* End of file Data_rak.php */
/* Location: ./application/controllers/Data_rak.php */