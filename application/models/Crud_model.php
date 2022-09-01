<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud_model extends CI_Model
{
    // fungsi pertama
    public function insert_data($tablename, $data)
    {
        return $this->db->insert($tablename, $data);
    }

    // fungsi kedua
    public function view_data()
    {
        return $this->db->get();
    }
}
