<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Status_request extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $name = $this->session->userdata('nama_lengkap');
        if (empty($name)) {
            redirect('login');
        }
    }

    public function index()
    {
        $data['nama'] = $this->session->userdata('nama_lengkap');
        // Nomor Nik
        $data['nik'] = $this->session->userdata('nik');

        $data['hak_akses'] = $this->session->userdata('hak_akses');

        $nik = $this->session->userdata('nik');
        $data['get_status'] = $this->db->get_where('tb_request_perjalanan', ['nik' => $nik])->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('status_request', $data);
        $this->load->view('template/footer', $data);
    }
}
