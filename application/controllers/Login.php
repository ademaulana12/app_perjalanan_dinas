<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    // Construct
    public function index()
    {
        $this->load->view('login');
    }

    public function login()
    {
        $nik = $this->input->post('nik');
        $pass = $this->input->post('password');

        $data = $this->db->get_where('user', ['nik' => $nik])->row_array();

        if ($data) {
            if ($data['nik'] == $nik) {
                if ($data['password'] == $pass) {
                    if ($data['hak_akses'] == '1') {
                        # code...
                        $data_user = [
                            'id_user' => $data['id_user'],
                            'nik' => $data['nik'],
                            'nama_lengkap' => $data['nama_lengkap'],
                            'hak_akses' => $data['hak_akses'],
                        ];

                        $this->session->set_userdata($data_user);
                        redirect('dashboard/dashboard_admin', $data_user);
                    } elseif ($data['hak_akses'] == '9') {
                        # code...
                        $data_user = [
                            'id_user' => $data['id_user'],
                            'nik' => $data['nik'],
                            'nama_lengkap' => $data['nama_lengkap'],
                            'hak_akses' => $data['hak_akses'],
                        ];

                        $this->session->set_userdata($data_user);
                        redirect('dashboard', $data_user);
                    }
                } else {
                    $this->session->set_flashdata('message', '<script>alert("password salah")</script>');
                    redirect('login');
                }
            } else {
                $this->session->set_flashdata('message', '<script>alert("nik salah")</script>');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message', '<script>alert("data tidak ada")</script>');
            redirect('login');
        }
    }

    public function logout()
    {
        // Inisialisasi data akun
        $data_akun = $this->session->all_userdata();
        foreach ($data_akun as $da) {
            if ($da !== 'id_user' && $da !== 'nama_lengkap') {

                // menghapus data user
                $this->session->unset_userdata($data_akun);
            }
        }

        // Menghapus session login
        $this->session->sess_destroy();
        $this->session->set_flashdata('error', '<script>alert("Anda berhasil logout")</script>');
        redirect('login');
    }
}
