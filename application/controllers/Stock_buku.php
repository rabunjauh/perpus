<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stock_buku extends CI_Controller {

	public function index()
	{
		$data = [];
		$data['title'] = "Stock Buku";
		$data["header"] = $this->load->view("headers/head", "", true);
		$data["navigation"] = $this->load->view("headers/navigation", "", true);
		$data["stock_buku"] = $this->model_stock("view_stock_buku");
		$data["content"] = $this->load->view("contents/view_stock", "", true);
		$data["footer"] = $this->load->view("footers/footer", "", true);
		$this->load->view("main", $data);
	}

}

/* End of file Stock_buku.php */
/* Location: ./application/controllers/Stock_buku.php */