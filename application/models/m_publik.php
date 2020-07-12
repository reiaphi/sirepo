<?php
class M_publik extends CI_Model
{

    public function show_data()
    {
        return $this->db->get('tugas_akhir');
    }

    public function get_detail($id)
    {
        return $this->db->get_where('tugas_akhir', ['id' => $id])->row();
    }
    public function get_file($id)
    {
        return $this->db->get_where('file', ['ta_id' => $id])->result_array();
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
