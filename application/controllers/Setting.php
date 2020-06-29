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

	public function index(){
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