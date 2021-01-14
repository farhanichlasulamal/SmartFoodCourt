<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasir extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("admin/kasir_model");
		$this->load->model('admin_model');
	}

	public function index(){
		$this->pesanan();
	}

	public function pesanan(){
		$this->admin_model->security();
		$this->header();
		$data['list'] = $this->kasir_model->getListOrder();
		$this->load->view('admin/kasir',$data);
		$this->footer();	
	}

	public function paymentDetail($idAdmin,$idmeja,$kembali){
		$this->admin_model->security();
		$this->header();
		$data['order'] = $this->kasir_model->getListOrderDetail($idmeja);
		$data['userid'] = $idmeja;
		$data['kembalian'] = $kembali;
		$this->load->view('admin/pembayaran',$data);
		$this->footer();
	}

	public function log(){
		$this->admin_model->security();
		$this->header();
		$data['list'] = $this->kasir_model->getLog();
		$this->load->view('admin/log',$data);
		$this->footer();
	}

	public function deleteOrder($idmeja){
		$this->kasir_model->delete($idmeja);
		$this->load->library('user_agent');
		$refer =  $this->agent->referrer();
        redirect($refer);
	}

	public function deleteOrderById ($idpesanan){
		$this->kasir_model->deleteById($idpesanan);
		$this->load->library('user_agent');
		$refer =  $this->agent->referrer();
        redirect($refer);
	}

	public function bayar($idAdmin,$idmeja){
		$kembali = $this->input->post('Kembali');
        $this->kasir_model->pay($idmeja);
        $this->paymentDetail($idAdmin,$idmeja,$kembali);
	}

	public function header(){
		$this->load->view('admin/header');
	}

	public function footer(){
		$this->load->view('admin/footer');
	}

}

/* End of file kasir.php */
/* Location: ./application/controllers/admin/kasir.php */