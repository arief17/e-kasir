<?php

class Gudang extends CI_Controller
{
    public function index()
    {
        $this->load->view('gudang/data_barang');
    }
}
