<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toko_model extends CI_Model {

    private $_table1 = "pesanan";
    private $_table2 = "menu_makanan";

    public function getListOrder($tenantid)
    {
        $this->db->from($this->_table1);
        $this->db->where('id_toko', $tenantid);
        $this->db->where('status_pemesanan', '3');
        $this->db->join($this->_table2, 'menu_makanan.id_menu = pesanan.idmenu');
        return $this->db->get()->result();
    }

    public function getSelectedMenu($tenantid,$idmenu){
        $this->db->from($this->_table2);
        $this->db->where('idtenant', $tenantid);
        $this->db->where('id_menu', $idmenu);
        return $this->db->get()->result();
    }

    public function updateMenu($idtenant,$menu){
        $data = array(
            'nama_makanan' => $menu['namamenu'],
            'harga_makanan' => $menu['harga'],
            'jenis_makanan' => $menu['jenis']
        );
        $this->db->where('idtenant', $idtenant);
        return $this->db->update($this->_table2, $data);
    }

    public function updateMenuWithImage($idtenant,$menu){
        $data = array(
            'nama_makanan' => $menu['namamenu'],
            'harga_makanan' => $menu['harga'],
            'jenis_makanan' => $menu['jenis'],
            'gambar_makanan' => $menu['gambar']
        );
        $this->db->where('idtenant', $idtenant);
        return $this->db->update($this->_table2, $data);
    }

    public function insertMenu($idtenant,$menu){
        $data = array(
            'nama_makanan' => $menu['namamenu'],
            'harga_makanan' => $menu['harga'],
            'jenis_makanan' => $menu['jenis'],
            'idtenant' => $idtenant,
            'gambar_makanan' => $menu['gambar']
        );
        $this->db->where('idtenant', $idtenant);
        return $this->db->insert($this->_table2, $data);
    }

    public function updateStatus($idpesanan)
    {
        $data = array(
            'status_pemesanan' => '4'
        );
        $this->db->where('id_pesanan', $idpesanan);
        $this->db->where('status_pemesanan', '3');
        return $this->db->update($this->_table1, $data);
    }

    public function delete($idmenu)
    {
        return $this->db->delete($this->_table2, array('id_menu' => $idmenu));
    }

    public function getListMakanan($tenantid)
    {
        $this->db->from($this->_table2);
        $this->db->where('jenis_makanan', 'makanan');
        $this->db->where('idtenant', $tenantid);
        return $this->db->get()->result();
    }

    public function getListMinuman($tenantid)
    {
        $this->db->from($this->_table2);
        $this->db->where('jenis_makanan', 'minuman');
        $this->db->where('idtenant', $tenantid);
        return $this->db->get()->result();
    }
}