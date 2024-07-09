<?php
class Cetakkelas extends CI_Controller {

    function __construct() {
        parent::__construct();          
        $this->load->model('m_data'); // Memuat model 'm_data'
        $this->load->helper('url');
        $this->load->helper('form');
    }

    function index() {
        // Mengambil data kelas dari model m_data
        $data['kelas'] = $this->m_data->get_data('kelas')->result(); // Menggunakan result() untuk mengambil semua baris data
        $this->load->view('cetakData/kelas', $data); // Memuat view 'kelas' dengan data yang diambil
    }
}
?>
