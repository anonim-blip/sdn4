<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carikelas extends CI_Controller {

    function __construct() {
        parent::__construct();      
        $this->load->model('m_data');
        $this->load->helper('url');
        $this->load->helper('form');
    }

    public function index() {
        // Tangkap data keyword dari form pencarian
        $keyword = $this->input->post('keyword');

        // Panggil method cari_kelas dari model M_data untuk mencari kelas berdasarkan nama
        $data['kelas'] = $this->m_data->cari_kelas($keyword);

        // Ambil data username dari session
        $data['username'] = $this->session->userdata('nama');

        // Load view dengan hasil pencarian
        $this->load->view('dashboard/header', $data); // Kirim $data ke view 'dashboard/header.php'
        $this->load->view('tabel/kelas', $data); // Kirim $data ke view 'tabel/kelas.php'
        $this->load->view('dashboard/footer');
    }
}
?>
