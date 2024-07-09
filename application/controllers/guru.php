<?php 

class Guru extends CI_Controller {

    function __construct() {
        parent::__construct();      
        $this->load->model('m_data');
        $this->load->helper('url');
        $this->load->helper('form');
    }

    function index() {
        $data['guru'] = $this->m_data->tampil_data_guru()->result();
        $data['username'] = $this->session->userdata('nama');
        $this->load->view('dashboard/header', $data);
        $this->load->view('tabel/guru', $data);
        $this->load->view('dashboard/footer', $data);
    }

    function hapus($id) {
        $where = array('no' => $id);
        $this->m_data->hapus_data($where, 'guru');
        redirect('guru');
    }

    function edit($id) {
        $where = array('no' => $id);
        $data['username'] = $this->session->userdata('nama');
        $data['guru'] = $this->m_data->edit_data($where, 'guru')->result();
        $this->load->view('formedit/guru', $data);
    }

    public function update() {
    $id = $this->input->post('id');
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

    $where = array(
        'no' => $id
    );

    $this->m_data->update_data($where, $data, 'guru');
    redirect('guru');
}



    function cetak_pdf() {
        $data['guru'] = $this->m_data->get_data('guru')->result();
        $this->load->view('v_guru_pdf', $data);
    }
}
?>
