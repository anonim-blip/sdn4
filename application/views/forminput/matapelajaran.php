<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Form Mata Pelajaran</h3>
      </div>
      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <?php echo form_open('cari mata pelajaran'); ?>
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search by name...." name="keyword">
            <span class="input-group-btn">
              <button class="btn btn-default" type="submit">Search!</button>
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
            <h2>Form Mata Pelajaran <small>input data mata pelajaran</small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
              <li><a class="close-link"><i class="fa fa-close"></i></a></li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <form id="adminForm" action="<?php echo base_url(). 'tambahmatapelajaran/tambah_aksi_matapelajaran'; ?>" method="post" class="form-horizontal form-label-left">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_matapelajaran">Nama Mata Pelajaran <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="nama_matapelajaran" name="nama_matapelajaran" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_matapelajaran">Nama Guru <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="nama_gurus" name="nama_guru" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>


              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button class="btn btn-primary" type="button"><a href="matapelajaran" style="color: white;">Cancel</a></button>
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
