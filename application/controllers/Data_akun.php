<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_akun extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('model_akun');
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

	    $config['total_rows'] = $this->model_akun->count_accounts();
	    $config["base_url"] = base_url() . "data_akun/index";
	    $config['uri_segment'] = '3';
		$config['per_page'] = '10';

	    $this->pagination->initialize($config);
		$data = [];
	    $data['title'] 			= 'Kelola Data Akun';
		$data['header'] 		= $this->load->view('headers/head', '', TRUE);
		$data['navigation'] 	= $this->load->view('headers/navigation', '', TRUE);
		$data['akun'] 			= $this->model_akun->view_data_akun($config['per_page'], $this->uri->segment(3));
		$data['no']	= $this->uri->segment(3);
		$data['result'] = $config['total_rows'];
		$data['content'] 		= $this->load->view('contents/view_data_akun', $data, TRUE);
		$data['footer'] 		= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);		
	}

	public function search_akun($select_category = false, $txt_search = false){
		if (!$select_category AND !$txt_search) {
			$select_category = $this->input->post('select_category');
			$txt_search = htmlspecialchars($this->input->post('txt_search'));
		}
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

	    $config['total_rows'] = $this->model_akun->count_accounts('','',$select_category, urldecode($txt_search));
	    
	    if($select_category OR $txt_search){
			$config["base_url"] = base_url("data_akun/search_akun/" . $select_category . "/" . $txt_search);
   		}else{
   			$config["base_url"] = base_url("data_akun/search_akun/0/0");
		}

		if($txt_search === false){
			$config['uri_segment'] = '3';
		}else{
	    	$config['uri_segment'] = '5';
	    }

	    // $config["base_url"] = base_url("data_akun/search_akun/" . $select_category . "/" . $txt_search);
	    // // $config['total_rows'] = "14";
	    // $config['uri_segment'] = '5';

		$config['per_page'] = '10';

    $this->pagination->initialize($config);
		$data = [];
    $data['title'] 			= 'Kelola Data Akun';
		$data['header'] 		= $this->load->view('headers/head', '', TRUE);
		$data['navigation'] 	= $this->load->view('headers/navigation', '', TRUE);
		$data['akun'] 			= $this->model_akun->view_data_akun($config['per_page'], $this->uri->segment(5), $select_category, urldecode($txt_search));
		$data['no']	= $this->uri->segment(5);
		$data['result'] = $config['total_rows'];
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
						redirect(base_url('data_akun'));
					}else{
						$message = '<div class="alert alert-danger">Penambahan data gagal!</div>';
						$this->session->set_flashdata('message', $message);	
					}
				}				
			}
		}
		$data = [];
		$data['title'] = 'Tambah Data Akun';
		$data['header'] = $this->load->view('headers/head', '', TRUE);
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);		
		$data['content'] = $this->load->view('forms/form_tambah_data_akun', $data, TRUE);
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);	
 	}

 	public function edit_data_akun($id_akun){
		if (isset ($_POST['button_edit_akun'])) {
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
			$form_info['role'] = $this->input->post('role', true);
			// $form_info['created_date'] = $this->input->post('created_date', true);
				if (!$this->model_akun->edit_data_akun($form_info, $id_akun)) {
					$message = '<div class="alert alert-danger">Edit data gagal!</div>';
						$this->session->set_flashdata('message', $message);
					redirect(base_url('data_akun/edit_data_akun/' . $id_akun));
				}else{
					$message = '<div class="alert alert-success">Akun berhasil diupdate!</div>';
					$this->session->set_flashdata('message', $message);
					redirect(base_url('data_akun'));
				}
			}	
		}		
		$data['title']				= 'Edit Data Akun';
		$data['edit_akun_values'] 	= $this->model_akun->edit_akun_value($id_akun);
		// $data['akun'] 				= $this->model_akun->view_data_akun();
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

	public function reset_password($id_akun){
		if(isset ($_POST['btn_reset_password'])){
			$this->form_validation->set_rules('new_password', 'New Password', 'required');
			$this->form_validation->set_rules('confirm_new_password', 'Confirm New Password', 'required');
			if($this->input->post('new_password') !== $this->input->post('confirm_new_password')){
				$message = '<div class="alert alert-success">Password not match!</div>';
				$this->session->set_flashdata('message', $message);
			}else{
				$form_info['new_password'] = $this->input->post('new_password', true);
			
				if(!$this->model_akun->reset_password($form_info, $id_akun)){
					$message = '<div class="alert alert-danger">Reseting password failed!</div>';
					$this->session->set_flashdata('message', $message);
					redirect(base_url('data_akun/reset_password/' . $id_akun));
				}else{
					$message = '<div class="alert alert-success">Reseting password success!</div>';
					$this->session->set_flashdata('message', $message);
					redirect(base_url('data_akun/'));
				}	
			}
		}
		$data = [];
		$data['title'] = 'Reset Password';
		$data['header'] = $this->load->view('headers/head', '', TRUE);
		$data['navigation'] 		= $this->load->view('headers/navigation', '', TRUE);
		$data['edit_akun_values'] = $this->model_akun->edit_akun_value($id_akun);
		$data['content'] 			= $this->load->view('forms/form_reset_password', $data, TRUE);
		$data['footer'] 			= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	public function change_password($id_akun){
		if(isset ($_POST['btn_change_password'])){
			// var_dump($_POST);die;
			$this->form_validation->set_rules('old_password', 'Old Password', 'required');
			$this->form_validation->set_rules('new_password', 'New Password', 'required');
			$this->form_validation->set_rules('confirm_new_password', 'Confirm New Password', 'required');
			$old_password = sha1($this->input->post('old_password', true));
			$new_password = sha1($this->input->post('new_password', true));
			$form_info['new_password'] = $new_password;

			if($this->input->post('new_password') !== $this->input->post('confirm_new_password')){
				$message = '<div class="alert alert-success">New Password not match!</div>';
				$this->session->set_flashdata('message', $message);
				redirect(base_url('data_akun/change_password/' . $id_akun));

			}

			if($old_password !== $this->input->post('verify_old_password')){
				$message = '<div class="alert alert-danger">Old password not match!</div>';
				$this->session->set_flashdata('message', $message);
				redirect(base_url('data_akun/change_password/' . $id_akun));
			}

			if($new_password == $old_password){
				$message = '<div class="alert alert-danger">You can not use your old password for new password!</div>';
				$this->session->set_flashdata('message', $message);
				redirect(base_url('data_akun/change_password/' . $id_akun));
			}

		
			if(!$this->model_akun->change_password($form_info, $id_akun)){
				$message = '<div class="alert alert-danger">Changing password failed!</div>';
				$this->session->set_flashdata('message', $message);
				redirect(base_url('data_akun/change_password/' . $id_akun));
			}else{
				$message = '<div class="alert alert-success">Changing password success!</div>';
				$this->session->set_flashdata('message', $message);
				redirect(base_url('data_akun/'));
			}	
			
		}
		$data = [];
		$data['title'] = 'Ganti Password';
		$data['header'] = $this->load->view('headers/head', '', TRUE);
		$data['navigation'] 		= $this->load->view('headers/navigation', '', TRUE);
		$data['edit_akun_values'] 	= $this->model_akun->edit_akun_value($id_akun);
		$data['content'] 			= $this->load->view('forms/form_change_password', $data, TRUE);
		$data['footer'] 			= $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	public function delete_akun($id_akun){
		if(!$this->model_akun->delete_akun($id_akun)){
			$message = '<div class="alert alert-danger">Akun gagal dihapus!</div>';
			$this->session->set_flashdata('message', $message);
			redirect(base_url('data_akun'));
		}else{
			$message = '<div class="alert alert-success">Akun berhasil dihapus!</div>';
			$this->session->set_flashdata('message', $message);
			redirect(base_url('data_akun'));
		}
	}
	// public function index(){
	// 	$data = [];
	// 	$config = [];
	//     $config["base_url"] = base_url() . "data_akun/index";
	//     $config['uri_segment'] = '3';
	// 	$config['per_page'] = '10';

	// 	if($this->input->post()){
	// 		$select_category = $this->input->post('selCategory');
	// 		$txt_search = htmlspecialchars($this->input->post('txtSearch'));
	// 		$this->session->set_userdata('select_category', $select_category);
	// 		$this->session->set_userdata('txt_search', $txt_search);
	//    		$config['total_rows'] = $this->model_akun->count_accounts('' ,$this->uri->segment(3), $select_category, $txt_search);
	// 	}else{
	// 		$select_category = $this->session->userdata('select_category');
	// 		$txt_search = $this->session->userdata('txt_search');
	//     	$config['total_rows'] = $this->model_akun->count_accounts();
	// 	}

	// 	$config['full_tag_open'] = '<ul class="pagination">';
	//     $config['full_tag_close'] = '</ul>';

	//     $config['num_tag_open'] = '<li>';
	//     $config['num_tag_close'] = '</li>';

	//     $config['cur_tag_open'] = '<li class="active"><span>';
	//     $config['cur_tag_close'] = '<span class="sr-only">(current)</span></span></li>';

	//     $config['prev_tag_open'] = '<li>';
	//     $config['prev_tag_close'] = '</li>';

	//     $config['next_tag_open'] = '<li>';
	//     $config['next_tag_close'] = '</li>';

	//     $config['first_link'] = 'First';
	//     $config['prev_link'] = 'Previous';
	//     $config['last_link'] = 'Last';
	//     $config['next_link'] = 'Next';

	//     $config['first_tag_open'] = '<li>';
	//     $config['first_tag_close'] = '</li>';
	//     $config['last_tag_open'] = '<li>';
	//     $config['last_tag_close'] = '</li>';

	//     $this->pagination->initialize($config);
	//     $data['title'] 			= 'Kelola Data Akun';
	// 	$data['header'] 		= $this->load->view('headers/head', '', TRUE);
	// 	$data['navigation'] 	= $this->load->view('headers/navigation', '', TRUE);
	// 	$data['akun'] 			= $this->model_akun->view_data_akun($config['per_page'], $this->uri->segment(3), $select_category, $txt_search);
	// 	$data['no']	= $this->uri->segment(3);
	// 	$data['result'] = $config['total_rows'];
	// 	$data['content'] 		= $this->load->view('contents/view_data_akun', $data, TRUE);
	// 	$data['footer'] 		= $this->load->view('footers/footer', '', TRUE);
	// 	$this->load->view('main', $data);
		
		
	// }

}

/* End of file Data_pengarang.php */
/* Location: ./application/controllers/Data_pengarang.php */