<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model {
    public function simpan(){
        $data = array(
            'nama'      => $this->input->post('nama'),
            'username'      => $this->input->post('username'),
            'password'      => md5($this->input->post('nama')),
            'level'      => $this->input->post('nama'),
        );
        $this->db->insert('user',$data);    
    }
}
