<!DOCTYPE html>
<html>
<head>
    <title>Print Data Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-top: 20px;
        }
        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 15px;
            text-align: left;
            border: 1px solid #ddd; /* Border dengan warna abu-abu */
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        @media print {
            body {
                background-color: white;
            }
            table {
                width: 100%;
                box-shadow: none;
            }
            tr:hover {
                background-color: transparent;
            }
        }
    </style>
</head>
<body>
    <h1>Data Siswa</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>ID Siswa</th>
                <th>Nama Siswa</th>
                <th>NISN</th>
                <th>No Absensi</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Tahun Ajaran</th>
                <th>Foto</th> <!-- New table header for photo -->
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            foreach($siswa as $s){ 
            ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo isset($s->id_siswa) ? $s->id_siswa : ''; ?></td>
                <td><?php echo isset($s->nama_siswa) ? $s->nama_siswa : ''; ?></td>
                <td><?php echo isset($s->nisn) ? $s->nisn : ''; ?></td>
                <td><?php echo isset($s->no_absensi) ? $s->no_absensi : ''; ?></td>
                <td><?php echo isset($s->jk) ? $s->jk : ''; ?></td>
                <td><?php echo isset($s->alamat) ? $s->alamat : ''; ?></td>
                <td><?php echo isset($s->thn_ajar) ? $s->thn_ajar : ''; ?></td>
                <td>
                    <?php if (!empty($s->foto)): ?>
                        <img src="<?php echo base_url('gambar/' . $s->foto); ?>" style="max-width: 100px; max-height: 100px;" />
                    <?php else: ?>
                        No Photo
                    <?php endif; ?>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <script>
        window.print();
    </script>
</body>
</html>
