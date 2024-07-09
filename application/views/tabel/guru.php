<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Form Elements</h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
            <?php echo form_open('cariguru'); ?>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search by nama guru..." name="keyword">
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
            <h2>Data Guru <small> SDN 4 Tengguli</small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
              <li><a class="close-link"><i class="fa fa-close"></i></a></li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="text-right">
              <div class="text-right mt-3">
                <a href="<?php echo base_url('tambahguru'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Data Guru</a>
               <div class="text-right mt-3">
                  <!-- Ubah link untuk menambah data laporan -->
                  <?php echo anchor('cetakguru', '<i class="fa fa-print"></i> Cetak Data', ['class' => 'btn btn-info btn-sm']); ?>
            </div>
              </div>
            </div>

            <table id="datatable" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Guru</th>
                  <th scope="col">NIP</th>
                  <th scope="col">TTL</th>
                  <th scope="col">JK</th>
                  <th scope="col">Agama</th>
                  <th scope="col">Ijazah</th>
                  <th scope="col">Jabatan</th>
                  <th scope="col">Mengajar Kelas</th>
                  <th scope="col">Jumlah Jam Mengajar</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                  <?php 
                  $no = 1;
                  foreach($guru as $g) { 
                  ?>
                  <tr>
                      <th scope="row"><?php echo $no++ ?></th>
                      <td><?php echo $g->nama_guru ?></td>
                      <td><?php echo $g->nip ?></td>
                      <td><?php echo $g->ttl ?></td>
                      <td><?php echo $g->jk; ?></td>
                      <td><?php echo $g->agama ?></td>
                      <td><?php echo $g->ijazah ?></td>
                      <td><?php echo $g->jabatan ?></td>
                      <td><?php echo $g->mengajar_kelas ?></td>
                      <td><?php echo $g->jumlah_jam ?></td>
                      <td>
                          <?php echo anchor('guru/edit/'.$g->no, 'Edit', ['class' => 'btn btn-primary btn-sm']); ?>                    
                          <?php echo anchor('guru/hapus/'.$g->no, 'Hapus', ['class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure you want to delete this record?');"]); ?>
                      </td>
                  </tr>
                  <?php } ?>
              </tbody>

              <tfoot>
                <tr>
                  <th colspan="10" class="text-right">Total Guru:</th>
                  <th><?php echo count($guru); ?></th>
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
