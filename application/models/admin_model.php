<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function getAccount($id,$pass){
		$this->db->where('id_kasir', $id);
		$this->db->where('password_kasir', $pass);
		$query = $this->db->get('kasir');
		if ($query->num_rows()>0) {
			foreach ($query->result() as $row) {
				$sess = array (
					'adminid' => $row->id_kasir,
					'password' => $row->password_kasir,
					'name'=> $row->nama_kasir
				);
			}
			$this->session->set_userdata($sess);
			redirect('admin/kasir');
		} else {
			echo "<script>alert('Username dan password Anda tidak ada dalam daftar.');</script>";
			redirect('login');
		}
	}

	public function security(){
		$adminid = $this->session->adminid;
		if(empty($adminid)){
			$this->session->sess_destroy();
			redirect('login');
		}
	}
	

}

/* End of file account_model.php */
/* Location: ./application/models/account_model.php */