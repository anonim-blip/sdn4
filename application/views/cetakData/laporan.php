<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Laporan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 70%;
            margin: 0 auto;
            padding: 20px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h3 {
            margin: 0;
        }
        .form-group {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
        }
        .form-group div {
            width: 48%;
        }
        .form-control {
            width: 100%;
            border: none;
            background: none;
            padding: 8px 0;
            font-size: 16px;
            color: #000;
            pointer-events: none; /* Disable user interaction */
        }
        .table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        .table th, .table td {
            border: 1px solid #000;
            padding: 10px;
            text-align: left;
        }
        .table th {
            background-color: #f2f2f2;
        }
        .btn-print {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            text-align: center;
        }
        .btn-print:hover {
            background-color: #0056b3;
        }
        @media print {
            .btn-print {
                display: none;
            }
        }
    </style>
</head>
<body>

    <div class="header">
        <h3>Laporan Hasil Belajar</h3>
    </div>
    
    <div class="form-group">
        <div>
            <label>Nama Siswa:</label>
            <input type="text" class="form-control" name="nama_siswa" value="<?php echo isset($laporan->nama_siswa) ? $laporan->nama_siswa : ''; ?>" readonly>
        </div>
        <div>
            <label>Kelas:</label>
            <input type="text" class="form-control" name="kelas" value="<?php echo isset($laporan->nama_kelas) ? $laporan->nama_kelas : ''; ?>" readonly>
        </div>
    </div>

    <div class="form-group">
        <div>
            <label>NISN:</label>
            <input type="text" class="form-control" name="nisn" value="<?php echo isset($laporan->nisn) ? $laporan->nisn : ''; ?>" readonly>
        </div>
    </div>

    <div class="form-group">
        <div>
            <label>Sekolah:</label>
            <input type="text" class="form-control" name="sekolah" value="<?php echo isset($laporan->sekolah) ? $laporan->sekolah : ''; ?>" readonly>
        </div>
        <div>
            <label>Semester:</label>
            <input type="text" class="form-control" name="semester" value="<?php echo isset($laporan->semester) ? $laporan->semester : ''; ?>" readonly>
        </div>
    </div>

    <div class="form-group">
        <div>
            <label>Tahun Ajar:</label>
            <input type="text" class="form-control" name="tahun_ajar" value="<?php echo isset($laporan->thn_ajar) ? $laporan->thn_ajar : ''; ?>" readonly>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Mata Pelajaran</th>
                <th>Nilai Akhir</th>
                <th>Capaian Kompetensi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo isset($laporan->id_laporan) ? $laporan->id_laporan : ''; ?></td>
                <td><?php echo isset($laporan->nama_matapelajaran) ? $laporan->nama_matapelajaran : ''; ?></td>
                <td><?php echo isset($laporan->nilai_akhir) ? $laporan->nilai_akhir : ''; ?></td>
                <td><?php echo isset($laporan->capaian_kompetensi) ? $laporan->capaian_kompetensi : ''; ?></td>
            </tr>
        </tbody>
    </table>

    <div class="form-group text-right">
        <a href="#" class="btn-print" onclick="window.print()">Cetak</a>
    </div>


</body>
</html>
