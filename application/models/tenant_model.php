<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tenant_model extends CI_Model {

	public function getAccount($id,$pass){
		$this->db->where('id_tenant', $id);
		$this->db->where('password_tenant', $pass);
		$query = $this->db->get('tenant');
		if ($query->num_rows()>0) {
			foreach ($query->result() as $row) {
				$sess = array (
					'tenantid' => $row->id_tenant,
					'password' => $row->password_tenant,
					'name'=> $row->nama_tenant
				);
			}
			$this->session->set_userdata($sess);
			redirect('tenant/toko');
		} else {
			echo "<script>alert('Username dan password Anda tidak ada dalam daftar.');</script>";
			redirect('login');
		}
	}

	public function security(){
		$tenantid = $this->session->tenantid;
		if(empty($tenantid)){
			$this->session->sess_destroy();
			redirect('login');
		}
	}
	

}

/* End of file account_model.php */
/* Location: ./application/models/account_model.php */