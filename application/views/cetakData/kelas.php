<!DOCTYPE html>
<html>
<head>
    <title>Print Data Kelas</title>
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
    <h1>Data Kelas</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>ID Kelas</th>
                <th>Nama Kelas</th>
                <th>Wali Kelas</th>
                <th>Jumlah Siswa</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            foreach($kelas as $k){ 
            ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo isset($k->id_kelas) ? $k->id_kelas : ''; ?></td>
                <td><?php echo isset($k->nama_kelas) ? $k->nama_kelas : ''; ?></td>
                <td><?php echo isset($k->wali_kelas) ? $k->wali_kelas : ''; ?></td>
                <td><?php echo isset($k->jumlah_siswa) ? $k->jumlah_siswa : ''; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <script>
        window.print();
    </script>
</body>
</html>
