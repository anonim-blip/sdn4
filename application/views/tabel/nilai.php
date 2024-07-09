<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Form Elements</h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <?php echo form_open('carinilai'); ?>
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search by student name...." name="keyword">
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
            <h2>Data Nilai  <small> SDN 4 Tengguli</small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
              <li><a class="close-link"><i class="fa fa-close"></i></a></li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="text-right">
              <div class="text-right mt-3">
                  <!-- Ubah link untuk menambah data laporan -->
                  <?php echo anchor('cetaknilai', '<i class="fa fa-print"></i> Cetak Data', ['class' => 'btn btn-info btn-sm']); ?>
                <a href="<?php echo base_url('tambahnilai'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Data Nilai</a>
              </div>
            </div>

            <table id="datatable" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th scope="col">ID Nilai</th>
                  <th scope="col">Nama Siswa</th>
                  <th scope="col">Nama Kelas</th>
                  <th scope="col">Nama Mata Pelajaran</th>
                  <th scope="col">Nilai</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $no = 1;
                $total_nilai = 0;
                foreach($nilai as $n) { 
                  $total_nilai += $n->nilai;
                ?>
                <tr>
                  <th scope="row"><?php echo $n->id_nilai ?></th>
                  <td><?php echo $n->nama_siswa ?></td>
                  <td><?php echo $n->nama_kelas ?></td>
                  <td><?php echo $n->nama_matapelajaran ?></td>
                  <td><?php echo $n->nilai ?></td>
                  <td>
                    <?php echo anchor('nilai/edit/'.$n->id_nilai, 'Edit', ['class' => 'btn btn-primary btn-sm']); ?>                    
                    <?php echo anchor('nilai/hapus/'.$n->id_nilai, 'Hapus', ['class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure you want to delete this record?');"]); ?>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
              <tfoot>
                <tr>
                  <th colspan="5" class="text-right">Rata-rata Nilai:</th>
                  <th><?php echo count($nilai) > 0 ? number_format($total_nilai / count($nilai), 2) : '0.00'; ?></th>
                  <th></th>
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
