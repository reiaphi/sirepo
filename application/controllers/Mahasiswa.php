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
        $this->load->helper("customhelper");
        $data['user'] = $this->db->get_where('user', ['id' => $this->session->userdata('id')])->row_array();
        $data['mahasiswa'] = $this->db->get_where('mahasiswa', ['user_id' => $this->session->userdata('id')])->row();
    }
    public function index()
    {
        $data['title'] = 'Mahasiswa';
        $data['user'] = $this->db->get_where('user', [
            'username' => $this->session->userdata('username')
        ])->row_array();
        $data['mahasiswa'] = $this->db->get_where('mahasiswa', ['user_id' => $this->session->userdata('id')])->row();
        $data['ta_saya'] = $this->get_ta_saya();
        $data['file'] = $this->get_file();
        $this->load->view('mahasiswa/header.php', $data);
        $this->load->view('mahasiswa/sidebar.php');
        // $this->load->view('mahasiswa/temp.php');
        $this->load_view_form($this->session->userdata('id'));
        $this->load->view('mahasiswa/footer');
    }

    public function status_data()
    {
        $data = array();
        $data['title'] = 'Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['metadata'] =  $this->db->get_where('tugas_akhir', ['user_id' => $this->session->userdata('id')])->row();
        $data['mahasiswa'] = $this->get_nama_mahasiswa();
        $data['file_laporan'] =   $this->get_file();
        $data['file_aplikasi'] = $this->db->get_where('file_aplikasi', ['user_id' => $this->session->userdata('id')])->row();
        $this->load->view('mahasiswa/header.php', $data);
        $this->load->view('mahasiswa/sidebar.php');
        $this->load->view('mahasiswa/status_data.php', $data);
        $this->load->view('mahasiswa/footer');
    }

    public function tugas_akhir_saya()
    {
        $data = array();
        $data['title'] = 'Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['ta_saya'] = $this->get_ta_saya();
        $data['penulis'] = $this->get_nama_mahasiswa();
        $data['file'] = $this->get_file();
        $this->load->view('mahasiswa/header.php', $data);
        $this->load->view('mahasiswa/sidebar.php');
        $this->load->view('mahasiswa/tugas_akhir_saya.php', $data);
        $this->load->view('mahasiswa/footer');
    }
    public function docker_guide()
    {
        $data = array();
        $data['title'] = 'Mahasiswa';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['ta_saya'] = $this->get_ta_saya();
        $data['penulis'] = $this->get_nama_mahasiswa();
        $data['file'] = $this->get_file();
        $data['file_aplikasi'] = $this->db->get_where('file_aplikasi', ['user_id' => $this->session->userdata('id')])->row();
        var_dump($data['file_aplikasi']);

        $this->load->view('mahasiswa/header.php', $data);
        $this->load->view('mahasiswa/sidebar.php');
        $this->load->view('mahasiswa/docker_guide.php');
        $this->load->view('mahasiswa/footer');
    }
    private function get_ta_saya()
    {
        $query = $this->db->get_where('tugas_akhir', ['user_id' => $this->session->userdata('id')])->row();
        return $query;
    }
    private function get_nama_mahasiswa()
    {
        $this->db->select('*');
        $query = $this->db->get_where('mahasiswa', ['user_id' => $this->session->userdata('id')])->row();
        return $query;
    }
    private function get_file()
    {
        $this->db->select('*');
        $query = $this->db->get_where('file', ['user_id' => $this->session->userdata('id')])->result_array();
        if ($query) {
            return $query;
        } else {
            $query = "belum ada";
        }
    }
    public function insert_to_mahasiswa()
    {
        $data['user'] = $this->db->get_where('user', ['id' => $this->session->userdata('id')])->row_array();
        $nim = $this->input->post('nim');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $fakultas = $this->input->post('fakultas');
        $jenjang = $this->input->post('jenjang');
        $program_studi = $this->input->post('program_studi');
        $no_hp = $this->input->post('no_hp');
        $tahun = $this->input->post('tahun');
        $data = array(

            'nim' => $nim,
            'name' => $name,
            'email' => $email,
            'fakultas' => $fakultas,
            'program_studi' => $jenjang . $program_studi,
            'no_hp' => $no_hp,
            'tahun' => $tahun,
            'user_id' => $this->session->userdata('id')

        );
        var_dump($data);
        $this->m_mahasiswa->input_data($data, 'mahasiswa');
        $this->session->set_flashdata('save', 'disimpan');
        redirectPreviousPage();
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
        // $this->session->set_flashdata('saved', 'disimpan');

        redirectPreviousPage();
    }
    public function insert_to_file_laporan()
    {

        $data = array();
        if ($this->input->post('submit')) { // Jika user menekan tombol Submit (Simpan) pada form
            // lakukan upload file dengan memanggil function upload yang ada di model
            $upload = $this->m_mahasiswa->upload();

            if ($upload['result'] == "success") { // Jika proses upload sukses
                // Panggil function save yang ada di model untuk menyimpan data ke database
                $this->m_mahasiswa->save($upload, 'file');

                redirect('mahasiswa'); // Redirect kembali ke halaman awal / halaman view data
            } else { // Jika proses upload gagal
                $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
            }
        }

        redirectPreviousPage();
    }
    public function insert_to_file_aplikasi()
    {
        $data = array();
        if ($this->input->post('submit')) { // Jika user menekan tombol Submit (Simpan) pada form
            $upload = $this->m_mahasiswa->upload_zip();
            if ($upload['result'] == "success") { // Jika proses upload sukses
                $this->m_mahasiswa->save_zip($upload, 'file_aplikasi');
                redirectPreviousPage();
            } else { // Jika proses upload gagal
                $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
            }
        }

        redirectPreviousPage();
    }
    public function form_mhs()
    {
        $data['user'] = $this->db->get_where('user', ['id' => $this->session->userdata('id')])->row_array();
        $nim = $this->input->post('nim');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $fakultas = $this->input->post('fakultas');
        $program_studi = $this->input->post('program_studi');
        $no_hp = $this->input->post('no_hp');
        $tahun = $this->input->post('tahun');
        $data_mhs = array(

            'nim' => $nim,
            'name' => $name,
            'email' => $email,
            'fakultas' => $fakultas,
            'program_studi' => $program_studi,
            'no_hp' => $no_hp,
            'tahun' => $tahun,
            'user_id' => $this->session->userdata('id')

        );
        $judul = $this->input->post('judul');
        $intisari = $this->input->post('intisari');
        $abstract = $this->input->post('abstract');
        $pembimbing = $this->input->post('pembimbing');
        $kata_kunci = $this->input->post('kata_kunci');
        $data_tugas_akhir = array(

            'judul' => $judul,
            'intisari' => $intisari,
            'abstract' => $abstract,
            'pembimbing' => $pembimbing,
            'kata_kunci' => $kata_kunci,
            'user_id' => $this->session->userdata('id')

        );
        // var_dump($data_mhs);
        // var_dump($data_tugas_akhir);
        $this->m_mahasiswa->input_data($data_mhs, 'mahasiswa');
        $this->m_mahasiswa->input_data($data_tugas_akhir, 'tugas_akhir');
        redirectPreviousPage();
    }
    public function load_view_form($id)
    {

        //jika datanya sudah ada
        if ($this->m_mahasiswa->cek_data($id)) {
            //cek data file
            if ($this->m_mahasiswa->cek_data_file($id)) {
                //cek file aplikasi 
                if ($this->m_mahasiswa->cek_file_app($id)) {
                    //semua form sudah terisi
                    $this->load->view('mahasiswa/form/done.php');
                } else {
                    //keluarkan datanya dan form upload file aplikasi
                    $this->load->view('mahasiswa/form/file_app.php');
                }
            } else {
                //keluarkan form untuk upload lagi 

                $this->load->view('mahasiswa/form/laporan_dan_app.php');
            }
        }
        //tampikan 
        else {
            $this->load->view('mahasiswa/temp.php');
        }
    }
}
