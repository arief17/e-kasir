<?php


class Auth extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Login E-Kasir';
        $this->load->view('auth/login.php', $data);
    }
}
