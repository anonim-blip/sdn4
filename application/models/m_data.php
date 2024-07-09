<?php 

class M_data extends CI_Model {
    function tampil_data_guru() {
        return $this->db->get('guru');
    }

    function get_all_guru() {
        $query = $this->db->get('guru'); // Asumsikan 'guru' adalah nama tabel dalam database
        return $query->result();
    }

    function get_all_siswa() {
        $query = $this->db->get('siswa'); // Asumsikan 'siswa' adalah nama tabel dalam database
        return $query->result();
    }

    public function get_all_kelas() {
        $query = $this->db->get('kelas'); // Asumsikan 'kelas' adalah nama tabel dalam database
        return $query->result();
    }

    function get_all_nilai() {
        $query = $this->db->get('nilai'); // Asumsikan 'nilai' adalah nama tabel dalam database
        return $query->result();
    }

    // Method untuk mencari data berdasarkan keyword
    public function cari_guru($keyword) {
        $this->db->like('nama_guru', $keyword);
        $query = $this->db->get('guru');
        return $query->result();
    }

    public function cari_siswa($keyword) {
        $this->db->like('nama_siswa', $keyword);
        $query = $this->db->get('siswa');
        return $query->result(); // Mengembalikan hasil query dalam bentuk array of objects
    }
    public function cari_nilai($keyword) {
        $this->db->like('nama_siswa', $keyword);
        $query = $this->db->get('nilai');
        return $query->result(); // Mengembalikan hasil query dalam bentuk array of objects
    }

    public function cari_kelas($keyword) {
        $this->db->like('nama_kelas', $keyword);
        $query = $this->db->get('kelas');
        return $query->result();
    }

    public function cari_matapelajaran($keyword) {
        $this->db->like('nama_matapelajaran', $keyword);
        $query = $this->db->get('matapelajaran');
        return $query->result();
    }
     public function cari_laporan($keyword) {
        $this->db->like('nama_siswa', $keyword);
        $query = $this->db->get('laporan');
        return $query->result();
    }




     public function get_laporan_by_id($id) {
        $this->db->where('id_laporan', $id);
        $query = $this->db->get('laporan');
        return $query->row(); // Mengembalikan satu baris data
    }




    function input_data($data, $table) {
        $this->db->insert($table, $data);
    }

    function hapus_data($where, $table) {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data($where, $table) {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table) {
    $this->db->where($where);
    $this->db->update($table, $data);
}

    function update_nilai($id_nilai, $data) {
        $this->db->where('id_nilai', $id_nilai);
        $this->db->update('nilai', $data);
    }
    public function tambah_data($data) {
        // Simpan data siswa ke dalam tabel 'siswa' di database
        $this->db->insert('siswa', $data);
    }

    // Tabel data siswa
    function tampil_data_siswa() {
        return $this->db->get('siswa');
    }

    // Tabel data nilai
    function tampil_data_nilai() {
        return $this->db->get('nilai');
    }

    // Tabel data kelas
    function tampil_data_kelas() {
        return $this->db->get('kelas');
    }

    // Tabel data mata pelajaran
    function tampil_data_matapelajaran() {
        return $this->db->get('matapelajaran');
    }
    // Tabel data 
    function tampil_data_laporan() {
        return $this->db->get('laporan');
    }

    function get_data($table) {
        return $this->db->get($table);
    }
     function get_siswa_by_id($id){
        $this->db->where('id_siswa', $id);
        return $this->db->get('siswa')->row();
    }

    // Tambahkan method untuk update siswa
    function edit_siswa($id_siswa, $data) {
        $this->db->where('id_siswa', $id_siswa);
        $this->db->update('siswa', $data);
    }
}

?>
