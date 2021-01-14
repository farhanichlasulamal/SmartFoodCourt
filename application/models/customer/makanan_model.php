<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Makanan_model extends CI_Model {

    private $_table1 = "menu_makanan";
    private $_table2 = "pesanan";
    private $_table3 = "tenant";

    public function getMenuAll($jenis)
    {
        $this->db->from($this->_table1);
        $this->db->where('jenis_makanan', $jenis);
        $this->db->join($this->_table3, 'tenant.id_tenant = menu_makanan.idtenant');
        return $this->db->get()->result();
    }

    public function getMenuByTenant($jenis,$tenant)
    {
        $this->db->from($this->_table1);
        $this->db->where('jenis_makanan', $jenis);
        $this->db->where('idtenant', $tenant);
        $this->db->join($this->_table3, 'tenant.id_tenant = menu_makanan.idtenant');
        return $this->db->get()->result();
    }

    public function getTenant()
    {
        $this->db->order_by('nama_tenant', 'ASC');
        return $this->db->get($this->_table3)->result();
    }

    public function getOrder($userid)
    {
        $this->db->select('menu_makanan.nama_makanan,tenant.nama_tenant,pesanan.jumlah,menu_makanan.harga_makanan,pesanan.id_pesanan');
        $this->db->from($this->_table2);
        $this->db->where('id_customer', $userid);
        $this->db->where('status_pemesanan', '1');
        $this->db->join($this->_table1, 'menu_makanan.id_menu = pesanan.idmenu');
        $this->db->join($this->_table3, 'tenant.id_tenant = pesanan.id_toko');
        return $this->db->get()->result();
    }

    public function add($data)
    {
        $tenant = $this->db->select('idtenant')->from($this->_table1)->where('id_menu', $data['foodid'])->get()->row();
        $order = array(
            'id_customer' => $data['userid'],
            'id_toko' => $tenant->idtenant,
            'idmenu' => $data['foodid'],
            'jumlah' => $data['qty'],
            'tanggal_pemesanan' => date("Y-m-d"),
            'status_pemesanan' => '1',
        );
        return $this->db->insert($this->_table2, $order);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table2, array('id_pesanan' => $id));
    }

    public function updateStatus($id)
    {
        $data = array(
            'status_pemesanan' => '2'
        );
        $this->db->where('id_customer', $id);
        $this->db->where('status_pemesanan', '1');
        return $this->db->update($this->_table2, $data);
    }
}

/* End of file makanan_model.php */
/* Location: ./application/models/customer/makanan_model.php */
