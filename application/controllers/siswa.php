<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url');
        $this->load->helper('form');
    }

    // Display all students
    function index() {
        $data['siswa'] = $this->m_data->tampil_data_siswa()->result();
        $data['username'] = $this->session->userdata('nama');
        $this->load->view('dashboard/header', $data);
        $this->load->view('tabel/siswa', $data);
        $this->load->view('dashboard/footer', $data);
    }

    // Delete student
    function hapus($id) {
        $where = array('id_siswa' => $id);
        $this->m_data->hapus_data($where, 'siswa');
        redirect('siswa');
    }

    // Edit student
    function edit($id) {
        $where = array('id_siswa' => $id);
        $data['username'] = $this->session->userdata('nama');
        $data['siswa'] = $this->m_data->edit_data($where, 'siswa')->result();
        $this->load->view('formedit/siswa', $data);
    }

    function update() {
    $id_siswa = $this->input->post('id_siswa'); // Retrieve student ID from POST data
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve form data
        $data = array(
            'nama_siswa' => $this->input->post('nama_siswa'),
            'nisn' => $this->input->post('nisn'),
            'no_absensi' => $this->input->post('no_absensi'),
            'jk' => $this->input->post('jk'),
            'alamat' => $this->input->post('alamat'),
            'thn_ajar' => $this->input->post('thn_ajar')
        );

        // Handle photo upload if provided
        if (!empty($_FILES['foto']['name'])) {
            $config['upload_path'] = './gambar/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 2048;
            $config['file_name'] = 'siswa_' . time();

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                $upload_data = $this->upload->data();
                $foto = $upload_data['file_name'];

                // Delete old photo if exists
                $siswa = $this->m_data->get_siswa_by_id($id_siswa);
                if ($siswa->foto && file_exists('./gambar/' . $siswa->foto)) {
                    unlink('./gambar/' . $siswa->foto);
                }

                $data['foto'] = $foto; // Update new photo file name
            } else {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('formedit/siswa', $error);
                return;
            }
        }

        // Update student data
        $this->m_data->edit_siswa($id_siswa, $data);
        redirect('siswa');
    } else {
        // If not a POST request, load edit student page
        $data['siswa'] = $this->m_data->get_siswa_by_id($id_siswa);
        $this->load->view('formedit/siswa', $data);
    }
}

    // Search for students
    function cari() {
        $keyword = $this->input->get('keyword');
        $data['siswa'] = $this->m_data->cari_siswa($keyword)->result();
        $data['username'] = $this->session->userdata('nama');
        $this->load->view('dashboard/header', $data);
        $this->load->view('tabel/siswa', $data);
        $this->load->view('dashboard/footer', $data);
    }

}
