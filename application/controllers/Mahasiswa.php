<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->model('m_mahasiswa');
    }
    public function index()
    {
        $data['title'] = 'Mahasiswa';
        $data['user'] = $this->db->get_where('user', [
            'username' => $this->session->userdata('username')
        ])->row_array();
        $this->load->view('mahasiswa/header.php', $data);
        $this->load->view('mahasiswa/sidebar.php');
        $this->load->view('mahasiswa/main.php');
        $this->load->view('mahasiswa/footer');
    }

    public function my_profile()
    {
        $data['title'] = 'Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('mahasiswa/header.php', $data);
        $this->load->view('mahasiswa/sidebar.php', $data);
        $this->load->view('mahasiswa/my_profile.php');
        $this->load->view('mahasiswa/footer');
    }
    public function tugas_akhir_saya()
    {
        $data['title'] = 'Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('mahasiswa/header.php', $data);
        $this->load->view('mahasiswa/sidebar.php');
        $this->load->view('mahasiswa/tugas_akhir_saya.php');

        $this->load->view('mahasiswa/footer');
    }

    public function insert_to_mahasiswa()
    {

        $data['user'] = $this->db->get_where('user', ['id' => $this->session->userdata('id')])->row_array();
        $nim = $this->input->post('nim');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $fakultas = $this->input->post('fakultas');
        $program_studi = $this->input->post('program_studi');
        $no_hp = $this->input->post('no_hp');
        $tahun = $this->input->post('tahun');

        $data = array(

            'nim' => $nim,
            'name' => $name,
            'email' => $email,
            'fakultas' => $fakultas,
            'program_studi' => $program_studi,
            'no_hp' => $no_hp,
            'tahun' => $tahun,
            'user_id' => $this->session->userdata('id')

        );
        $this->m_mahasiswa->input_data($data, 'mahasiswa');

        redirect('mahasiswa');
    }
    public function insert_to_tugas_akhir()
    {

        $data['user'] = $this->db->get_where('user', ['id' => $this->session->userdata('id')])->row_array();
        $judul = $this->input->post('judul');
        $intisari = $this->input->post('intisari');
        $abstract = $this->input->post('abstract');
        $pembimbing = $this->input->post('pembimbing');
        $kata_kunci = $this->input->post('kata_kunci');


        $data = array(

            'judul' => $judul,
            'intisari' => $intisari,
            'abstract' => $abstract,
            'pembimbing' => $pembimbing,
            'kata_kunci' => $kata_kunci,
            'user_id' => $this->session->userdata('id')

        );
        $this->m_mahasiswa->input_data($data, 'tugas_akhir');

        redirect('mahasiswa');
    }
    public function insert_to_file_laporan()
    {
        $data = array();

        if ($this->input->post('submit')) { // Jika user menekan tombol Submit (Simpan) pada form
            // lakukan upload file dengan memanggil function upload yang ada di GambarModel.php
            $upload = $this->m_mahasiswa->upload();

            if ($upload['result'] == "success") { // Jika proses upload sukses
                // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
                $this->m_mahasiswa->save($upload);

                redirect('mahasiswa'); // Redirect kembali ke halaman awal / halaman view data
            } else { // Jika proses upload gagal
                $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
            }
        }

        redirect('mahasiswa');
    }
}