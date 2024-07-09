<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambahsiswa extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load model siswa_model.php
        $this->load->model('m_data');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('upload'); // Pastikan library upload dimuat
    }

    public function index() {
        // Tampilkan form tambah siswa
        $data['error'] = ''; // Inisialisasi variabel error
        $data['username'] = $this->session->userdata('nama');
        $this->load->view('dashboard/header', $data);
        $this->load->view('tambah_siswa', $data);
        $this->load->view('dashboard/footer');
    }

    public function tambah() {
        // Konfigurasi upload file
        $config['upload_path'] = './gambar/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = 2048;
        $config['file_name'] = 'siswa_' . time();

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('foto')) {
            // Jika upload gagal, tampilkan pesan error
            $error = array('error' => $this->upload->display_errors());
            $data['username'] = $this->session->userdata('nama');
            $this->load->view('dashboard/header', $data);
            $this->load->view('tambah_siswa', $error); // Menampilkan form kembali dengan pesan error
            $this->load->view('dashboard/footer');
        } else {
            // Jika upload berhasil, ambil data file foto
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name'];

            // Data siswa untuk disimpan ke database
            $data = array(
                'nama_siswa' => $this->input->post('nama_siswa'),
                'nisn' => $this->input->post('nisn'),
                'no_absensi' => $this->input->post('no_absensi'),
                'jk' => $this->input->post('jk'),
                'alamat' => $this->input->post('alamat'),
                'thn_ajar' => $this->input->post('thn_ajar'),
                'foto' => $file_name // simpan nama file foto ke dalam database
            );

            // Panggil method di model untuk menyimpan data
            $this->m_data->tambah_data($data);

            // Redirect ke halaman utama data siswa atau halaman yang sesuai
            redirect('siswa');
        }
    }
}
?>
