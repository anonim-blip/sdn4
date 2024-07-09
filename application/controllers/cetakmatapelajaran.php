<?php
class Cetakmatapelajaran
 extends CI_Controller {

    function __construct() {
        parent::__construct();          
        $this->load->model('m_data'); // Memuat model 'm_data'
        $this->load->helper('url');
        $this->load->helper('form');
    }

    function index() {
        // Mengambil data matapelajaran dari model m_data
        $data['matapelajaran'] = $this->m_data->get_data('matapelajaran')->result(); // Menggunakan result() untuk mengambil semua baris data
        $this->load->view('cetakData/matapelajaran', $data); // Memuat view 'matapelajaran' dengan data yang diambil
    }
}
?>
