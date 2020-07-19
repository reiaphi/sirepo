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

        //pagination 
        $this->load->library('pagination');

        $data['keyword'] = null;
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            echo $data['keyword'];
        } else {
            $data['keyword'] = null;
        }

        //config
        $config['total_rows'] = $this->m_publik->count_ta();
        $config['per_page'] = 1;

        //initialize
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);

        $data['user'] = $this->db->get_where('user', ['id' => $this->session->userdata('id')])->row_array();
        $data['tugas_akhir'] = $this->m_publik->show_tugas_akhir($config['per_page'], $data['start'], $data['keyword']);
        $this->load->view('publik/header.php', $data);
        $this->load->view('publik/home.php', $data);
        //$this->load->view('publik/test.php');
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
        //$data['tugas_akhir'] = $this->m_publik->get_detail($id);
        $data['file'] = $this->m_publik->get_file($id);
        $data['tugas_akhir'] = $this->m_publik->show_ta($id);
        $this->load->view('publik/header.php');
        $this->load->view('publik/section1.php', $data);
        $this->load->view('publik/footer.php');
    }

    public function demo($id)
    {
        //$where = array('user_id' => $this->session->userdata('id'));
        $data['file_aplikasi'] = $this->m_publik->get_file_aplikasi($id);
        $this->load->view('publik/demo.php', $data);
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
