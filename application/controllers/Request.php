<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Request extends CI_Controller
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
    // Nomor Random
    $data['nomor_perjalanan'] = rand(000000, 999999);

    $this->load->view('template/header', $data);
    $this->load->view('template/navbar', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('form_request', $data);
    $this->load->view('template/footer', $data);
  }

  public function insert_request()
  {
    $nomor_perjalanan = $this->input->post('nomor_perjalanan');
    $nik = $this->input->post('nik');
    $nama = $this->input->post('nama');
    $tanggal_perjalanan = $this->input->post('tanggal_perjalanan');
    $tujuan_perjalanan = $this->input->post('tempat_tujuan');
    $tanggal_pulang = $this->input->post('tanggal_pulang');

    $data = [
      'nomor_perjalanan' => $nomor_perjalanan,
      'nik' => $nik,
      'nama' => $nama,
      'tanggal_perjalanan' => $tanggal_perjalanan,
      'tempat_tujuan' => $tujuan_perjalanan,
      'tanggal_pulang' => $tanggal_pulang,
      'status' => 'pending'
    ];

    $insert = $this->db->insert('tb_request_perjalanan', $data);

    if ($insert) {
      $this->session->set_flashdata('message', '<script>alert("Data Sukses di buat")</script>');
      redirect('request');
    } else {
      $this->session->set_flashdata('message', '<script>alert("Data gagal di buat")</script>');
      redirect('request');
    }
  }

  public function status_request()
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
