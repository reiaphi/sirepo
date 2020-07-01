<?php
class M_publik extends CI_Model
{

    public function show_data()
    {
        return $this->db->get('tugas_akhir');
    }
    public function get_detail($id)
    {
        return $this->db->get_where('tugas_akhir', array('id' => $id))->row();
    }
}
