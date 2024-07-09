<?php
class Cetak extends CI_Controller {

    function __construct() {
        parent::__construct();          
        $this->load->model('m_data'); // Memuat model 'm_data'
        $this->load->helper('url');
        $this->load->helper('form');
    }

    function index() {
        // Mengambil data laporan dari model m_data
        $data['laporan'] = $this->m_data->get_data('laporan')->row(); // Menggunakan row() karena kita ingin satu baris data
        $this->load->view('cetakData/laporan', $data); // Memuat view 'laporan' dengan data yang diambil
    }
}
?>
