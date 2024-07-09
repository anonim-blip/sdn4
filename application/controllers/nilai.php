<?php 

class Nilai extends CI_Controller{

	function __construct()
	{
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');
		$this->load->helper('form');
	}

	//tabel 1
	function index()
	{
		// memanggil tabel admin dan simpan $data
		$data['nilai'] = $this->m_data->tampil_data_nilai()->result();
		$data['username'] = $this->session->userdata('nama');
		$this->load->view('dashboard/header', $data);
		$this->load->view('tabel/nilai', $data);
		$this->load->view('dashboard/footer', $data);
	}

	function tambahnilai()
	{
		$data = array(); // initialize $data to avoid undefined variable error
		$data['username'] = $this->session->userdata('nama');
		$this->load->view('dashboard/header', $data);
		$this->load->view('forminput/nilai');
		$this->load->view('dashboard/footer', $data);
	}
	function hapus($id) {
        $where = array('id_nilai' => $id);
        $this->m_data->hapus_data($where, 'nilai');
        redirect('nilai');
    }
    function edit($id) {
    $where = array('id_nilai' => $id); // Sesuaikan dengan nama kolom yang ada di tabel nilai
    $data['username'] = $this->session->userdata('nama');
    $data['nilai'] = $this->m_data->edit_data($where, 'nilai')->result(); // Sesuaikan dengan nama model dan tabel nilai
    $this->load->view('formedit/nilai', $data); // Sesuaikan dengan nama file view yang digunakan
	}

	function update() {
    $id_nilai = $this->input->post('id_nilai');
        $nama_siswa = $this->input->post('nama_siswa');
        $nama_kelas = $this->input->post('nama_kelas');
        $nama_matapelajaran = $this->input->post('nama_matapelajaran');
        $nilai = $this->input->post('nilai');

        // Validasi data
        if (empty($nama_siswa) || empty($nama_kelas) || empty($nama_matapelajaran) || empty($nilai)) {
            // Redirect with an error message if any field is empty
            $this->session->set_flashdata('error', 'Semua kolom harus diisi.');
            redirect('nilai/edit/' . $id_nilai);
        }

        $data = array(
            'nama_siswa' => $nama_siswa,
            'nama_kelas' => $nama_kelas,
            'nama_matapelajaran' => $nama_matapelajaran,
            'nilai' => $nilai
        );

        // Memanggil model untuk update data nilai
        $this->m_data->update_nilai($id_nilai, $data);
        redirect('nilai'); // Redirect ke halaman daftar nilai setelah berhasil update
    }

	function cari() {
        $keyword = $this->input->get('keyword');
        $data['nilai'] = $this->m_data->cari_nilai($keyword)->result();
        $this->load->view('dashboard/header', $data);
        $this->load->view('tabel/nilai', $data);
        $this->load->view('dashboard/footer', $data);
    }



}
?>