<?php 

class Data extends CI_Controller{

	function __construct()
	{
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');
		$this->load->helper('form');
	}

	//tabel 1
	function dataguru()
	{
		// memanggil tabel admin dan simpan $data
		$data['guru'] = $this->m_data->tampil_data_guru()->result();
		$data['username'] = $this->session->userdata('nama'); // Assuming 'nama' is the correct key

		$this->load->view('tabel/v_guru', $data);
	}

	function tambahguru()
	{
		$data = array(); // initialize $data to avoid undefined variable error
		$this->load->view('admin/v_header', $data);
		$this->load->view('forminput/v_input');
		$this->load->view('admin/v_footer', $data);
	}

	function tambah_aksi_guru()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$data = array(
			'username' => $username,
			'password' => md5($password)
		);
		$this->m_data->input_data($data, 'admin');
		redirect('crud/index');
	}

	function hapus($id)
	{
		$where = array('id' => $id);
		$this->m_data->hapus_data($where, 'admin');
		redirect('crud/index');
	}

	function edit($id)
	{
		$where = array('id' => $id);
		$data['admin'] = $this->m_data->edit_data($where, 'admin')->result();
		$this->load->view('admin/v_header', $data);
		$this->load->view('formedit/v_edit', $data);
		$this->load->view('admin/v_footer', $data);
	}

	function update()
	{
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$data = array(
			'username' => $username,
			'password' => md5($password)
		);

		$where = array(
			'id' => $id
		);

		$this->m_data->update_data($where, $data, 'admin');
		redirect('crud/index');
	}
	function cari() {
        $keyword = $this->input->get('keyword'); // Ambil kata kunci pencarian dari URL
        $data['admin'] = $this->m_data->cari_admin($keyword)->result(); // Panggil method cari_admin di model

        // Load kembali view v_admin.php dengan data hasil pencarian
        $this->load->view('admin/v_header', $data);
        $this->load->view('tabel/v_admin', $data);
        $this->load->view('admin/v_footer', $data);
    }
    function cetak_pdf(){
        $data['admin'] = $this->m_data->get_data('admin')->result();
        $this->load->view('v_admin_pdf', $data);
    }

    

 





	//tabel 2
	function tabelB()
	{
		// memanggil tabel desa dan simpan $data
		$data['desa'] = $this->m_data->tampil_desa()->result();
		$this->load->view('admin/v_header', $data);
		$this->load->view('tabel/v_desa', $data);
		$this->load->view('admin/v_footer', $data);
	}
	function cetak(){
        $data['desa'] = $this->m_data->get_data('desa')->result();
        $this->load->view('cetakData/v_cetak', $data);
    }
    function search(){
        $keyword = $this->input->post('keyword');
        $data['desa'] = $this->m_data->search_data($keyword);
        $this->load->view('admin/v_header');
        $this->load->view('tabel/v_desa',$data);
        $this->load->view('admin/v_footer');
    }





//tabel 3
	function tabelC()
	{
		// memanggil tabel kecamatan dan simpan $data
		$data['kecamatan'] = $this->m_data->tampil_kecamatan()->result();
		$this->load->view('admin/v_header', $data);
		$this->load->view('tabel/v_kecamatan', $data);
		$this->load->view('admin/v_footer', $data);
	}



//tabel 4
	function tabelD()
	{
		// memanggil tabel kabupaten_kota dan simpan $data
		$data['kabupaten_kota'] = $this->m_data->tampil_kabupaten_kota()->result();
		$this->load->view('admin/v_header', $data);
		$this->load->view('tabel/v_kabupaten_kota', $data);
		$this->load->view('admin/v_footer', $data);
	}




//tabel 5
	function tabelE()
	{
		// memanggil tabel penduduk_desa dan simpan $data
		$data['penduduk_desa'] = $this->m_data->tampil_penduduk_desa()->result();
		$this->load->view('admin/v_header', $data);
		$this->load->view('tabel/v_penduduk_desa', $data);
		$this->load->view('admin/v_footer', $data);
	}
}
?>
