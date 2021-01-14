<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function getAccount($user,$pass){
		$this->db->where('id_user', $user);
		$this->db->where('password_user', $pass);
		$query = $this->db->get('user');
		if ($query->num_rows()>0) {
			foreach ($query->result() as $row) {
				$sess = array (
					'userid' => $row->id_user,
					'password' => $row->password_user
				);
			}
			$this->session->set_userdata($sess);
			redirect('customer/makanan');
		} else {
			echo "<script>alert('Username dan password Anda tidak ada dalam daftar.');</script>";
			redirect('login');
		}
	}

	public function security(){
		$userid = $this->session->userid;
		if(empty($userid)){
			$this->session->sess_destroy();
			redirect('login');
		}
	}
	

}

/* End of file account_model.php */
/* Location: ./application/models/account_model.php */