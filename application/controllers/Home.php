<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();

        $this->db->from('carousel');
        $carousel = $this->db->get()->result_array();
    
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array(); // Hasil query disimpan ke $kategori
        $this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
        $this->db->order_by('tanggal','DESC');
        $konten = $this->db->get()->result_array();
        $data = array(
            'judul' => 'Beranda | Yudha',
            'konfig' => $konfig,
            'kategori' => $kategori,
            'carousel'  => $carousel,
            'konten'    => $konten,
        );
    
        $this->load->view('beranda', $data);
    }    
    public function artikel($id){
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
    
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array(); // Hasil query disimpan ke $kategori
        $this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
        $this->db->where('slug',$id);
        $konten = $this->db->get()->row();
        $data = array(
            'judul' => $konten->judul." | Yudha",
            'konfig' => $konfig,
            'kategori' => $kategori,
            'konten'    => $konten,
        );
    
        $this->load->view('detail', $data);
    }
    public function kategori($id){
        $this->db->from('konfigurasi');
        $konfig = $this->db->get()->row();
    
        $this->db->from('carousel');
        $carousel = $this->db->get()->result_array();
    
        $this->db->from('kategori'); // Get all categories
        $kategori = $this->db->get()->result_array();
    
        $this->db->from('konten a'); // Get content based on category ID
        $this->db->join('kategori b', 'a.id_kategori = b.id_kategori', 'left');
        $this->db->join('user c', 'a.username = c.username', 'left');
        $this->db->where('a.id_kategori', $id);
        $konten = $this->db->get()->result_array();
    
        $this->db->from('kategori');
        $this->db->where('id_kategori', $id);
        $kategori_query = $this->db->get()->row();
    
        // Check if the category exists
        if ($kategori_query) {
            $nama_kategori = $kategori_query->nama_kategori;
        } else {
            // Redirect or show an error if the category doesn't exist
            show_404(); // or handle it in another way
            return;
        }
    
        $data = array(
            'judul' => $nama_kategori . " | Yudha",
            'nama_kategori' => $nama_kategori,
            'konfig' => $konfig,
            'kategori' => $kategori,
            'konten' => $konten,
        );
    
        $this->load->view('kategori', $data);
    }
    
}
