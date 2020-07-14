<?php
class M_admin extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $data['user'] = $this->db->get_where('user', ['id' => $this->session->userdata('id')])->row_array();
    }
    public function show_data()
    {
        return $this->db->get('tugas_akhir');
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
    public function show_userMhs()
    {
        $results = array();
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('role_id', 2);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $results = $query->result();
        }
        return $results;
    }
    public function show_userAdmin()
    {
        $results = array();
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('role_id', 1);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $results = $query->result();
        }
        return $results;
    }
    public function show_tugas_akhir()
    {
        $results = array();
        $this->db->select('*');
        $this->db->from('tugas_akhir');
        $this->db->join('mahasiswa', 'mahasiswa.user_id = tugas_akhir.user_id');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $results = $query->result();
        }
        return $results;
    }
    public function get_status_ta($id)
    {
        $query = $this->db->get_where('tugas_akhir_status', ['tugas_akhir_status.id' => $id]);

        return $query;
    }
    public function show_detail($id)
    {
        return $this->db->get_where('tugas_akhir', ['user_id' => $id])->row();
    }
    public function get_file($id)
    {
        return $this->db->get_where('file', ['user_id' => $id])->result_array();
    }
    public function get_mhs($id)
    {
        return $this->db->get_where('mahasiswa', ['user_id' => $id])->row();
    }
}
