<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('User_model');
        if($this->session->userdata('level')<>'admin'){
            redirect('auth');
        }
    }
	public function index(){
        $this->db->from('user');
        $this->db->order_by('nama','ASC');
        $user = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'Data Pengguna',
            'user'          => $user
        );
		$this->template->load('template_admin','admin/user_index',$data);
	}
    public function simpan(){
        $this->db->from('user');
        $this->db->where('username',$this->input->post('username'));
        $cek = $this->db->get()->result_array();
        if($cek<>NULL){
            $this->session->set_flashdata('alert', '
            <div class="alert alert-dark alert-dismissible fade show mb-0" role="alert">
                Username Sudah Ada!!!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        ');
        redirect('admin/user');
    }
    $data = array(
        'nama'      => $this->input->post('nama'),
        'username'      => $this->input->post('username'),
        'password'      => md5($this->input->post('nama')),
        'level'      => $this->input->post('nama'),
    );
    $this->db->insert('user',$data); 
        $this->session->set_flashdata('alert', '
        <div class="alert alert-dark alert-dismissible fade show mb-0" role="alert">
            Berhasil Menambahkan User!!!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    ');
    redirect('admin/user');
    }
    public function delete_data($id){
        $where = array(
            'id_user'       => $id
        );
        $this->db->delete('user',$where);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-dark alert-dismissible fade show mb-0" role="alert">
            Berhasil Menghapus User!!!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    ');
    redirect('admin/user');
    }
    public function update(){
        $where = array(
            'id_user'   => $this->input->post('id_user')
        );
        $data = array(
            'nama'      => $this->input->post('nama')
        );
        $this->db->update('user',$data,$where);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-dark alert-dismissible fade show mb-0" role="alert">
            Berhasil Memperbarui User!!!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    ');
    redirect('admin/user');
    }
}
