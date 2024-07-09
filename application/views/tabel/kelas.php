<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Form Elements</h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <?php echo form_open('carikelas'); ?>
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search by username...." name="keyword">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Search!</button>
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Data Kelas <small> SDN 4 Tengguli</small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
              <li><a class="close-link"><i class="fa fa-close"></i></a></li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
             <div class="text-right mt-3">
                  <!-- Ubah link untuk menambah data laporan -->
                  <?php echo anchor('cetakkelas', '<i class="fa fa-print"></i> Cetak Data', ['class' => 'btn btn-info btn-sm']); ?>
            </div>
            <div class="text-right">
              <div class="text-right mt-3">
                <a href="<?php echo base_url('tambahkelas'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Data Kelas</a>
              </div>
            </div>

            <table id="datatable" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th scope="col">ID Kelas</th>
                  <th scope="col">Nama Kelas</th>
                  <th scope="col">Wali Kelas</th>
                  <th scope="col">Jumlah Siswa kelas</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                foreach($kelas as $k) { 
                ?>
                <tr>
                  <th scope="row"><?php echo $k->id_kelas ?></th>
                  <td><?php echo $k->nama_kelas ?></td>
                  <td><?php echo $k->wali_kelas ?></td>
                  <td><?php echo $k->jumlah_siswa ?></td>
                  <td>
                    <?php echo anchor('kelas/edit/'.$k->id_kelas, 'Edit', ['class' => 'btn btn-primary btn-sm']); ?>                    
                    <?php echo anchor('kelas/hapus/'.$k->id_kelas, 'Hapus', ['class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure you want to delete this record?');"]); ?>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
              <tfoot>
                <tr>
                  <th colspan="7" class="text-right">Total Kelas:</th>
                  <th><?php echo count($kelas); ?></th>
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
