<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_penerbit extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('model_penerbit');
		$this->load->library('form_validation');
	}

	public function index(){
		$data = [];
		$data['title'] = 'Data Penerbit';
		$data['header'] = $this->load->view('headers/head', '', TRUE);
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);
		$data['penerbit'] = $this->model_penerbit->view_data_penerbit();
		$data['content'] = $this->load->view('contents/view_data_penerbit', $data, TRUE);
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	public function tambah_data_penerbit(){
		if ($this->input->post()){
			$this->form_validation->set_rules('nama_penerbit', 'Nama Penerbit', 'required');
			if ($this->form_validation->run() != false){
				$form_info = [];
				$form_info['nama_penerbit'] = $this->input->post('nama_penerbit');
				if($this->model_penerbit->simpan_data_penerbit($form_info)){
					$message = '<div class="alert alert-success">Penerbit berhasil ditambahkan!</div>';
					$this->session->set_flashdata('message', $message);
				}else{
					$message = '<div class="alert alert-danger">Penambahan data gagal!</div>';
					$this->session->set_flashdata('message', $message);
				}
			}
		}
		$data = [];
		$data['title'] = 'Data Penerbit';
		$data['header'] = $this->load->view('headers/head', '', TRUE);
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);
		$data['penerbit'] = $this->model_penerbit->view_data_penerbit();
		$data['content'] = $this->load->view('forms/form_tambah_data_penerbit', $data, TRUE);
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	public function edit_data_penerbit($id_penerbit){
		if (isset ($_POST['button_edit_penerbit'])) {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nama_penerbit', 'Nama Penerbit', 'required');
			if ($this->form_validation->run() != false){
			//value array sebelah kiri = hrs sesuai dengan nama kolom table database
			//value array sebelah kanan = hrs sesuai dengan nama input type form
			$cont_to_model['nama_penerbit'] 				= $this->input->post('nama_penerbit');
				if (!$this->model_penerbit->edit_data_penerbit($cont_to_model, $id_penerbit)) {
					redirect(base_url('data_penerbit/edit_data_penerbit/' . $id_penerbit));
				}else{
					redirect(base_url('data_penerbit'));
				}
			}	
		}		
		$data['title']				= 'Edit Data Penerbit';
		$data['edit_penerbit_values'] 	= $this->model_penerbit->edit_penerbit_value($id_penerbit);
		$data['penerbit'] = $this->model_penerbit->view_data_penerbit();
		$data['header'] 			= $this->load->view('headers/head', '', TRUE);
		$data['navigation'] 		= $this->load->view('headers/navigation', '', TRUE);
		$data['content'] 			= $this->load->view('forms/form_edit_data_penerbit', $data, TRUE);
		$data['footer'] 			= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);	
	}

	public function cari_penerbit(){
		$data = [];
		$data['title'] 		= 'Penerbit';
		$data['penerbit'] 	= $this->model_penerbit->view_data_penerbit();
		$data['footer']		= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('contents/view_cari_penerbit', $data);
	}

}

/* End of file Data_penerbit.php */
/* Location: ./application/controllers/Data_penerbit.php */