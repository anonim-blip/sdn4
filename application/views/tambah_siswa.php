<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Form Siswa</h3>
      </div>
      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <?php echo form_open_multipart('upload/aksi_upload'); ?>
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search by username...." name="keyword">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Search!</button>
            </span>
          </div>
          <?php echo form_close(); ?>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Form Siswa <small> SDN 4 Tengguli</small></h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
    <div class="container">
        <h2>Form Tambah Data Siswa</h2>
        <?php echo form_open_multipart('tambahsiswa/tambah'); ?> <!-- tambahkan form_open_multipart untuk mengunggah file -->
        <div class="form-group">
            <label>Nama Siswa:</label>
            <input type="text" class="form-control" name="nama_siswa" required>
        </div>
        <div class="form-group">
            <label>NISN:</label>
            <input type="text" class="form-control" name="nisn" required>
        </div>
        <div class="form-group">
            <label>No Absensi:</label>
            <input type="text" class="form-control" name="no_absensi" required>
        </div>
        <div class="form-group">
            <label>Jenis Kelamin:</label>
            <select class="form-control" name="jk" required>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label>Alamat:</label>
            <textarea class="form-control" name="alamat" required></textarea>
        </div>
        <div class="form-group">
            <label>Tahun Ajar:</label>
            <input type="text" class="form-control" name="thn_ajar" required>
        </div>
        <div class="form-group">
            <label>Foto:</label>
            <input type="file" class="form-control-file" name="foto" accept="image/*">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <?php echo form_close(); ?>
    </div>
</div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->

