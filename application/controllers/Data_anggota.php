<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_anggota extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('model_anggota');
		$this->load->model('model_kelas');
		$this->load->model('model_jurusan');
		if(!$this->session->userdata('username')){
			redirect(base_url('login'));
		}
	}

	public function index(){
		// $this->load->helper('html');
		$data = [];
		$config['full_tag_open'] = '<nav><ul class="pagination">';
	    $config['full_tag_close'] = '</ul></nav>';

	    $config['num_tag_open'] = '<li class="page-item">';
	    $config['num_tag_close'] = '</li>';

	    $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
	    $config['cur_tag_close'] = '</a><span class="sr-only">(current)</span></span></li>';

	    $config['prev_tag_open'] = '<li class="page-item">';
	    $config['prev_tag_close'] = '</li>';

	    $config['next_tag_open'] = '<li class="page-item">';
	    $config['next_tag_close'] = '</li>';

	    $config['first_link'] = 'First';
	    $config['prev_link'] = 'Previous';
	    $config['last_link'] = 'Last';
	    $config['next_link'] = 'Next';

	    $config['first_tag_open'] = '<li class="page-item">';
	    $config['first_tag_close'] = '</li>';
	    $config['last_tag_open'] = '<li class="page-item">';
	    $config['last_tag_close'] = '</li>';
		$config['attributes'] = array('class' => 'page-link');
	   		
 		$config['total_rows'] = $this->model_anggota->count_members();
		$config["base_url"] = base_url() . "data_anggota/index";
	    $config['uri_segment'] = '3';
	    $config['per_page'] = '10';
	    $this->pagination->initialize($config);

		$data['title'] 			= 'Data Anggota';
		$data['header'] 		= $this->load->view('headers/head', '', TRUE);
		$data['navigation'] 	= $this->load->view('headers/navigation', '', TRUE);
		$data['anggota'] 		= $this->model_anggota->tampil_anggota($config['per_page'],  $this->uri->segment(3));
		$data['no']	= $this->uri->segment(3);
		$data['result'] = $config['total_rows'];
		$data['content'] 		= $this->load->view('contents/view_data_anggota', $data, TRUE);
		$data['footer'] 		= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	public function search_anggota($select_category="0", $txt_search ="0"){
		// $this->load->helper('html');
		if (!$select_category AND !$txt_search) {
			$select_category = $this->input->post('select_category');
			$txt_search = htmlspecialchars($this->input->post('txt_search'));
		}
		$config['full_tag_open'] = '<nav><ul class="pagination">';
	    $config['full_tag_close'] = '</ul></nav>';

	    $config['num_tag_open'] = '<li class="page-item">';
	    $config['num_tag_close'] = '</li>';

	    $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
	    $config['cur_tag_close'] = '</a><span class="sr-only">(current)</span></span></li>';

	    $config['prev_tag_open'] = '<li class="page-item">';
	    $config['prev_tag_close'] = '</li>';

	    $config['next_tag_open'] = '<li class="page-item">';
	    $config['next_tag_close'] = '</li>';

	    $config['first_link'] = 'First';
	    $config['prev_link'] = 'Previous';
	    $config['last_link'] = 'Last';
	    $config['next_link'] = 'Next';

	    $config['first_tag_open'] = '<li class="page-item">';
	    $config['first_tag_close'] = '</li>';
	    $config['last_tag_open'] = '<li class="page-item">';
	    $config['last_tag_close'] = '</li>';
		$config['attributes'] = array('class' => 'page-link');
	   		
   		$config['total_rows'] = $this->model_anggota->count_members_search($select_category, urldecode($txt_search));

   		if($select_category OR $txt_search){
			$config["base_url"] = base_url("data_anggota/search_anggota/" . $select_category . "/" . $txt_search);
   		}else{
   			$config["base_url"] = base_url("data_anggota/search_anggota/0/0");
		}

		if($txt_search === false){
			$config['uri_segment'] = '3';
		}else{
	    	$config['uri_segment'] = '5';
	    }

	    $config['per_page'] = '10';
	    $this->pagination->initialize($config);

		$data = [];
		$data['title'] 			= 'Data Anggota';
		$data['header'] 		= $this->load->view('headers/head', '', TRUE);
		$data['navigation'] 	= $this->load->view('headers/navigation', '', TRUE);
		$data['anggota'] 		= $this->model_anggota->tampil_anggota_search($config['per_page'],  $this->uri->segment(5), $select_category, urldecode($txt_search));
		$data['no']	= $this->uri->segment(5);
		$data['result'] = $config['total_rows'];
		$data['content'] 		= $this->load->view('contents/view_data_anggota', $data, TRUE);
		$data['footer'] 		= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	public function tambah_data_anggota(){

		// cek apakah ada data yang dikirim dari form_open()
		if ( $this->input->post() ){
			// load library form_validation
			$this->load->library('form_validation');
			// validasi user input
			$this->form_validation->set_rules('nama_anggota', 'Nama Lengkap', 'required|alpha_numeric_spaces');
			$this->form_validation->set_rules('no_induk', 'No Induk', 'required|alpha_numeric');
			$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
			$this->form_validation->set_rules('no_telepon', 'No Telepon', 'required|numeric|max_length[12]');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			// jalankan validasi jika false maka return error submit form exit
			if ($this->form_validation->run() != false){
				// jika validasi true
				// deklare array

				// $config["nama_file"] = $_FILES["photo"]["name"];
				// $config["ukuran_file"] = $_FILES["photo"]["size"];
				// $config["error"] = $_FILES["photo"]["error"];
				// $config["tmp_name"] = $_FILES["photo"]["tmp_name"];
				// $config["valid_photo"] = ["jpg", "jpeg", "png"];

				$form_info['nama_anggota']		= $this->input->post('nama_anggota');
				$form_info['no_induk'] 			= $this->input->post('no_induk');
				$form_info['no_telepon'] 		= $this->input->post('no_telepon');
				$form_info['email'] 		= $this->input->post('email');
				$form_info['kelas'] 			= $this->input->post('kelas');
				$form_info['jurusan'] 			= $this->input->post('jurusan');
				$form_info['jenis_kelamin'] 			= $this->input->post('jenis_kelamin');
				$form_info['tanggal_daftar'] 			= $this->input->post('tanggal_daftar');
				// $form_info['username'] 			= $this->input->post('username');
				// $form_info['password'] 			= $this->input->post('password');
				// $form_info['confirm_password']	= $this->input->post('confirm_password');
				// mengirimkan array ke model_anggota->simpan_data_anggota
				if ( $this->model_anggota->simpan_data_anggota($form_info) ) {
					$message = '<div class="alert alert-success">Data anggota berhasil ditambahkan!</div>';
					$this->session->set_flashdata('message', $message);				
				}else{
					$message = '<div class="alert alert-danger">Penambahan data gagal!</div>'; 
					$this->session->set_flashdata('message', $message);
				}
			}			
		}		
		
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

	public function edit_data_anggota($id_anggota){
		if ( isset($_POST["button_edit_anggota"]) ){
			// var_dump($_POST);die;
			// load library form_validation
			$this->load->library('form_validation');
			// validasi user input
			$this->form_validation->set_rules('nama_anggota', 'Nama Lengkap', 'required|alpha_numeric_spaces');
			$this->form_validation->set_rules('no_induk', 'No Induk', 'required|alpha_numeric');
			$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
			$this->form_validation->set_rules('no_telepon', 'No Telepon', 'required|numeric|max_length[12]');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			// jalankan validasi jika false maka return error submit form exit
			if ($this->form_validation->run() != false){
				// jika validasi true
				// deklare array

				// $config["nama_file"] = $_FILES["photo"]["name"];
				// $config["ukuran_file"] = $_FILES["photo"]["size"];
				// $config["error"] = $_FILES["photo"]["error"];
				// $config["tmp_name"] = $_FILES["photo"]["tmp_name"];
				// $config["valid_photo"] = ["jpg", "jpeg", "png"];

				$form_info['nama_anggota']		= $this->input->post('nama_anggota');
				$form_info['no_induk'] 			= $this->input->post('no_induk');
				$form_info['no_telepon'] 		= $this->input->post('no_telepon');
				$form_info['email'] 		= $this->input->post('email');
				$form_info['kelas'] 			= $this->input->post('kelas');
				$form_info['jurusan'] 			= $this->input->post('jurusan');
				$form_info['jenis_kelamin'] 			= $this->input->post('jenis_kelamin');
				// $form_info['username'] 			= $this->input->post('username');
				// $form_info['password'] 			= $this->input->post('password');
				// $form_info['confirm_password']	= $this->input->post('confirm_password');
				// mengirimkan array ke model_anggota->simpan_data_anggota
				if ( $this->model_anggota->edit_data_anggota($form_info, $id_anggota) ) {
					$message = '<div class="alert alert-success">Data anggota berhasil diupdate!</div>';
					$this->session->set_flashdata('message', $message);				
				}else{
					$message = '<div class="alert alert-danger">Perubahan data gagal!</div>'; 
					$this->session->set_flashdata('message', $message);
				}
			}			
		}
		$data = [];
		$data['title'] 			= 'Edit Data Anggota';
		$data['header'] 		= $this->load->view('headers/head', '', TRUE);
		$data['navigation'] 	= $this->load->view('headers/navigation', '', TRUE);
		$data['edit_member_values'] 			= $this->model_anggota->edit_member_values($id_anggota);
		$data['kelas'] 			= $this->model_kelas->view_data_kelas();
		$data['jurusan'] 		= $this->model_jurusan->view_data_jurusan();
		$data['navigation'] 	= $this->load->view('headers/navigation', '', TRUE);
		$data['content'] 		= $this->load->view('forms/form_edit_data_anggota', $data, TRUE);
		$data['footer'] 		= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	public function delete_anggota($id_anggota){
		if(!$this->model_anggota->delete_anggota($id_anggota)){
			$message = '<div class="alert alert-danger">anggota gagal dihapus!</div>';
			$this->session->set_flashdata('message', $message);
			redirect(base_url('data_anggota'));
		}else{
			$message = '<div class="alert alert-success">anggota berhasil dihapus!</div>';
			$this->session->set_flashdata('message', $message);
			redirect(base_url('data_anggota'));
		}
	}

	public function cari_anggota(){
		$config = [];

		$config['full_tag_open'] = '<nav><ul class="pagination">';
	    $config['full_tag_close'] = '</ul></nav>';

	    $config['num_tag_open'] = '<li class="page-item">';
	    $config['num_tag_close'] = '</li>';

	    $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
	    $config['cur_tag_close'] = '</a><span class="sr-only">(current)</span></span></li>';

	    $config['prev_tag_open'] = '<li class="page-item">';
	    $config['prev_tag_close'] = '</li>';

	    $config['next_tag_open'] = '<li class="page-item">';
	    $config['next_tag_close'] = '</li>';

	    $config['first_link'] = 'First';
	    $config['prev_link'] = 'Previous';
	    $config['last_link'] = 'Last';
	    $config['next_link'] = 'Next';

	    $config['first_tag_open'] = '<li class="page-item">';
	    $config['first_tag_close'] = '</li>';
	    $config['last_tag_open'] = '<li class="page-item">';
	    $config['last_tag_close'] = '</li>';
		$config['attributes'] = array('class' => 'page-link');

	    $config['total_rows'] = $this->model_anggota->count_members();
	    $config["base_url"] = base_url() . "data_anggota/cari_anggota";
	    $config['uri_segment'] = '3';
		$config['per_page'] = '10';
	    $this->pagination->initialize($config);

		$data = [];
		$data['title'] = 'Anggota';
		$data['header'] 			= $this->load->view('headers/head', '', TRUE);
		$data['anggota'] = $this->model_anggota->tampil_anggota($config['per_page'], $this->uri->segment(3));
		$data['no']	= $this->uri->segment(3);
		$data['result'] = $config['total_rows'];
		$data['footer'] 			= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('contents/view_cari_anggota', $data);
	}

	public function search_anggota_cari($select_category="0", $txt_search ="0"){
		// $this->load->helper('html');
		if (!$select_category AND !$txt_search) {
			$select_category = $this->input->post('select_category');
			$txt_search = htmlspecialchars($this->input->post('txt_search'));
		}
		$config['full_tag_open'] = '<nav><ul class="pagination">';
	    $config['full_tag_close'] = '</ul></nav>';

	    $config['num_tag_open'] = '<li class="page-item">';
	    $config['num_tag_close'] = '</li>';

	    $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
	    $config['cur_tag_close'] = '</a><span class="sr-only">(current)</span></span></li>';

	    $config['prev_tag_open'] = '<li class="page-item">';
	    $config['prev_tag_close'] = '</li>';

	    $config['next_tag_open'] = '<li class="page-item">';
	    $config['next_tag_close'] = '</li>';

	    $config['first_link'] = 'First';
	    $config['prev_link'] = 'Previous';
	    $config['last_link'] = 'Last';
	    $config['next_link'] = 'Next';

	    $config['first_tag_open'] = '<li class="page-item">';
	    $config['first_tag_close'] = '</li>';
	    $config['last_tag_open'] = '<li class="page-item">';
	    $config['last_tag_close'] = '</li>';
		$config['attributes'] = array('class' => 'page-link');
	   		
   		$config['total_rows'] = $this->model_anggota->count_members_search($select_category, urldecode($txt_search));

   		if($txt_search){
			$config["base_url"] = base_url("data_anggota/search_anggota_cari/" . $select_category . "/" . $txt_search);
   		}else{
   			$config["base_url"] = base_url("data_anggota/search_anggota_cari/0/0");
		}

		if($txt_search === false){
			$config['uri_segment'] = '3';
		}else{
	    	$config['uri_segment'] = '5';
	    }

	    $config['per_page'] = '10';
	    $this->pagination->initialize($config);

		$data = [];
		$data['title'] 			= 'Data Anggota';
		$data['header'] 		= $this->load->view('headers/head', '', TRUE);
		$data['navigation'] 	= $this->load->view('headers/navigation', '', TRUE);
		$data['anggota'] 		= $this->model_anggota->tampil_anggota_search($config['per_page'],  $this->uri->segment(5), $select_category, urldecode($txt_search));
		$data['no']	= $this->uri->segment(5);
		$data['result'] = $config['total_rows'];
		$data['footer'] 		= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('contents/view_cari_anggota', $data);
	}

}

/* End of file Data_user.php */
/* Location: ./application/controllers/Data_user.php */