<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('model_setting');
		if ( !$this->session->userdata('username')) {
			redirect(base_url('login'));
		}		
	}

	public function index($idsetting = null){
		if( $this->input->post()){
			$this->form_validation->set_rules('nama_sekolah', 'Nama Sekolah', 'required|alpha_numeric_spaces');
			$this->form_validation->set_rules('alamat', 'Alamat', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('lama_pinjam', 'Lama Pinjam', 'required|numeric');
			$this->form_validation->set_rules('jumlah_max', 'Jumlah Maksimal Pinjam', 'required|numeric');
			$this->form_validation->set_rules('denda', 'Denda', 'required|numeric');
			$this->form_validation->set_rules('perpanjangan', 'Jumlah Perpanjangan', 'required|numeric');
			if ($this->form_validation->run() != false){
				$cont_to_model['nama_sekolah'] = $this->input->post('nama_sekolah');
				$cont_to_model['alamat'] = $this->input->post('alamat');
				$cont_to_model['email'] = $this->input->post('email');
				$cont_to_model['lama_pinjam'] = $this->input->post('lama_pinjam');
				$cont_to_model['jumlah_max'] = $this->input->post('jumlah_max');
				$cont_to_model['denda'] = $this->input->post('denda');
				$cont_to_model['perpanjangan'] = $this->input->post('perpanjangan');

				if($this->model_setting->view_setting()){
					if($this->model_setting->edit_setting($cont_to_model, $idsetting)){
						$message = '<div class="alert alert-success">Sistem dan Pengaturan berhasil diubah!</div>';
						$this->session->set_flashdata('message', $message);
					}else{
						$message = '<div class="alert alert-danger">Perubahan data Sistem dan Pengaturan gagal!</div>'; 
						$this->session->set_flashdata('message', $message);
					}
				}else{
					if($this->model_setting->tambah_setting($cont_to_model)){
						$message = '<div class="alert alert-success">Sistem dan Pengaturan berhasil ditambah!</div>';
						$this->session->set_flashdata('message', $message);
					}else{
						$message = '<div class="alert alert-danger">Penambahan data Sistem dan Pengaturan gagal!</div>'; 
						$this->session->set_flashdata('message', $message);
					}
				}
			}
		}
		$data['title'] 			= 'Sistem & Pengaturan';
		$data['header'] 		= $this->load->view('headers/head', '', TRUE);
		$data['navigation'] 	= $this->load->view('headers/navigation', '', TRUE);
		$data['setting']		= $this->model_setting->view_setting();
		$data['content'] 		= $this->load->view('contents/setting', $data, TRUE);
		$data['footer'] 		= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

}

/* End of file Setting.php */
/* Location: ./application/controllers/Setting.php */