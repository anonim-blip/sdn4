1<?php

class Tambahnilai extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url');
        $this->load->helper('form');
    }

    function index() {
        $data = array();
        $data['username'] = $this->session->userdata('nama');
        $data['siswa'] = $this->m_data->get_all_siswa(); // Mendapatkan semua data siswa
        $this->load->view('dashboard/header', $data);
        $this->load->view('forminput/nilai', $data);
        $this->load->view('dashboard/footer', $data);
    }

    function tambah_aksi_nilai() {
        $nama_siswa = $this->input->post('nama_siswa');
        $nama_kelas = $this->input->post('nama_kelas');
        $nama_matapelajaran = $this->input->post('nama_matapelajaran');
        $nilai = $this->input->post('nilai');

        $data = array(
            'nama_siswa' => $nama_siswa,
            'nama_kelas' => $nama_kelas,
            'nama_matapelajaran' => $nama_matapelajaran,
            'nilai' => $nilai
        );

        $this->m_data->input_data($data, 'nilai'); // Menggunakan model m_data untuk menyimpan data ke tabel 'nilai'
        redirect('nilai'); // Redirect ke halaman CRUD setelah berhasil menambahkan data
    }

}

?>