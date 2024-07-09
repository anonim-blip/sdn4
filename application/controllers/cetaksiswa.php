<?php
class Cetaksiswa extends CI_Controller {

    function __construct() {
        parent::__construct();          
        $this->load->model('m_data'); // Memuat model 'm_data'
        $this->load->helper('url');
        $this->load->helper('form');
    }

    function index() {
        // Mengambil data siswa dari model m_data
        $data['siswa'] = $this->m_data->get_data('siswa')->result(); // Menggunakan result() untuk mengambil semua baris data
        $this->load->view('cetakData/siswa', $data); // Memuat view 'siswa' dengan data yang diambil
    }
}
?>
