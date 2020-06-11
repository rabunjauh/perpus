<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pengarang extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('model_pengarang');
		$this->load->library('form_validation');
		if(!$this->session->userdata('username')){
			redirect(base_url('login'));
		}
	}

	public function index(){
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

	    $config['total_rows'] = $this->model_pengarang->count_authors();
	    $config["base_url"] = base_url() . "data_pengarang/index";
	    $config['uri_segment'] = '3';
		$config['per_page'] = '10';
	    $this->pagination->initialize($config);

		$data = [];
		$data['title'] = 'Data Pengarang';
		$data['header'] = $this->load->view('headers/head', '', TRUE);
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);
		$data['pengarang'] = $this->model_pengarang->view_data_pengarang($config['per_page'], $this->uri->segment(3));
		$data['no']	= $this->uri->segment(3);
		$data['result'] = $config['total_rows'];
		$data['content'] = $this->load->view('contents/view_data_pengarang', $data, TRUE);
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	public function search_pengarang($select_category=false, $txt_search =false){
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
	   		
   		$config['total_rows'] = $this->model_pengarang->count_authors('', '', $select_category, urldecode($txt_search));

   		if($txt_search){
			$config["base_url"] = base_url("data_pengarang/search_pengarang/" . $select_category . "/" . $txt_search);
   		}else{
   			$config["base_url"] = base_url("data_pengarang/search_pengarang/0/0");
		}

		if($txt_search === false){
			$config['uri_segment'] = '3';
		}else{
	    	$config['uri_segment'] = '5';
	    }

	    $config['per_page'] = '10';
	    $this->pagination->initialize($config);

		$data = [];
		$data['title'] = 'Data Pengarang';
		$data['header'] = $this->load->view('headers/head', '', TRUE);
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);
		$data['pengarang'] = $this->model_pengarang->view_data_pengarang($config['per_page'], $this->uri->segment(5), $select_category, urldecode($txt_search));
		$data['no']	= $this->uri->segment(5);
		$data['result'] = $config['total_rows'];
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

	    $config['total_rows'] = $this->model_pengarang->count_authors();
	    $config["base_url"] = base_url() . "data_pengarang/cari_pengarang";
	    $config['uri_segment'] = '3';
		$config['per_page'] = '10';
	    $this->pagination->initialize($config);

		$data = [];
		$data['title'] = 'Pengarang';
		$data['header'] 			= $this->load->view('headers/head', '', TRUE);
		$data['no']	= $this->uri->segment(3);
		$data['result'] = $config['total_rows'];
		$data['pengarang'] = $this->model_pengarang->view_data_pengarang($config['per_page'], $this->uri->segment(3));
		$data['footer'] 			= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('contents/view_cari_pengarang', $data);
	}

	public function search_pengarang_cari($select_category=false, $txt_search =false){
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
	   		
   		$config['total_rows'] = $this->model_pengarang->count_authors('', '', $select_category, urldecode($txt_search));

   		if($txt_search){
			$config["base_url"] = base_url("data_pengarang/search_pengarang_cari/" . $select_category . "/" . $txt_search);
   		}else{
   			$config["base_url"] = base_url("data_pengarang/search_pengarang_cari/0/0");
		}

		if($txt_search === false){
			$config['uri_segment'] = '3';
		}else{
	    	$config['uri_segment'] = '5';
	    }

	    $config['per_page'] = '10';
	    $this->pagination->initialize($config);

		$data = [];
		$data['title'] 			= 'Pengarang';
		$data['header'] 		= $this->load->view('headers/head', '', TRUE);
		$data['navigation'] 	= $this->load->view('headers/navigation', '', TRUE);
		$data['pengarang'] 		= $this->model_pengarang->view_data_pengarang($config['per_page'],  $this->uri->segment(5), $select_category, urldecode($txt_search));
		$data['no']	= $this->uri->segment(5);
		$data['result'] = $config['total_rows'];
		$data['footer'] 		= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('contents/view_cari_pengarang', $data);
	}

	public function get_pengarang(){
		echo "ok";
	}

}

/* End of file Data_pengarang.php */
/* Location: ./application/controllers/Data_pengarang.php */