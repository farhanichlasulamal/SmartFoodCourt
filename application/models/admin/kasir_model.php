<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasir_model extends CI_Model {

	private $_table1 = "pesanan";
    private $_table2 = "menu_makanan";
    private $_table3 = "tenant";

	public function getListOrder()
    {
    	$this->db->select('id_customer');
    	$this->db->distinct();
        $this->db->from($this->_table1);
        $this->db->where('status_pemesanan', '2');
        return $this->db->get()->result();
    }

    public function getListOrderDetail($idmeja)
    {
        $this->db->from($this->_table1);
        $this->db->where('id_customer', $idmeja);
        $this->db->where('status_pemesanan', '2');
        $this->db->join($this->_table3, 'tenant.id_tenant = pesanan.id_toko');
        $this->db->join($this->_table2, 'menu_makanan.id_menu = pesanan.idmenu');
        return $this->db->get()->result();
    }

    public function getLog(){
        $this->db->from($this->_table1);
        $this->db->order_by('id_pesanan', 'desc');
        $this->db->join($this->_table3, 'tenant.id_tenant = pesanan.id_toko');
        $this->db->join($this->_table2, 'menu_makanan.id_menu = pesanan.idmenu');
        return $this->db->get()->result();
    }

    public function pay($idmeja){
        $data = array(
            'status_pemesanan' => '3'
        );
        $this->db->where('id_customer', $idmeja);
        $this->db->where('status_pemesanan', '2');
        return $this->db->update($this->_table1, $data);
    }

    public function delete($idmeja)
    {
        return $this->db->delete($this->_table1, array('id_customer' => $idmeja));
    }

    public function deleteById($idpesanan)
    {
        return $this->db->delete($this->_table1, array('id_pesanan' => $idpesanan));
    }
    
}

/* End of file kasir_model.php */
/* Location: ./application/models/admin/kasir_model.php */