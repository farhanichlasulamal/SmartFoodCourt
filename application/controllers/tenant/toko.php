<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toko extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("tenant/toko_model");
		$this->load->model('tenant_model');
		$this->load->helper(array('form', 'url'));
	}

	public function index(){
		$this->pesanan($this->session->tenantid);
	}

	public function pesanan($idtenant){
		$this->tenant_model->security();
		$this->header();
		$data['list'] = $this->toko_model->getListOrder($idtenant);
		$this->load->view('tenant/toko',$data);
		$this->footer();	
	}

	public function daftarMenu($idtenant){
		$this->tenant_model->security();
		$this->header();
		$data['makanan'] = $this->toko_model->getListMakanan($idtenant);
		$data['minuman'] = $this->toko_model->getListMinuman($idtenant);
		$this->load->view('tenant/menu',$data);
		$this->footer();
	}

	public function halamanUpdate($idtenant,$idmenu){
		$this->tenant_model->security();
		$this->header();
		$data['item'] = $this->toko_model->getSelectedMenu($idtenant,$idmenu);
		$this->load->view('tenant/update',$data);
		$this->footer();
	}

	public function doUpdate(){
		$config['upload_path'] = './assets/img/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '2048';
		$config['max_width']  = '1500';
		$config['max_height']  = '1500';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('Gambar')){
			$error = array('error' => $this->upload->display_errors());
			$data = array(
				'nama_kategori' => $this->input->post('NamaMenu'),
				'harga' => $this->input->post('Harga'),
				'jenis' => $this->input->post('JenisMenu')
			);
			$this->toko_model->updateMenu($this->session->tenantid,$data);
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			echo "<script>alert('upload berhasil!');</script>";

			$file_info = $this->upload->data();
			$img = $file_info['file_name']; 
			$data = array(
				'namamenu' => $this->input->post('NamaMenu'),
				'harga' => $this->input->post('Harga'),
				'jenis' => $this->input->post('JenisMenu'),
				'gambar' => $img
			);
			$this->toko_model->updateMenuWithImage($this->session->tenantid,$data);
		}
        $this->daftarMenu($this->session->tenantid);
	}

	public function halamanInsert(){
		$this->tenant_model->security();
		$this->header();
		$this->load->view('tenant/insert');
		$this->footer();
	}

	public function doInsert(){
		$config['upload_path'] = './assets/img/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '2048';
		$config['max_width']  = '1500';
		$config['max_height']  = '1500';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('Gambar')){
			$error = array('error' => $this->upload->display_errors());
		}
		else{
			$data = array('upload_data' => $this->upload->data());
			echo "<script>alert('upload berhasil!');</script>";
			$file_info = $this->upload->data();
			$img = $file_info['file_name']; 
			$data = array(
				'namamenu' => $this->input->post('NamaMenu'),
				'harga' => $this->input->post('Harga'),
				'jenis' => $this->input->post('JenisMenu'),
				'gambar' => $img
			);
			$this->toko_model->insertMenu($this->session->tenantid,$data);
		}
        $this->daftarMenu($this->session->tenantid);
	}

	public function selesai($idpesanan){
		$this->toko_model->updateStatus($idpesanan);
		$this->load->library('user_agent');
		$refer =  $this->agent->referrer();
        redirect($refer);
	}

	public function hapusMenu($idmenu){
		$this->toko_model->delete($idmenu);
		$this->load->library('user_agent');
		$refer =  $this->agent->referrer();
        redirect($refer);
	}

	public function header(){
		$this->load->view('tenant/header');
	}

	public function footer(){
		$this->load->view('tenant/footer');
	}

}

/* End of file toko.php */
/* Location: ./application/controllers/tenant/toko.php */