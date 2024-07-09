<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
    <style>
        /* CSS Anda */
    </style>
</head>
<body>
    <!-- Bagian lain dari halaman Anda, seperti header -->

    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Form Siswa</h3>
                </div>
                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <?php echo form_open('carisiswa'); ?>
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
                            <h2>Data Siswa <small> SDN 4 Tengguli</small></h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="text-right mt-3">
                                <a href="<?php echo base_url('tambahsiswa'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Data Siswa</a>
                            </div>
                            <div class="text-right mt-3">
                                <?php echo anchor('cetaksiswa', '<i class="fa fa-print"></i> Cetak Data', ['class' => 'btn btn-info btn-sm']); ?>
                            </div>

                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Foto</th> <!-- Tambah kolom foto -->
                                        <th scope="col">Nama Siswa</th>
                                        <th scope="col">NISN</th>
                                        <th scope="col">No Absensi</th>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Tahun Ajar</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $no = 1;
                                    foreach($siswa as $s) { 
                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo $no++ ?></th>
                                        <td><img src="<?php echo base_url('gambar/' . $s->foto); ?>" alt="Foto Siswa" width="100"></td> <!-- Ganti dengan path foto yang sesuai -->
                                        <td><?php echo $s->nama_siswa ?></td>
                                        <td><?php echo $s->nisn ?></td>
                                        <td><?php echo $s->no_absensi ?></td>
                                        <td><?php echo $s->jk ?></td>
                                        <td><?php echo $s->alamat ?></td>
                                        <td><?php echo $s->thn_ajar ?></td>
                                        <td>
                                            <?php echo anchor('siswa/edit/'.$s->id_siswa, 'Edit', ['class' => 'btn btn-warning btn-sm']); ?>
                                            <?php echo anchor('siswa/hapus/'.$s->id_siswa, 'Hapus', ['class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure you want to delete this record?');"]); ?>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="8" class="text-right">Total Siswa:</th>
                                        <th><?php echo count($siswa); ?></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bagian lain dari halaman Anda, seperti footer dan script -->

</body>
</html>
