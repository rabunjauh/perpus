<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('model_login');
		if ( $this->session->userdata('username') ) {
			$this->session->sess_destroy();
		}
	}

	public function index(){
		// periksa apakah tombol btn_login sudah ditekan
		if ( isset($_POST['btn_login']) ) {
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			if ($this->form_validation->run() !=false) {
				$form_info['username'] = $this->input->post('username');
				$form_info['password'] = $this->input->post('password');

				if ( $this->model_login->login($form_info) ) {
					redirect(base_url('data_buku'));
				}else{
					$message = '<div class="alert alert-danger"><p class="text-center">Username/Password is not correct!</p></div>';
					$this->session->set_flashdata('message', $message);
					redirect(base_url('login'));		
				}
			}
		}
		$data = [];
		$data['title'] = 'Login Page';
		$data['header'] = $this->load->view('headers/head', '', TRUE);
		$data['content'] = $this->load->view('forms/form_login', $data, TRUE);
		$data['kaki'] = $this->load->view('footers/footer', $data, TRUE);
		// $data['footer'] = 'footer';
		$this->load->view('main', $data); 
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */

