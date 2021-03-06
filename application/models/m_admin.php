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
        $this->hapus_tabel('mahasiswa');
        $this->hapus_tabel('file');
        $this->hapus_tabel('tugas_akhir');
    }
    private function hapus_tabel($table)
    {
        $where = array('user_id' => $this->session->userdata('id'));
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
    public function aprove_file_laporan($id, $kategori)
    {
        $this->db->set('file', $kategori);
        $this->db->where('id', $id);
        $this->db->update('file');
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
        //var_dump($results);
        return $results;
    }
    public function show_file_aplikasi()
    {
        $results = array();
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->join('file_aplikasi', 'mahasiswa.user_id = file_aplikasi.user_id');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $results = $query->result();
        }
        //var_dump($results);
        return $results;
    }
    public function get_status_ta($id)
    {
        $query = $this->db->get_where('tugas_akhir_status', ['tugas_akhir_status.id' => $id]);

        return $query;
    }
    public function show_detail($id)
    {
        $query = $this->db->get_where('tugas_akhir', ['user_id' => $id])->row();
        //var_dump($query);
        return $query;
    }
    public function get_file($id)
    {
        $query = $this->db->get_where('file', ['user_id' => $id])->result_array();
        //var_dump($query);
        return $query;
    }
    public function get_file_app($id)
    {
        return $this->db->get_where('file_aplikasi', ['user_id' => $id])->row();
    }
    public function get_mhs($id)
    {
        $query = $this->db->get_where('mahasiswa', ['user_id' => $id])->row();
        //var_dump($query);
        return $query;
    }
    public function get_mhs_email($id)
    {

        return $this->db->get_where('mahasiswa', ['id' => $id])->row();
    }
    function getRows($params = array())
    {
        $this->db->select('*');
        $this->db->from('file_aplikasi');
        //nanti diubah kalau status sudah diganti yaa

        if (array_key_exists('name', $params) && !empty($params['name'])) {
            $this->db->where('name', $params['name']);
            //get records
            $query = $this->db->get();
            $result = ($query->num_rows() > 0) ? $query->row_array() : FALSE;
        } else {
            //set start and limit
            if (array_key_exists("start", $params) && array_key_exists("limit", $params)) {
                $this->db->limit($params['limit'], $params['start']);
            } elseif (!array_key_exists("start", $params) && array_key_exists("limit", $params)) {
                $this->db->limit($params['limit']);
            }
            //get records
            $query = $this->db->get();
            $result = ($query->num_rows() > 0) ? $query->result_array() : FALSE;
        }
        //return fetched data
        return $result;
    }
}
