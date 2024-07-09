<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Form Laporan</h3> <!-- Ubah judul sesuai dengan konteks laporan -->
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <?php echo form_open('cari'); ?> <!-- Ubah action form untuk pencarian -->
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search by username...." name="keyword">
            <span class="input-group-btn">
              <button class="btn btn-default" type="submit">Search!</button> <!-- Ubah type menjadi 'submit' -->
            </span>
          </div>
          <?php echo form_close(); ?> <!-- Tambahkan penutup form -->
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Data Laporan <small> SDN 4 Tengguli</small></h2> <!-- Ubah teks sesuai dengan konteks laporan -->
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="text-right mt-3">
               <!-- Ubah link untuk menambah data laporan -->
               <div class="text-right mt-3">
                  <!-- Ubah link untuk menambah data laporan -->
                  <?php echo anchor('cetak', '<i class="fa fa-print"></i> Cetak Data', ['class' => 'btn btn-info btn-sm']); ?>
            </div>

            <table id="datatable" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Siswa</th> <!-- Sesuaikan nama kolom dengan struktur tabel laporan -->
                  <th scope="col">NISN</th> <!-- Sesuaikan nama kolom dengan struktur tabel laporan -->
                  <th scope="col">No Absensi</th> <!-- Sesuaikan nama kolom dengan struktur tabel laporan -->
                  <th scope="col">Sekolah</th> <!-- Tambahkan kolom sekolah -->
                  <th scope="col">Nama Kelas</th> <!-- Tambahkan kolom nama kelas -->
                  <th scope="col">Semester</th> <!-- Tambahkan kolom semester -->
                  <th scope="col">Tahun Ajar</th>
                  <th scope="col">Mata Pelajaran</th> <!-- Tambahkan kolom mata pelajaran -->
                  <th scope="col">Nilai Akhir</th> <!-- Tambahkan kolom nilai akhir -->
                  <th scope="col">Capaian Kompetensi</th> <!-- Tambahkan kolom capaian kompetensi -->
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $no = 1;
                foreach($laporan as $l) { 
                ?>
                <tr>
                  <th scope="row"><?php echo $no++ ?></th>
                  <td><?php echo $l->nama_siswa ?></td>
                  <td><?php echo $l->nisn ?></td>
                  <td><?php echo $l->no_absensi ?></td>
                  <td><?php echo $l->sekolah ?></td> <!-- Tambahkan field sekolah -->
                  <td><?php echo $l->nama_kelas ?></td> <!-- Tambahkan field nama kelas -->
                  <td><?php echo $l->semester ?></td> <!-- Tambahkan field semester -->
                  <td><?php echo $l->thn_ajar ?></td>
                  <td><?php echo $l->nama_matapelajaran ?></td> <!-- Tambahkan field mata pelajaran -->
                  <td><?php echo $l->nilai_akhir ?></td> <!-- Tambahkan field nilai akhir -->
                  <td><?php echo $l->capaian_kompetensi ?></td> <!-- Tambahkan field capaian kompetensi -->
                  <td>
                    <?php echo anchor('laporan/edit/'.$l->id_laporan, 'Edit', ['class' => 'btn btn-warning btn-sm']); ?>
                    <?php echo anchor('laporan/hapus/'.$l->id_laporan, 'Hapus', ['class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure you want to delete this record?');"]); ?>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
              <tfoot>
                <tr>
                  <th colspan="11" class="text-right">Total Laporan:</th> <!-- Ubah teks dan jumlah kolom total -->
                  <th><?php echo count($laporan); ?></th> <!-- Ubah variabel dari $siswa menjadi $laporan -->
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
