<?php
class Cetaknilai extends CI_Controller {

    function __construct() {
        parent::__construct();          
        $this->load->model('m_data'); // Memuat model 'm_data'
        $this->load->helper('url');
        $this->load->helper('form');
    }

    function index() {
        // Mengambil data nilai dari model m_data
        $data['nilai'] = $this->m_data->get_data('nilai')->result(); // Menggunakan result() untuk mengambil semua baris data
        $this->load->view('cetakData/nilai', $data); // Memuat view 'nilai' dengan data yang diambil
    }
}
?>
