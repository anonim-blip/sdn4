<?php
class Admin extends CI_Controller {
    
    function __construct() {
        parent::__construct();

        // Check session status, redirect to login if not logged in
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
        
        // Load the model
        $this->load->model('m_data');
    }
    
    function index() {
    // Load necessary data for the view
    $data['judul'] = "Halaman depan";
    $data['username'] = $this->session->userdata('nama'); // Assuming 'nama' is the correct key
    $data['guru'] = $this->m_data->get_all_guru();
    $data['siswa'] = $this->m_data->get_all_siswa();
    $data['kelas'] = $this->m_data->get_all_kelas();  // Assuming this method exists in your model
    $data['nilai'] = $this->m_data->get_all_nilai(); 
    
    // Hitung total nilai
    $total_nilai = 0;
    foreach ($data['nilai'] as $n) {
        $total_nilai += $n->nilai;
    }
    
    // Tambahkan total nilai ke dalam data yang dikirimkan ke view
    $data['total_nilai'] = $total_nilai;
    
    // Load the view with data
    $this->load->view('dashboard/dashboard', $data);
}

}
?>
