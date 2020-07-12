<?php
class M_mahasiswa extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $data['user'] = $this->db->get_where('user', ['id' => $this->session->userdata('id')])->row_array();
    }

    public function get_data($table)
    {
        return $this->db->get($table);
    }
    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function get_file($id)
    {
        return $this->db->get_where('file', ['ta_id' => $id])->result_array();
    }

    // Fungsi untuk melakukan proses upload file
    public function upload()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'pdf|text';
        $config['max_size']  = '2048';
        $config['remove_space'] = TRUE;

        $this->load->library('upload', $config); // Load konfigurasi uploadnya
        if ($this->upload->do_upload('input_file')) { // Lakukan upload dan Cek jika proses upload berhasil
            // Jika berhasil :
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        } else {
            // Jika gagal :
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }
    //menyimpan id tugas akhir sementara
    public function get_id()
    {
        $data['user'] = $this->db->get_where('user', ['id' => $this->session->userdata('id')])->row_array();
        //memanggil tugas_akhir yang user_id==this session
        //  $data['tugas_akhir'] = $this->db->get_where('tugas_akhir', ['user_id' => $this->session->userdata('id')])->row_array();
        //mengambil id tugas akhir
        $q = $this->db->select('id')->from('tugas_akhir')->where('user_id', $this->session->userdata('id'))->get()->result_array();
        //array shift untuk memanggil single array yaitu id
        return array_shift($q);
    }
    // Fungsi untuk menyimpan data ke database
    public function save($upload)
    {
        $file = $this->get_id();
        $data = array(

            'name' => $upload['file']['file_name'],
            'file' => "none",
            'status' => 1,
            'ta_id' => $file['id'],
            'user_id' => $this->session->userdata('id')
        );

        $this->db->insert('file', $data);
    }
}
