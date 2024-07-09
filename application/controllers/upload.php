<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->database();
    }

    public function index() {
        $data['username'] = $this->session->userdata('nama');
        $this->load->view('dashboard/header', $data);
        $this->load->view('uploadData/v_upload', array('error' => ' ' ));
        $this->load->view('dashboard/footer');
    }

    public function aksi_upload() {
        $data['username'] = $this->session->userdata('nama');
        $config['upload_path'] = './gambar/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2048; // 2MB maksimum ukuran file
        $config['encrypt_name'] = TRUE; // Enkripsi nama file untuk menghindari duplikasi

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('foto')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('dashboard/header', $data);
            $this->load->view('uploadData/v_upload', $error);
            $this->load->view('dashboard/footer');
        } else {
            $data_upload = array('upload_data' => $this->upload->data());

            // Ambil nama file yang di-upload
            $file_name = $data_upload['upload_data']['file_name'];
            $file_path = 'gambar/' . $file_name;

            // Ambil data siswa dari form
            $nama_siswa = $this->input->post('nama_siswa');
            $nisn = $this->input->post('nisn');
            $no_absensi = $this->input->post('no_absensi');
            $jk = $this->input->post('jk');
            $alamat = $this->input->post('alamat');
            $thn_ajar = $this->input->post('thn_ajar');

            // Masukkan data siswa beserta foto ke database
            $data_insert = array(
                'nama_siswa' => $nama_siswa,
                'nisn' => $nisn,
                'no_absensi' => $no_absensi,
                'jk' => $jk,
                'alamat' => $alamat,
                'thn_ajar' => $thn_ajar,
                'foto' => $file_path // Simpan path foto ke dalam tabel siswa
            );

            if ($this->db->insert('siswa', $data_insert)) {
                echo "Data berhasil disimpan ke database.";
            } else {
                echo "Gagal menyimpan data ke database.";
            }

            // Redirect ke halaman siswa setelah sukses upload
            redirect('siswa');
        }
    }

}
?>
