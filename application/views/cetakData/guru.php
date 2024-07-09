<!DOCTYPE html>
<html>
<head>
    <title>Print Data Guru</title>
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
    <h1>Data Guru</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Guru</th>
                <th>NIP</th>
                <th>Tempat, Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Ijazah</th>
                <th>Jabatan</th>
                <th>Mengajar Kelas</th>
                <th>Jumlah Jam</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            foreach($guru as $g){ 
            ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo isset($g->nama_guru) ? $g->nama_guru : ''; ?></td>
                <td><?php echo isset($g->nip) ? $g->nip : ''; ?></td>
                <td><?php echo isset($g->ttl) ? $g->ttl : ''; ?></td>
                <td><?php echo isset($g->jk) ? $g->jk : ''; ?></td>
                <td><?php echo isset($g->agama) ? $g->agama : ''; ?></td>
                <td><?php echo isset($g->ijazah) ? $g->ijazah : ''; ?></td>
                <td><?php echo isset($g->jabatan) ? $g->jabatan : ''; ?></td>
                <td><?php echo isset($g->mengajar_kelas) ? $g->mengajar_kelas : ''; ?></td>
                <td><?php echo isset($g->jumlah_jam) ? $g->jumlah_jam : ''; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <script>
        window.print();
    </script>
</body>
</html>
