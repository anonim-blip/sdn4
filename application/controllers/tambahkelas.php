<?php

class Tambahkelas extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_data'); // Memuat model m_data
        $this->load->helper('url'); // Memuat helper URL untuk redirect
        $this->load->helper('form'); // Memuat helper Form untuk form input
    }

    function index() {
        $data = array();
        $data['username'] = $this->session->userdata('nama');
        $this->load->view('dashboard/header', $data); // Memuat header dashboard
        $this->load->view('forminput/kelas'); // Memuat view form untuk input kelas
        $this->load->view('dashboard/footer', $data); // Memuat footer dashboard
    }

    function tambah_aksi_kelas() {
        $id_kelas = $this->input->post('id_kelas');
        $nama_kelas = $this->input->post('nama_kelas');
        $wali_kelas = $this->input->post('wali_kelas');
        $jumlah_siswa = $this->input->post('jumlah_siswa');

        $data = array(
            'id_kelas' => $id_kelas,
            'nama_kelas' => $nama_kelas,
            'wali_kelas' => $wali_kelas,
            'jumlah_siswa' => $jumlah_siswa
        );

        $this->m_data->input_data($data, 'kelas'); // Memanggil model m_data untuk menyimpan data ke tabel 'kelas'
        redirect('kelas'); // Redirect ke halaman CRUD setelah berhasil menambahkan data
    }

}

?>
