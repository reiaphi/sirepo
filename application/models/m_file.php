<?php 
class M_file extends CI_Model{
    function __construct() {
        parent::__construct();
        }
    
    public function input_data($data, $table){
        $this->db->insert($table, $data);
    }
}