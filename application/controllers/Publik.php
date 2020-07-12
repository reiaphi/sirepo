<?php

use function PHPSTORM_META\type;

defined('BASEPATH') or exit('No direct script access allowed');

class Publik extends CI_Controller

{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('download');
        $this->load->library('session');
        $data['user'] = $this->db->get_where('user', ['id' => $this->session->userdata('id')])->row_array();
    }
    public function index()
    {
        $data = array();
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
        $data = array();
        $data['tugas_akhir'] = $this->m_publik->get_detail($id);
        $data['file'] = $this->m_publik->get_file($id);
        $this->load->view('publik/header.php');
        $this->load->view('publik/section1.php', $data);
        $this->load->view('publik/footer.php');
    }
    public function get_filename($id)
    {
        $data['files'] = $this->db->select('name')->from('file')->where('ta_id', $id)->get()->result_array();
        echo $data;
        return $data;
    }

    public function download($id)
    {

        //get file info from database
        $fileInfo =  $this->m_publik->getRows(array('name' => $id));
        //file path
        $filename = $fileInfo['name'] ?? 'default value';
        $filepath = 'C:\xampp\htdocs\repositori\uploads/' . $fileInfo['name'];
        $data = file_get_contents($filepath);
        //download file from directory
        $mime = get_mime_by_extension($filepath);
        header('Content-Type: ' . $mime);  // Add the mime type from Code igniter.

        return force_download($filename, $data);
    }
}
