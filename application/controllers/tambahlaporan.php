<?php

class Tambahlaporan extends CI_Controller {

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
        $this->load->view('forminput/laporan', $data); // Ubah view sesuai dengan form untuk laporan
        $this->load->view('dashboard/footer', $data);
    }

    function tambah_aksi_laporan() {
        $id_laporan = $this->input->post('id_laporan');
        $no_absensi = $this->input->post('no_absensi');
        $nama_siswa = $this->input->post('nama_siswa');
        $nisn = $this->input->post('nisn');
        $sekolah = $this->input->post('sekolah');
        $nama_kelas = $this->input->post('nama_kelas');
        $semester = $this->input->post('semester');
        $thn_ajar = $this->input->post('thn_ajar');
        $nama_matapelajaran = $this->input->post('nama_matapelajaran');
        $nilai_akhir = $this->input->post('nilai_akhir');
        $capaian_kompetensi = $this->input->post('capaian_kompetensi');

        $data = array(
            'id_laporan' => $id_laporan,
            'no_absensi' => $no_absensi,
            'nama_siswa' => $nama_siswa,
            'nisn' => $nisn,
            'sekolah' => $sekolah,
            'nama_kelas' => $nama_kelas,
            'semester' => $semester,
            'thn_ajar' => $thn_ajar,
            'nama_matapelajaran' => $nama_matapelajaran,
            'nilai_akhir' => $nilai_akhir,
            'capaian_kompetensi' => $capaian_kompetensi
        );

        $this->m_data->input_data($data, 'laporan'); // Menggunakan model m_data untuk menyimpan data ke tabel 'laporan'
        redirect('laporan'); // Redirect ke halaman CRUD setelah berhasil menambahkan data
    }

}

?>
