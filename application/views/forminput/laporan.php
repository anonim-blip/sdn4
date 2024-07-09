<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Form Laporan</h3> <!-- Ubah judul sesuai dengan form untuk laporan -->
      </div>
      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <?php echo form_open('crud/search'); ?>
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
            <h2>Form Laporan <small>input data laporan</small></h2> <!-- Ubah judul sesuai dengan form untuk laporan -->
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
              <li><a class="close-link"><i class="fa fa-close"></i></a></li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <form id="adminForm" action="<?php echo base_url(). 'tambahlaporan/tambah_aksi_laporan'; ?>" method="post" class="form-horizontal form-label-left">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_absens">NOMOR ABSENSI <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="number" id="no_absensi" name="no_absensi" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_siswa">Nama Siswa <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="nama_siswa" name="nama_siswa" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nisn">NISN <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="nisn" name="nisn" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sekolah">Sekolah <span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                      <select id="sekolah" name="sekolah" required="required" class="form-control col-md-7 col-xs-12">
                          <option value="SDN 4 Tengguli">SDN 4 Tengguli</option>
                      </select>
                  </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_kelas">Nama Kelas</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="nama_kelas" name="nama_kelas" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="semester">Semester</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="radio">
                          <label>
                              <input type="radio" name="semester" value="1"> Semester 1
                          </label>
                      </div>
                      <div class="radio">
                          <label>
                              <input type="radio" name="semester" value="2"> Semester 2
                          </label>
                      </div>
                  </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="thn_ajar">Tahun Ajaran</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="number" id="thn_ajar" name="thn_ajar" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_matapelajaran">Nama Mata Pelajaran <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="nama_matapelajaran" name="nama_matapelajaran" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nilai_akhir">Nilai Akhir</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="nilai_akhir" name="nilai_akhir" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="capaian_kompetensi">Capaian Kompetensi</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="capaian_kompetensi" name="capaian_kompetensi" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button class="btn btn-primary" type="laporan"><a href="laporan" style="color: white;">Cancel</a></button> <!-- Ubah link Cancel -->
                  <button class="btn btn-primary" type="reset">Reset</button>
                  <button type="submit" class="btn btn-success">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
