<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_jurusan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('model_jurusan');
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

	    $config['total_rows'] = $this->model_jurusan->count_classes();
	    $config["base_url"] = base_url() . "data_jurusan/index";
	    $config['uri_segment'] = '3';
		$config['per_page'] = '10';
	    $this->pagination->initialize($config);

		$data = [];
		$data['title'] = 'Data Kelas';
		$data['header'] = $this->load->view('headers/head', '', TRUE);
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);
		$data['jurusan'] = $this->model_jurusan->view_data_jurusan($config['per_page'], $this->uri->segment(3));
		$data['no']	= $this->uri->segment(3);
		$data['result'] = $config['total_rows'];
		$data['content'] = $this->load->view('contents/view_data_jurusan', $data, TRUE);
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	public function search_jurusan($select_category=false, $txt_search =false){
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
	   		
   		$config['total_rows'] = $this->model_jurusan->count_classes('', '', $select_category, urldecode($txt_search));

   		if($txt_search){
			$config["base_url"] = base_url("data_jurusan/search_jurusan/" . $select_category . "/" . $txt_search);
   		}else{
   			$config["base_url"] = base_url("data_jurusan/search_jurusan/0/0");
		}

		if($txt_search === false){
			$config['uri_segment'] = '3';
		}else{
	    	$config['uri_segment'] = '5';
	    }

	    $config['per_page'] = '10';
	    $this->pagination->initialize($config);

		$data = [];
		$data['title'] = 'Data Kelas';
		$data['header'] = $this->load->view('headers/head', '', TRUE);
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);
		$data['jurusan'] = $this->model_jurusan->view_data_jurusan($config['per_page'], $this->uri->segment(5), $select_category, urldecode($txt_search));
		$data['no']	= $this->uri->segment(5);
		$data['result'] = $config['total_rows'];
		$data['content'] = $this->load->view('contents/view_data_jurusan', $data, TRUE);
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	public function tambah_data_jurusan(){
		if ( $this->input->post() ) {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('jurusan[]', 'Nama Kelas', 'required|alpha_numeric_spaces');
			if ($this->form_validation->run() !=false) {				
				$jurusan = $this->input->post('jurusan', true);				
				for($i = 0; $i < sizeof($jurusan); $i++){
					$form_info = [];
					$form_info['jurusan'] = $jurusan[$i];
					if ( $this->model_jurusan->simpan_data_jurusan($form_info) ) {
						$message = '<div class="alert alert-success">Data jurusan berhasil ditambahkan!</div>';
						$this->session->set_flashdata('message', $message);
					}else{
						$message = '<div class="alert alert-danger">Penambahan data gagal!</div>';
						$this->session->set_flashdata('message', $message);	
					}
				}
				redirect(base_url('data_jurusan'));
			}
		}
		$data = [];
		$data['title'] = 'Tambah Data Kelas';
		$data['header'] = $this->load->view('headers/head', '', TRUE);
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);
		$data['content'] = $this->load->view('forms/form_tambah_data_jurusan', $data, TRUE);
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);	
 	}

 	public function edit_data_jurusan($id_jurusan){
		if (isset ($_POST['button_edit_jurusan'])) {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('jurusan', 'Kelas', 'required');
			if ($this->form_validation->run() != false){
			//value array sebelah kiri = hrs sesuai dengan nama kolom table database
			//value array sebelah kanan = hrs sesuai dengan nama input type form
			var_dump($cont_to_model['jurusan'] 				= $this->input->post('jurusan'));
				if (!$this->model_jurusan->edit_data_jurusan($cont_to_model, $id_jurusan)) {
					$message = '<div class="alert alert-danger">Perubahan data gagal!</div>';
						$this->session->set_flashdata('message', $message);
					redirect(base_url('data_jurusan/edit_data_jurusan/' . $id_jurusan));
				}else{
					$message = '<div class="alert alert-success">Data jurusan berhasil diubah!</div>';
						$this->session->set_flashdata('message', $message);
					redirect(base_url('data_jurusan'));
				}
			}	
		}		
		$data['title']				= 'Edit Data Kelas';
		$data['edit_jurusan_values'] 	= $this->model_jurusan->edit_jurusan_value($id_jurusan);
		$data['jurusan'] = $this->model_jurusan->view_data_jurusan();
		$data['header'] 			= $this->load->view('headers/head', '', TRUE);
		$data['navigation'] 		= $this->load->view('headers/navigation', '', TRUE);
		$data['content'] 			= $this->load->view('forms/form_edit_data_jurusan', $data, TRUE);
		$data['footer'] 			= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);	
	}

	public function cari_jurusan(){
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

	    $config['total_rows'] = $this->model_jurusan->count_classes();
	    $config["base_url"] = base_url() . "data_jurusan/cari_jurusan";
	    $config['uri_segment'] = '3';
		$config['per_page'] = '10';
	    $this->pagination->initialize($config);

		$data = [];
		$data['title'] = 'Kelas';
		$data['header'] 			= $this->load->view('headers/head', '', TRUE);
		$data['no']	= $this->uri->segment(3);
		$data['result'] = $config['total_rows'];
		$data['jurusan'] = $this->model_jurusan->view_data_jurusan($config['per_page'], $this->uri->segment(3));
		$data['footer'] 			= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('contents/view_cari_jurusan', $data);
	}

	public function search_jurusan_cari($select_category=false, $txt_search =false){
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
	   		
   		$config['total_rows'] = $this->model_jurusan->count_classes('', '', $select_category, urldecode($txt_search));

   		if($txt_search){
			$config["base_url"] = base_url("data_jurusan/search_jurusan_cari/" . $select_category . "/" . $txt_search);
   		}else{
   			$config["base_url"] = base_url("data_jurusan/search_jurusan_cari/0/0");
		}

		if($txt_search === false){
			$config['uri_segment'] = '3';
		}else{
	    	$config['uri_segment'] = '5';
	    }

	    $config['per_page'] = '10';
	    $this->pagination->initialize($config);

		$data = [];
		$data['title'] 			= 'Kelas';
		$data['header'] 		= $this->load->view('headers/head', '', TRUE);
		$data['navigation'] 	= $this->load->view('headers/navigation', '', TRUE);
		$data['jurusan'] 		= $this->model_jurusan->view_data_jurusan($config['per_page'],  $this->uri->segment(5), $select_category, urldecode($txt_search));
		$data['no']	= $this->uri->segment(5);
		$data['result'] = $config['total_rows'];
		$data['footer'] 		= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('contents/view_cari_jurusan', $data);
	}

	public function delete_jurusan($id_jurusan){
		if(!$this->model_jurusan->delete_jurusan($id_jurusan)){
			$message = '<div class="alert alert-danger"Data jurusan gagal dihapus!</div>';
			$this->session->set_flashdata('message', $message);
			redirect(base_url('data_jurusan'));
		}else{
			$message = '<div class="alert alert-success">Data jurusan berhasil dihapus!</div>';
			$this->session->set_flashdata('message', $message);
			redirect(base_url('data_jurusan'));
		}
	}

}

/* End of file Data_jurusan.php */
/* Location: ./application/controllers/Data_jurusan.php */