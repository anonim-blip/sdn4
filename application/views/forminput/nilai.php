<script type="text/javascript">
$(document).ready(function(){
  $('#no_absensi').on('change', function(){
    var no_absensi = $(this).val();
    if(no_absensi){
      $.ajax({
        type: 'POST',
        url: '<?php echo base_url(); ?>api/get_siswa.php',
        data: {no_absensi: no_absensi},
        dataType: 'json',
        success: function(data){
          console.log(data); // Tambahkan log untuk memeriksa data yang diterima
          if (data && data.nama_siswa) {
            $('#nama_siswa').val(data.nama_siswa);
          } else {
            $('#nama_siswa').val('');
          }
        },
        error: function(xhr, status, error){
          console.error(xhr.responseText);
        }
      });
    } else {
      $('#nama_siswa').val('');
    }
  });
});
</script>
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Form Input Nilai</h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Input Nilai <small>input data nilai siswa</small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
              <li><a class="close-link"><i class="fa fa-close"></i></a></li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <form id="nilaiForm" action="<?php echo base_url(). 'tambahnilai/tambah_aksi_nilai'; ?>" method="post" class="form-horizontal form-label-left">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_absensi">Nama Siswa <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select id="nama_siswa" name="nama_siswa" required="required" class="form-control col-md-7 col-xs-12">
                    <option value="">Pilih siswa</option>
                    <?php foreach($siswa as $row): ?>
                      <option value="<?php echo $row->nama_siswa; ?>"><?php echo $row->nama_siswa; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_kelas">Nama Kelas <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="nama_kelas" name="nama_kelas" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_matapelajaran">Nama Mata Pelajaran <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="nama_matapelajaran" name="nama_matapelajaran" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nilai">Nilai <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="nilai" name="nilai" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button href="nilai" class="btn btn-warning">Cancel</button>
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
