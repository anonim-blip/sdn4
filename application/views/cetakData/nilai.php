<!DOCTYPE html>
<html>
<head>
    <title>Print Data Nilai</title>
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
    <h1>Data Nilai</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>ID Nilai</th>
                <th>Nama Siswa</th>
                <th>Nama Kelas</th>
                <th>Nama Mata Pelajaran</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            foreach($nilai as $n){ 
            ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo isset($n->id_nilai) ? $n->id_nilai : ''; ?></td>
                <td><?php echo isset($n->nama_siswa) ? $n->nama_siswa : ''; ?></td>
                <td><?php echo isset($n->nama_kelas) ? $n->nama_kelas : ''; ?></td>
                <td><?php echo isset($n->nama_matapelajaran) ? $n->nama_matapelajaran : ''; ?></td>
                <td><?php echo isset($n->nilai) ? $n->nilai : ''; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <script>
        window.print();
    </script>
</body>
</html>
