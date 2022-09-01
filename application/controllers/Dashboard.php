<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __contstruct()
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
		$data['hak_akses'] = $this->session->userdata('hak_akses');
		$this->load->view('template/header', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('dashboard', $data);
		$this->load->view('template/footer', $data);
	}

	public function dashboard_admin()
	{
		$data['nama'] = $this->session->userdata('nama_lengkap');
		$data['hak_akses'] = $this->session->userdata('hak_akses');
		
		$this->load->view('template/header', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/dashboard', $data);
		$this->load->view('template/footer', $data);
	}

	public function request_perjalanan()
	{
		$data['nama'] = $this->session->userdata('nama_lengkap');
		$data['hak_akses'] = $this->session->userdata('hak_akses');
		$data['get_request_data'] = $this->db->get('tb_request_perjalanan')->result_array();
		$data['get_success_data'] = $this->db->get_where('tb_request_perjalanan', ['status' => 'success'])->result_array();
		$this->load->view('template/header', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/request_perjalanan', $data);
		$this->load->view('template/footer', $data);
	}

	public function update_request($nik)
	{
		$status = $this->input->post('status');

		$data = [
			'status' => $status
		];

		$this->db->set($data);
		$this->db->where('nik', $nik);
		$update = $this->db->update('tb_request_perjalanan');
		if ($update) {
			$this->session->set_flashdata('message', '<script>alert("Update Berhasil")</script>');
			redirect('dashboard/request_perjalanan');
		} else {
			$this->session->set_flashdata('message', '<script>alert("Update gagal")</script>');
			redirect('dashboard/request_perjalanan');
		}
	}
}
