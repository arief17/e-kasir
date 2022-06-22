<?php
class M_databarang extends CI_Model
{
    function tampil_databarang()
    {
        return $this->db->get('barang');
    }

    function tampil_stokbarang()
    {
        return $this->db->get('stok');
    }
}
