<?php
class Cetakguru extends CI_Controller {

    function __construct() {
        parent::__construct();          
        $this->load->model('m_data'); // Memuat model 'm_data'
        $this->load->helper('url');
        $this->load->helper('form');
    }

    function index() {
        // Mengambil data guru dari model m_data
        $data['guru'] = $this->m_data->get_data('guru')->result(); // Menggunakan result() untuk mengambil semua baris data
        $this->load->view('cetakData/guru', $data); // Memuat view 'guru' dengan data yang diambil
    }
}
?>
