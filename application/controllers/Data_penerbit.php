<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_penerbit extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('model_penerbit');
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

	    $config['total_rows'] = $this->model_penerbit->count_publishers();
	    $config["base_url"] = base_url() . "data_penerbit/index";
	    $config['uri_segment'] = '3';
		$config['per_page'] = '10';
	    $this->pagination->initialize($config);

		$data = [];
		$data['title'] = 'Data Penerbit';
		$data['header'] = $this->load->view('headers/head', '', TRUE);
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);
		$data['penerbit'] = $this->model_penerbit->view_data_penerbit($config['per_page'], $this->uri->segment(3));
		$data['no']	= $this->uri->segment(3);
		$data['result'] = $config['total_rows'];
		$data['content'] = $this->load->view('contents/view_data_penerbit', $data, TRUE);
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	public function search_penerbit($select_category=false, $txt_search =false){
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
	   		
   		$config['total_rows'] = $this->model_penerbit->count_publishers('', '', $select_category, urldecode($txt_search));

   		if($txt_search){
			$config["base_url"] = base_url("data_penerbit/search_penerbit/" . $select_category . "/" . $txt_search);
   		}else{
   			$config["base_url"] = base_url("data_penerbit/search_penerbit/0/0");
		}

		if($txt_search === false){
			$config['uri_segment'] = '3';
		}else{
	    	$config['uri_segment'] = '5';
	    }

	    $config['per_page'] = '10';
	    $this->pagination->initialize($config);

		$data = [];
		$data['title'] = 'Data Penerbit';
		$data['header'] = $this->load->view('headers/head', '', TRUE);
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);
		$data['penerbit'] = $this->model_penerbit->view_data_penerbit($config['per_page'], $this->uri->segment(5), $select_category, urldecode($txt_search));
		$data['no']	= $this->uri->segment(5);
		$data['result'] = $config['total_rows'];
		$data['content'] = $this->load->view('contents/view_data_penerbit', $data, TRUE);
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	public function tambah_data_penerbit(){
		if ( $this->input->post() ) {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nama_penerbit[]', 'Nama Penerbit', 'required|alpha_numeric_spaces');
			if ($this->form_validation->run() !=false) {				
				$penerbit = $this->input->post('nama_penerbit', true);				
				for($i = 0; $i < sizeof($penerbit); $i++){
					$form_info = [];
					$form_info['nama_penerbit'] = $penerbit[$i];
					if ( $this->model_penerbit->simpan_data_penerbit($form_info) ) {
						$message = '<div class="alert alert-success">Penerbit berhasil ditambahkan!</div>';
						$this->session->set_flashdata('message', $message);
					}else{
						$message = '<div class="alert alert-danger">Penambahan data gagal!</div>';
						$this->session->set_flashdata('message', $message);	
					}
				}
				redirect(base_url('data_penerbit'));
			}
		}
		$data = [];
		$data['title'] = 'Tambah Data Penerbit';
		$data['header'] = $this->load->view('headers/head', '', TRUE);
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);
		$data['content'] = $this->load->view('forms/form_tambah_data_penerbit', $data, TRUE);
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);	
 	}

 	public function edit_data_penerbit($id_penerbit){
		if (isset ($_POST['button_edit_penerbit'])) {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('nama_penerbit', 'Nama penerbit', 'required');
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

	    $config['total_rows'] = $this->model_penerbit->count_publishers();
	    $config["base_url"] = base_url() . "data_penerbit/cari_penerbit";
	    $config['uri_segment'] = '3';
		$config['per_page'] = '10';
	    $this->pagination->initialize($config);

		$data = [];
		$data['title'] = 'penerbit';
		$data['header'] 			= $this->load->view('headers/head', '', TRUE);
		$data['no']	= $this->uri->segment(3);
		$data['result'] = $config['total_rows'];
		$data['penerbit'] = $this->model_penerbit->view_data_penerbit($config['per_page'], $this->uri->segment(3));
		$data['footer'] 			= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('contents/view_cari_penerbit', $data);
	}

	public function search_penerbit_cari($select_category=false, $txt_search =false){
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
	   		
   		$config['total_rows'] = $this->model_penerbit->count_publishers('', '', $select_category, urldecode($txt_search));

   		if($txt_search){
			$config["base_url"] = base_url("data_penerbit/search_penerbit_cari/" . $select_category . "/" . $txt_search);
   		}else{
   			$config["base_url"] = base_url("data_penerbit/search_penerbit_cari/0/0");
		}

		if($txt_search === false){
			$config['uri_segment'] = '3';
		}else{
	    	$config['uri_segment'] = '5';
	    }

	    $config['per_page'] = '10';
	    $this->pagination->initialize($config);

		$data = [];
		$data['title'] 			= 'penerbit';
		$data['header'] 		= $this->load->view('headers/head', '', TRUE);
		$data['navigation'] 	= $this->load->view('headers/navigation', '', TRUE);
		$data['penerbit'] 		= $this->model_penerbit->view_data_penerbit($config['per_page'],  $this->uri->segment(5), $select_category, urldecode($txt_search));
		$data['no']	= $this->uri->segment(5);
		$data['result'] = $config['total_rows'];
		$data['footer'] 		= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('contents/view_cari_penerbit', $data);
	}

	public function delete_penerbit($id_penerbit){
		if(!$this->model_penerbit->delete_penerbit($id_penerbit)){
			$message = '<div class="alert alert-danger">penerbit gagal dihapus!</div>';
			$this->session->set_flashdata('message', $message);
			redirect(base_url('data_penerbit'));
		}else{
			$message = '<div class="alert alert-success">penerbit berhasil dihapus!</div>';
			$this->session->set_flashdata('message', $message);
			redirect(base_url('data_penerbit'));
		}
	}

}

/* End of file Data_penerbit.php */
/* Location: ./application/controllers/Data_penerbit.php */