<?php

class Tambahmatapelajaran extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_data'); // Load model m_data untuk akses database
        $this->load->helper('url');
        $this->load->helper('form');
    }

    function index() {
        $data = array();
        $data['username'] = $this->session->userdata('nama');
        $this->load->view('dashboard/header', $data);
        $this->load->view('forminput/matapelajaran'); // Load view untuk form input mata pelajaran
        $this->load->view('dashboard/footer', $data);
    }

    function tambah_aksi_matapelajaran() {
        $id_matapelajaran = $this->input->post('id_matapelajaran');
        $nama_matapelajaran = $this->input->post('nama_matapelajaran');
        $nama_guru = $this->input->post('nama_guru'); // Perhatikan bahwa nama guru masih diinput, tetapi tidak digunakan dalam tabel matapelajaran

        $data = array(
            'id_matapelajaran' => $id_matapelajaran,
            'nama_matapelajaran' => $nama_matapelajaran,
            'nama_guru' => $nama_guru // Simpan nama guru meskipun tidak digunakan dalam tabel matapelajaran
        );

        $this->m_data->input_data($data, 'matapelajaran'); // Gunakan model m_data untuk menyimpan data ke tabel 'matapelajaran'
        redirect('matapelajaran'); // Redirect ke halaman CRUD mata pelajaran setelah berhasil menambahkan data
    }

}

?>
