<?php 

class Kelas extends CI_Controller{

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
		$data['kelas'] = $this->m_data->tampil_data_kelas()->result();
		$data['username'] = $this->session->userdata('nama');
		$this->load->view('dashboard/header', $data);
		$this->load->view('tabel/kelas', $data);
		$this->load->view('dashboard/footer', $data);
	}

	public function edit($id_kelas) {
    // Method untuk menampilkan form edit kelas berdasarkan $id_kelas
    $where = array('id_kelas' => $id_kelas);
    $data['username'] = $this->session->userdata('nama');
    $data['kelas'] = $this->m_data->edit_data($where, 'kelas')->row(); // Mengambil data kelas dari model m_data

    // Pastikan data kelas ditemukan sebelum ditampilkan
    if ($data['kelas']) {
        // Load view untuk form edit kelas
        $this->load->view('formedit/kelas', $data); // Sesuaikan dengan nama file view yang digunakan
    } else {
        // Tampilkan pesan error atau redirect ke halaman lain jika data tidak ditemukan
        echo "Data kelas tidak ditemukan."; // Misalnya
    }
}

    function update() {
        // Method untuk memproses update data kelas
        $id_kelas = $this->input->post('id_kelas'); // Ambil nilai id_kelas dari input dengan nama 'id_kelas' di form
        $nama_kelas = $this->input->post('nama_kelas');
        $wali_kelas = $this->input->post('wali_kelas');
        $jumlah_siswa = $this->input->post('jumlah_siswa');

        // Data yang akan diupdate
        $data = array(
            'nama_kelas' => $nama_kelas,
            'wali_kelas' => $wali_kelas,
            'jumlah_siswa' => $jumlah_siswa
        );

        // Kondisi untuk mencari data yang akan diupdate (berdasarkan id_kelas)
        $where = array(
            'id_kelas' => $id_kelas
        );

        // Panggil model untuk melakukan update data kelas
        $this->m_data->update_data($where, $data, 'kelas'); // Sesuaikan dengan nama model dan nama tabel kelas

        // Redirect ke halaman kelas setelah proses update
        redirect('kelas');
    }
    function hapus($id) {
        $where = array('id_kelas' => $id);
        $this->m_data->hapus_data($where, 'kelas');
        redirect('kelas');
    }
    function cari() {
        $keyword = $this->input->get('keyword');
        $data['kelas'] = $this->m_data->cari_kelas($keyword)->result();
        $this->load->view('dashboard/header', $data);
        $this->load->view('tabel/kelas', $data);
        $this->load->view('dashboard/footer', $data);
    }

}
?>