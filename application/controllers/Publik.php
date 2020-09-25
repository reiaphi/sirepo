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

        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $data['sort'] = $this->input->post('sort');
            $this->session->set_userdata('keyword', $data['keyword']);
            $this->session->set_userdata('sort', $data['sort']);
            echo $data['keyword'];
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
            $data['sort'] = $this->session->userdata('sort');
        }

        //config pencarian
        if (!empty($data['keyword'])) {
            $this->db->group_start();  //group start
            $this->db->like('judul', $data['keyword']);
            $this->db->or_like('name', $data['keyword']);
            $this->db->or_like('pembimbing', $data['keyword']);
            $this->db->from('tugas_akhir');
            $this->db->where('status_id', 3);
            $this->db->join('mahasiswa', 'mahasiswa.user_id = tugas_akhir.user_id');
            $this->db->order_by('tahun', $data['sort']);
            $this->db->group_end();  //group ed
            $config['total_rows'] = $this->db->count_all_results();
        } else {
            $config['total_rows'] = $this->m_publik->count_ta();
        }
        $config['per_page'] = 3;
        //initialize
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);
        $data['user'] = $this->db->get_where('user', ['id' => $this->session->userdata('id')])->row_array();
        $data['tugas_akhir'] = $this->m_publik->show_tugas_akhir($config['per_page'], $data['start'], $data['keyword'], $data['sort']);
        $this->load->view('publik/header.php', $data);
        $this->load->view('publik/home.php', $data);
        $this->load->view('publik/footer.php');
    }
    public function home()
    {
        $this->session->unset_userdata('keyword');
        redirect('publik');
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
    public function preview($id)
    {

        $data['file'] = $this->db->get_where('file', ['id' => $id])->row();
        //var_dump($data);
        return  $this->load->view('file.php', $data);
    }
}
