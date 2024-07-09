<?php

class Tambahguru extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url');
        $this->load->helper('form');
    }

    function index() {
        $data = array();
        $data['username'] = $this->session->userdata('nama');
        $this->load->view('dashboard/header', $data);
        $this->load->view('forminput/guru');
        $this->load->view('dashboard/footer', $data);
    }

    function tambah_aksi_guru() {
        $nama_guru = $this->input->post('nama_guru');
        $nip = $this->input->post('nip');
        $ttl = $this->input->post('ttl');
        $jk = $this->input->post('jk');
        $agama = $this->input->post('agama');
        $ijazah = $this->input->post('ijazah');
        $jabatan = $this->input->post('jabatan');
        $mengajar_kelas = $this->input->post('mengajar_kelas');
        $jumlah_jam = $this->input->post('jumlah_jam');

        $data = array(
            'nama_guru' => $nama_guru,
            'nip' => $nip,
            'ttl' => $ttl,
            'jk' => $jk,
            'agama' => $agama,
            'ijazah' => $ijazah,
            'jabatan' => $jabatan,
            'mengajar_kelas' => $mengajar_kelas,
            'jumlah_jam' => $jumlah_jam
        );

        $this->m_data->input_data($data, 'guru'); // Menggunakan model m_data untuk menyimpan data ke tabel 'guru'
        redirect('guru'); // Redirect ke halaman CRUD setelah berhasil menambahkan data
    }

}

?>
