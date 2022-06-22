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

    public function CreateCode()
    {
        $this->db->select('RIGHT(barang.kd_barang,5) as kd_barang', FALSE);
        $this->db->order_by('kd_barang', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('barang');
        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->kd_barang) + 1;
        } else {
            $kode = 1;
        }
        $batas = str_pad($kode, 5, "0", STR_PAD_LEFT);
        $kodetampil = "MB-" . $batas;
        return $kodetampil;
    }

    public function tambah_barang($data, $table)
    {
        $this->db->insert($table, $data);
    }
}
