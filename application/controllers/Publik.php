<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Publik extends CI_Controller

{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $data['user'] = $this->db->get_where('user', ['id' => $this->session->userdata('id')])->row_array();
    }
    public function index()
    {
        $data['tugas_akhir'] = $this->m_publik->show_data()->result();
        $this->load->view('publik/header.php', $data);
        $this->load->view('publik/home.php');
        $this->load->view('publik/footer.php');
    }
    public function gotoLogin()
    {
        redirect('auth');
    }
    public function section1($id)
    {
        //$where = array('user_id' => $this->session->userdata('id'));
        $data['tugas_akhir'] = $this->m_publik->get_detail($id);
        $this->load->view('publik/header.php');
        $this->load->view('publik/section1.php', $data);
        $this->load->view('publik/footer.php');
    }
}
