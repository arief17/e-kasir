<?php
class M_databarang extends CI_Model
{
    function tampil_databarang()
    {
        return $this->db->get('barang');
    }


    function tampil_stokbarang()
    {
        $this->db->select('*');
        $this->db->from('barang');
        $this->db->join('stok', 'stok.kd_barang = barang.kd_barang');
        return $this->db->get('');
    }
}
