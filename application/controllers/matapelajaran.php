<?php 

class Matapelajaran extends CI_Controller{

	function __construct()
	{
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');
		$this->load->helper('form');
	}

	function index()
	{
		$data['matapelajaran'] = $this->m_data->tampil_data_matapelajaran()->result();
		$data['username'] = $this->session->userdata('nama');
		$this->load->view('dashboard/header', $data);
		$this->load->view('tabel/matapelajaran', $data);
		$this->load->view('dashboard/footer', $data);
	}

	function hapus($id) {
        $where = array('id_matapelajaran' => $id);
        $this->m_data->hapus_data($where, 'matapelajaran');
        redirect('matapelajaran');
    }

    function cari() {
        $keyword = $this->input->get('keyword');
        $data['matapelajaran'] = $this->m_data->cari_matapelajaran($keyword)->result();
        $this->load->view('dashboard/header', $data);
        $this->load->view('tabel/matapelajaran', $data);
        $this->load->view('dashboard/footer', $data);
    }

	public function edit($id) {
    // Method untuk menampilkan form edit matapelajaran berdasarkan $id
    $where = array('id_matapelajaran' => $id);
    $data['username'] = $this->session->userdata('nama');
    $data['matapelajaran'] = $this->m_data->edit_data($where, 'matapelajaran')->result(); // Mengambil data matapelajaran dari model m_data

    // Pastikan data matapelajaran ditemukan sebelum ditampilkan
    if (!empty($data['matapelajaran'])) {
        // Load view untuk form edit matapelajaran
        $this->load->view('formedit/matapelajaran', $data); // Sesuaikan dengan nama file view yang digunakan
    } else {
        // Tampilkan pesan error atau redirect ke halaman lain jika data tidak ditemukan
        echo "Data matapelajaran tidak ditemukan."; // Misalnya
    }
    }



    function update() {
        // Method untuk memproses update data matapelajaran
        $id_matapelajaran = $this->input->post('id'); // Ambil nilai id_matapelajaran dari input dengan nama 'id_matapelajaran' di form
        $nama_matapelajaran = $this->input->post('nama_matapelajaran');
        $nama_guru = $this->input->post('nama_guru');

        // Data yang akan diupdate
        $data = array(
            'nama_matapelajaran' => $nama_matapelajaran,
            'nama_guru' => $nama_guru,
            // Tambahkan field lainnya sesuai kebutuhan
        );

        // Kondisi untuk mencari data yang akan diupdate (berdasarkan id_matapelajaran)
        $where = array(
            'id_matapelajaran' => $id_matapelajaran
        );

        // Panggil model untuk melakukan update data matapelajaran
        $this->m_data->update_data($where, $data, 'matapelajaran'); // Sesuaikan dengan nama model dan nama tabel matapelajaran

        // Redirect ke halaman matapelajaran setelah proses update
        redirect('matapelajaran');
    }


}
?>
