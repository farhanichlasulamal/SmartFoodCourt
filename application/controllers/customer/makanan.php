<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Makanan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("customer/makanan_model");
		$this->load->model('user_model');
	}

	public function index(){
		$this->menuAll('makanan');
	}

	public function menuAll($jenis){
		$this->user_model->security();
		$this->header();
		$data['menu'] = $this->makanan_model->getMenuAll($jenis);
		$data['tenant'] = $this->makanan_model->getTenant();
		$data['jenis'] = $jenis;
		$this->load->view('customer/makanan', $data);
		$this->footer();
	}

	public function menuByTenant($jenis,$tenant){
		$this->user_model->security();
		$this->header();
		$data['menu'] = $this->makanan_model->getMenuByTenant($jenis,$tenant);
		$data['tenant'] = $this->makanan_model->getTenant();
		$data['jenis'] = $jenis;
		$this->load->view('customer/makanan', $data);
		$this->footer();
	}	

	// Add a new item
	public function addToCart(){
		$userid = $this->input->post('UserId');
		$foodid = $this->input->post('FoodId');
		$quantity = $this->input->post('qty'.$foodid);
		$data = array(
			'userid' => $userid,
			'foodid' => $foodid,
			'qty' => $quantity
		);
        $this->makanan_model->add($data);
        $this->load->library('user_agent');
		$refer =  $this->agent->referrer();
        redirect($refer);
	}

	public function cart($userid){
		$this->user_model->security();
		$this->header();
		$data['order'] = $this->makanan_model->getOrder($userid);
		$this->load->view('customer/cart', $data);
		$this->footer();
	}

	public function deleteOrder($id){
		$this->makanan_model->delete($id);
		$this->load->library('user_agent');
		$refer =  $this->agent->referrer();
        redirect($refer);
	}

	public function confirmOrder($id){
		$this->makanan_model->updateStatus($id);
		$this->load->library('user_agent');
		$refer =  $this->agent->referrer();
        redirect($refer);
	}

	public function header(){
		$this->load->view('customer/header');
	}

	public function footer(){
		$this->load->view('customer/footer');
	}

}


/* End of file makanan.php */
/* Location: ./application/controllers/customer/makanan.php */
