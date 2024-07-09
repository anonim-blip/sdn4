<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Form Elements</h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <?php echo form_open('carimatapelajaran'); ?>
          <div class="input-group">
            <input type="text" class="form-control" placeholder="cari matapelajaran...." name="keyword">
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
            <h2>Data Mata Pelajaran <small> SDN 4 Tengguli</small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
              <li><a class="close-link"><i class="fa fa-close"></i></a></li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="text-right">
              <div class="text-right mt-3">
                <?php echo anchor('cetakmatapelajaran', '<i class="fa fa-print"></i> Cetak Data', ['class' => 'btn btn-info btn-sm']); ?>
            </div>
                <a href="<?php echo base_url('tambahmatapelajaran'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Data Mata Pelajaran</a>
              </div>
             
                  
            </div>

            <table id="datatable" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th scope="col">ID Mata Pelajaran</th>
                  <th scope="col">Nama Mata Pelajaran</th>
                  <th scope="col">Nama Guru</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                foreach($matapelajaran as $mp) { 
                ?>
                <tr>
                  <th scope="row"><?php echo $mp->id_matapelajaran ?></th>
                  <td><?php echo $mp->nama_matapelajaran ?></td>
                  <td><?php echo $mp->nama_guru ?></td>
                  <td>
                    <?php echo anchor('matapelajaran/edit/'.$mp->id_matapelajaran, 'Edit', ['class' => 'btn btn-primary btn-sm']); ?>                    
                    <?php echo anchor('matapelajaran/hapus/'.$mp->id_matapelajaran, 'Hapus', ['class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure you want to delete this record?');"]); ?>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
