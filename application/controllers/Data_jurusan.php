<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_jurusan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('model_jurusan');
		$this->load->library('form_validation');
	}

	public function index(){
		$data = [];
		$data['title'] 			= 'Data jurusan';
		$data['header'] 		= $this->load->view('headers/head', '', TRUE);
		$data['navigation'] 	= $this->load->view('headers/navigation', '', TRUE);
		$data['jurusan'] 		= $this->model_jurusan->view_data_jurusan();
		$data['content'] 		= $this->load->view('contents/view_data_jurusan', $data, TRUE);
		$data['footer']			= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	public function tambah_data_jurusan(){
		if ( $this->input->post() ) {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('jurusan[]', 'jurusan', 'required|alpha_numeric_spaces');
			if ($this->form_validation->run() !=false) {				
				$jurusan = $this->input->post('jurusan', true);				
				for($i = 0; $i < sizeof($jurusan); $i++){
					$form_info = [];
					$form_info['jurusan'] = $jurusan[$i];
					if ( $this->model_jurusan->simpan_data_jurusan($form_info) ) {
						$message = '<div class="alert alert-success">jurusan berhasil ditambahkan!</div>';
						$this->session->set_flashdata('message', $message);
					}else{
						$message = '<div class="alert alert-danger">Penambahan data gagal!</div>';
						$this->session->set_flashdata('message', $message);	
					}
				}
			}
		}
		$data = [];
		$data['title'] 			= 'Tambah Data jurusan';
		$data['header'] 		= $this->load->view('headers/head', '', TRUE);
		$data['navigation'] 	= $this->load->view('headers/navigation', '', TRUE);
		$data['content'] 		= $this->load->view('forms/form_tambah_data_jurusan', $data, TRUE);
		$data['footer'] 		= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);	
 	}

 	public function edit_data_jurusan($id_jurusan){
		if (isset ($_POST['button_edit_jurusan'])) {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('jurusan', 'Nama jurusan', 'required|alpha_numeric_spaces');
			if ($this->form_validation->run() != false){
			//value array sebelah kiri = hrs sesuai dengan nama kolom table database
			//value array sebelah kanan = hrs sesuai dengan nama input type form
			$cont_to_model['jurusan'] = $this->input->post('jurusan');
				if (!$this->model_jurusan->edit_data_jurusan($cont_to_model, $id_jurusan)) {
					redirect(base_url('data_jurusan/edit_data_jurusan/' . $id_jurusan));
				}else{
					redirect(base_url('data_jurusan'));
				}
			}	
		}		
		$data['title']					= 'Edit Data jurusan';
		$data['edit_jurusan_values'] 	= $this->model_jurusan->edit_jurusan_value($id_jurusan);
		$data['jurusan'] 				= $this->model_jurusan->view_data_jurusan();
		$data['header'] 				= $this->load->view('headers/head', '', TRUE);
		$data['navigation'] 			= $this->load->view('headers/navigation', '', TRUE);
		$data['content'] 				= $this->load->view('forms/form_edit_data_jurusan', $data, TRUE);
		$data['footer'] 				= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);	
	}

	public function cari_jurusan(){
		$data = [];
		$data['title'] 		= 'jurusan';
		$data['jurusan'] 	= $this->model_jurusan->view_data_jurusan();
		$data['footer'] 	= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('contents/view_cari_jurusan', $data);
	}
}

/* End of file Data_jurusan.php */
/* Location: ./application/controllers/Data_jurusan.php */