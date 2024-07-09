<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Form Siswa</h3>
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
            <h2>Form Siswa <small>Input Data Siswa</small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
              <li><a class="close-link"><i class="fa fa-close"></i></a></li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />

            <form id="adminForm" action="<?php echo base_url(). 'tambahsiswa/tambah_aksi_siswa'; ?>" method="post" class="form-horizontal form-label-left" enctype="multipart/form-data">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="foto">Foto</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="file" id="foto" name="foto" class="form-control col-md-7 col-xs-12">
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
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_absensi">Nomor Absensi <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="input-group">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="no_absensi">
                        <span class="glyphicon glyphicon-minus"></span>
                      </button>
                    </span>
                    <input type="text" id="no_absensi" name="no_absensi" class="form-control input-number col-md-7 col-xs-12" value="0" min="0" max="100">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="no_absensi">
                        <span class="glyphicon glyphicon-plus"></span>
                      </button>
                    </span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="radio">
                    <label>
                      <input type="radio" name="jk" value="Laki-laki"> Laki-laki
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="jk" value="Perempuan"> Perempuan
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat">Alamat</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <textarea id="alamat" name="alamat" class="form-control col-md-7 col-xs-12"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="thn_ajar">Tahun Ajaran</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="input-group">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="thn_ajar">
                        <span class="glyphicon glyphicon-minus"></span>
                      </button>
                    </span>
                    <input type="text" id="thn_ajar" name="thn_ajar" class="form-control input-number col-md-7 col-xs-12" value="2024" min="1900" max="2099">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="thn_ajar">
                        <span class="glyphicon glyphicon-plus"></span>
                      </button>
                    </span>
                  </div>
                </div>
              </div>

              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button class="btn btn-primary" type="button"><a href="siswa" style="color: white;">Cancel</a></button>
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
