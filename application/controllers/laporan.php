<?php

class Laporan extends CI_Controller{

    function __construct()
    {
        parent::__construct();      
        $this->load->model('m_data'); // Sesuaikan dengan nama model yang digunakan
        $this->load->helper('url');
        $this->load->helper('form');
    }

    function index()
    {
        $data['laporan'] = $this->m_data->tampil_data_laporan()->result(); // Sesuaikan dengan metode yang digunakan pada model untuk menampilkan data
        $data['username'] = $this->session->userdata('nama');
        $this->load->view('dashboard/header', $data);
        $this->load->view('tabel/laporan', $data); // Sesuaikan dengan nama file view yang digunakan untuk tabel laporan
        $this->load->view('dashboard/footer', $data);
    }

    function hapus($id) {
        $where = array('id_laporan' => $id); // Sesuaikan dengan nama kolom yang ada di tabel laporan
        $this->m_data->hapus_data($where, 'laporan'); // Sesuaikan dengan nama model dan nama tabel laporan
        redirect('laporan');
    }

    function edit($id) {
        $where = array('id_laporan' => $id); // Sesuaikan dengan nama kolom yang ada di tabel laporan
        $data['username'] = $this->session->userdata('nama');
        $data['laporan'] = $this->m_data->edit_data($where, 'laporan')->result(); // Sesuaikan dengan nama model dan nama tabel laporan
        $this->load->view('formedit/laporan', $data); // Sesuaikan dengan nama file view yang digunakan
    }

    function update() {
        $id = $this->input->post('id_laporan'); // Ambil nilai id dari input dengan nama 'id' di form
        $nama_siswa = $this->input->post('nama_siswa');
        $nisn = $this->input->post('nisn');
        $no_absensi = $this->input->post('no_absensi');
        $sekolah = $this->input->post('sekolah');
        $nama_kelas = $this->input->post('nama_kelas');
        $semester = $this->input->post('semester');
        $thn_ajar = $this->input->post('thn_ajar');
        $nama_matapelajaran = $this->input->post('nama_matapelajaran');
        $nilai_akhir = $this->input->post('nilai_akhir');
        $capaian_kompetensi = $this->input->post('capaian_kompetensi');

        // Data yang akan diupdate
        $data = array(
            'nama_siswa' => $nama_siswa,
            'nisn' => $nisn,
            'no_absensi' => $no_absensi,
            'sekolah' => $sekolah,
            'nama_kelas' => $nama_kelas,
            'semester' => $semester,
            'thn_ajar' => $thn_ajar,
            'nama_matapelajaran' => $nama_matapelajaran,
            'nilai_akhir' => $nilai_akhir,
            'capaian_kompetensi' => $capaian_kompetensi
        );

        // Kondisi untuk mencari data yang akan diupdate (berdasarkan id)
        $where = array(
            'id_laporan' => $id
        );

        // Panggil model untuk melakukan update data
        $this->m_data->update_data($where, $data, 'laporan'); // Sesuaikan dengan nama model dan nama tabel laporan

        // Redirect ke halaman laporan setelah proses update
        redirect('laporan');
    }

    function cari() {
        $keyword = $this->input->get('keyword');
        $data['laporan'] = $this->m_data->cari_laporan($keyword)->result(); // Sesuaikan dengan nama model dan metode pencarian yang digunakan
        $this->load->view('dashboard/header', $data);
        $this->load->view('tabel/laporan', $data); // Sesuaikan dengan nama file view yang digunakan untuk tabel laporan
        $this->load->view('dashboard/footer', $data);
    }
}

?>
