<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }
    public function index()
    {


        if ($this->session->userdata('username')) {

            $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            if ($this->session->userdata('role_id') == 1) {
                redirect('admin');
            } elseif ($this->session->userdata('role_id') == 2) {

                redirect('mahasiswa');
            }
        } else {
            redirect('auth');
        }
    }
}
