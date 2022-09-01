<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registered extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('registered');
    }

    public function insert_register()
    {
        $nik = $this->input->post('nik');
        $nama = $this->input->post('nama');
        $password = $this->input->post('password');

        $data = [
            'id_user' => rand(000000, 999999),
            'nik' => $nik,
            'nama_lengkap' => $nama,
            'password' => $password,
            'hak_akses' => 9,
        ];

        $insert = $this->db->insert('user', $data);
        if ($insert) {
            $this->session->set_flashdata('message', '<script>alert("Berhasil register")</script>');
            redirect('login');
        } else {
            $this->session->set_flashdata('message', '<script>alert("Gagal register")</script>');
            redirect('login');
        }
    }
}
