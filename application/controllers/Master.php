<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Master extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_databarang');
    }


    public function index()
    {
        $data['title'] = 'Dashboard E -Kasir';
        $data['name'] = 'Admin E-Kasir';
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/navbar', $data);
        $this->load->view('_partials/sidenav', $data);
        $this->load->view('kasir/dashboard', $data);
        $this->load->view('_partials/footer', $data);
    }

    public function gudang_databarang()
    {
        $data['kd_barang'] = $this->m_databarang->CreateCode();
        $data['barang'] = $this->m_databarang->tampil_databarang()->result();
        $data['name'] = 'Admin E-Kasir';
        $data['title'] = 'Data Barang - Gudang';
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/navbar', $data);
        $this->load->view('_partials/sidenav', $data);
        $this->load->view('gudang/data_barang', $data);
        $this->load->view('_partials/footer', $data);
    }

    public function gudang_stokbarang()
    {
        $data['join'] = $this->m_databarang->tampil_stokbarang()->result();

        $data['name'] = 'Admin E-Kasir';
        $data['title'] = 'Stok Data Barang - Gudang';
        $this->load->view('_partials/header', $data);
        $this->load->view('_partials/navbar', $data);
        $this->load->view('_partials/sidenav', $data);
        $this->load->view('gudang/data_stokbarang', $data);
        $this->load->view('_partials/footer', $data);
    }

    public function tambah_barang()
    {
        $kd_barang = $this->input->post('kd_barang');
        $nama_barang = $this->input->post('nama_barang');
        $merk = $this->input->post('merk');
        $satuan = $this->input->post('satuan');
        $harga = $this->input->post('harga');
        $gbr_barang = $this->input->post('gbr_barang');
        $tanggal = $this->input->post('tanggal');

        $data = array(
            'kd_barang' => $kd_barang,
            'nama_barang' => $nama_barang,
            'merk' => $merk,
            'satuan' => $satuan,
            'harga' => $harga,
            'gbr_barang' => $gbr_barang,
            'tanggal' => $tanggal
        );

        $this->m_databarang->tambah_barang($data, 'barang');
        redirect('master/gudang_databarang');
    }
}
