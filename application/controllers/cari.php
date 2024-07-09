<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cari extends CI_Controller {

    function __construct() {
        parent::__construct();      
        $this->load->model('m_data');
        $this->load->helper('url');
        $this->load->helper('form');
    }

    public function index() {
        // Tangkap data keyword dari form pencarian
        $keyword = $this->input->post('keyword');

        // Panggil method cari_laporan dari model M_data untuk mencari laporan berdasarkan nama
        $data['laporan'] = $this->m_data->cari_laporan($keyword);

        // Ambil data username dari session
        $data['username'] = $this->session->userdata('nama');

        // Load view dengan hasil pencarian
        $this->load->view('dashboard/header', $data); // Kirim $data ke view 'dashboard/header.php'
        $this->load->view('tabel/laporan', $data); // Kirim $data ke view 'tabel/laporan.php'
        $this->load->view('dashboard/footer');
    }
}
?>
