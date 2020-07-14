<?php
class M_publik extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('download');
        $this->load->library('session');
        $data['user'] = $this->db->get_where('user', ['id' => $this->session->userdata('id')])->row_array();
    }
    public function show_data()
    {
        return $this->db->get('tugas_akhir');
    }

    public function get_detail($id)
    {
        return $this->db->get_where('tugas_akhir', ['id' => $id])->row();
    }
    // public function get_file($id)
    // {

    //     $query =  $this->db->get_where('file', ['ta_id' => $id])->row_array();
    //     var_dump($query);
    //     return $query;
    // }
    public function get_file($id)
    {

        $results = array();
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->join('file', 'mahasiswa.user_id = file.user_id');
        $this->db->where('mahasiswa.id', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $results = $query->result_array();
        }
        //var_dump($results);
        return $results;
    }
    public function show_ta($id)
    {
        $results = array();
        $this->db->select('*');
        $this->db->from('tugas_akhir');
        $this->db->join('mahasiswa', 'mahasiswa.user_id = tugas_akhir.user_id');
        $this->db->where('mahasiswa.id', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $results = $query->result_array();
        }
        //var_dump($results);
        return $results;
    }


    public function get_file_aplikasi($id)
    {
        $query = $this->db->get_where('file_aplikasi', ['ta_id' => $id])->row();
        var_dump($query);
        return $query;
    }

    function getRows($params = array())
    {
        $this->db->select('*');
        $this->db->from('file');
        //nanti diubah kalau status sudah diganti yaa
        $this->db->where('status', '1');
        $this->db->order_by('ta_id');
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
