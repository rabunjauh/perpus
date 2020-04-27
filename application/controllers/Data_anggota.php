<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_anggota extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('model_anggota');
		
	}

	public function index(){
		$this->load->helper('html');
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

	    $config["base_url"] = base_url() . "data_anggota/index";
	    $config['total_rows'] = $this->model_anggota->count_members();
	    $config['per_page'] = '10';
	    $config['uri_segment'] = '3';
	    $this->pagination->initialize($config);

		$data['title'] 			= 'Data Anggota';
		$data['header'] 		= $this->load->view('headers/head', '', TRUE);
		$data['navigation'] 	= $this->load->view('headers/navigation', '', TRUE);
		$data['anggota'] 		= $this->model_anggota->tampil_anggota($config['per_page'],  $this->uri->segment(3));
		$data['content'] 		= $this->load->view('contents/view_data_anggota', $data, TRUE);
		$data['footer'] 		= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	public function tambah_data_anggota(){

		// cek apakah ada data yang dikirim dari form_open()
		if ( $this->input->post() ){
			var_dump($_FILES);die;
			// load library form_validation
			$this->load->library('form_validation');
			// validasi user input
			$this->form_validation->set_rules('nama_anggota', 'Nama Lengkap', 'required|alpha_numeric_spaces');
			$this->form_validation->set_rules('no_induk', 'No Induk', 'required|alpha_numeric');
			$this->form_validation->set_rules('no_telepon', 'No Telepon', 'required|numeric|max_length[12]');
			// jalankan validasi jika false maka return error submit form exit
			if ($this->form_validation->run() != false){
				// jika validasi true
				// deklare array

				$config["nama_file"] = $_FILES["photo"]["name"];
				$config["ukuran_file"] = $_FILES["photo"]["size"];
				$config["error"] = $_FILES["photo"]["error"];
				$config["tmp_name"] = $_FILES["photo"]["tmp_name"];
				$config["valid_photo"] = ["jpg", "jpeg", "png"];

				$form_info['nama_anggota']		= $this->input->post('nama_anggota');
				$form_info['no_induk'] 			= $this->input->post('no_induk');
				$form_info['no_telepon'] 		= $this->input->post('no_telepon');
				$form_info['kelas'] 			= $this->input->post('kelas');
				$form_info['jurusan'] 			= $this->input->post('jurusan');
				// $form_info['username'] 			= $this->input->post('username');
				// $form_info['password'] 			= $this->input->post('password');
				// $form_info['confirm_password']	= $this->input->post('confirm_password');
				// mengirimkan array ke model_anggota->simpan_data_anggota
				if ( $this->model_anggota->simpan_data_anggota($form_info, $config) ) {
					$message = '<div class="alert alert-success">Anggota berhasil ditambahkan!</div>';
					$this->session->set_flashdata('message', $message);				
				}else{
					$message = '<div class="alert alert-danger">Penambahan data gagal!</div>'; 
					$this->session->set_flashdata('message', $message);
				}
			}			
		}

		$this->load->model('model_kelas');
		$this->load->model('model_jurusan');
		
		$data = [];
		$data['title'] 			= 'Tambah Data Anggota';
		$data['header'] 		= $this->load->view('headers/head', '', TRUE);
		$data['navigation'] 	= $this->load->view('headers/navigation', '', TRUE);
		$data['kelas'] 			= $this->model_kelas->view_data_kelas();
		$data['jurusan'] 		= $this->model_jurusan->view_data_jurusan();
		$data['navigation'] 	= $this->load->view('headers/navigation', '', TRUE);
		$data['content'] 		= $this->load->view('forms/form_tambah_data_anggota', $data, TRUE);
		$data['footer'] 		= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

}

/* End of file Data_user.php */
/* Location: ./application/controllers/Data_user.php */