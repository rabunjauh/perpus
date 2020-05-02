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
	    $config['total_rows'] = $this->model_akun->count_accounts();
	    $config['per_page'] = '10';
	    $config['uri_segment'] = '3';
	    $this->pagination->initialize($config);

		$data['title'] 			= 'Kelola Data Akun';
		$data['header'] 		= $this->load->view('headers/head', '', TRUE);
		$data['navigation'] 	= $this->load->view('headers/navigation', '', TRUE);
		$data['akun'] 			= $this->model_akun->view_data_akun($config['per_page'], $this->uri->segment(3));
		$data['content'] 		= $this->load->view('contents/view_data_akun', $data, TRUE);
		$data['footer'] 		= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	public function tambah_data_akun(){
		if ( $this->input->post() ) {
			$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
			$this->form_validation->set_rules('no_induk', 'No Induk', 'required');
			$this->form_validation->set_rules('phone', 'No Handphone', 'required|min_length[11]|max_length[13]|numeric');
			$this->form_validation->set_rules('username', 'Username', 'required|is_unique[data_akun.username]');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required');
			$this->form_validation->set_rules('role', 'Role', 'required');
			$this->form_validation->set_rules('created_date', 'Created Date', 'required');
			if ($this->form_validation->run() !=false) {
				if($_POST["password"] !== $_POST["confirm_password"]){
					$message = '<div class="alert alert-success">password not match!</div>';
					$this->session->set_flashdata('message', $message);
				}else{
					$form_info = [];
					$form_info['nama_lengkap'] = $this->input->post('nama_lengkap', true);
					$form_info['no_induk'] = $this->input->post('no_induk', true);
					$form_info['phone'] = $this->input->post('phone', true);
					$form_info['username'] = $this->input->post('username', true);
					$form_info['password'] = $this->input->post('password', true);
					$form_info['role'] = $this->input->post('role', true);
					$form_info['created_date'] = $this->input->post('created_date', true);
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
		$data['title'] = 'Kelola Data Akun';
		$data['header'] = $this->load->view('headers/head', '', TRUE);
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);
		
		$data['content'] = $this->load->view('forms/form_tambah_data_akun', $data, TRUE);
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);	
 	}

 	public function edit_data_akun($id_akun){
		if (isset ($_POST['button_edit_akun'])) {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
			$this->form_validation->set_rules('no_induk', 'No Induk', 'required');
			$this->form_validation->set_rules('phone', 'No Handphone', 'required|min_length[11]|max_length[13]|numeric');
			$this->form_validation->set_rules('role', 'Role', 'required');
			if ($this->form_validation->run() != false){
			//value array sebelah kiri = hrs sesuai dengan nama kolom table database
			//value array sebelah kanan = hrs sesuai dengan nama input type form
			$form_info = [];
			$form_info['nama_lengkap'] = $this->input->post('nama_lengkap', true);
			$form_info['no_induk'] = $this->input->post('no_induk', true);
			$form_info['phone'] = $this->input->post('phone', true);
			$form_info['username'] = $this->input->post('username', true);
			$form_info['password'] = $this->input->post('password', true);
			$form_info['role'] = $this->input->post('role', true);
				if (!$this->model_akun->edit_data_akun($form_info, $id_akun)) {
					redirect(base_url('data_akun/edit_data_akun/' . $id_akun));
				}else{
					redirect(base_url('data_akun'));
				}
			}	
		}		
		$data['title']				= 'Edit Data Akun';
		$data['edit_akun_values'] 	= $this->model_akun->edit_akun_value($id_akun);
		$data['akun'] 				= $this->model_akun->view_data_akun();
		$data['roles'] 				= $this->model_akun->view_data_role();
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