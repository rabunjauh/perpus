<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_kategori extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('model_kategori');
		if (!$this->session->userdata('username')){
			redirect(base_url('login'));
		}
	}

	public function index(){
		$data = [];
		$data['title'] = 'Data Kategori';
		$data['header'] = $this->load->view('headers/head', '', TRUE);
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);
		$data['categories'] = $this->model_kategori->view_data_kategori();
		$data['content'] = $this->load->view('contents/view_data_kategori', $data, TRUE);
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	public function tambah_data_kategori(){

	}

}

/* End of file Data_kategori.php */
/* Location: ./application/controllers/Data_kategori.php */