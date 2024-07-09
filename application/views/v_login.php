<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Aplikasi Karya Ilmiah">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SDN 4 TENGGULI</title>
    <link rel="icon" type="image/png" href="images/DB_16х16.png">

    <!-- Font Google Roboto -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,300,100,700,900" rel="stylesheet">
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Material Design Lite -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/material-design-lite/material.min.css">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="assets/css/lib/getmdl-select.min.css">
    <link rel="stylesheet" href="assets/css/lib/nv.d3.min.css">
    <link rel="stylesheet" href="assets/css/application.min.css">

    <style>
        body {
            
            font-family: Arial, sans-serif;
            background-color: #d1e0f2;
        }
        .login-container {
            width: 300px;
            margin: 100px auto;
            background-color: #b0c4de;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .login-container h2 {
            margin-bottom: 20px;
        }
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .login-container button {
            padding: 10px 20px;
            margin-top: 10px;
            border: none;
            background-color: #1e90ff;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }
        .login-container button:hover {
            background-color: #1c86ee;
        }
        .login-container a {
            display: block;
            margin-top: 10px;
            color: #1e90ff;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h4>SD Negeri 4 Tengguli Sistem Informasi Akademik Nilai Siswa</h4>
    <form action="<?php echo base_url('login/aksi_login'); ?>" method="post">
        <input type="text" id="username" name="username" placeholder="Username">
        <input type="password" id="password" name="password" placeholder="Password">
        <button type="submit">Login</button>
        <a href="#">Lupa Password?</a>
    </form>
</div>
<!-- JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/d3@7.0.0/dist/d3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/getmdl-select@1.2.2/dist/getmdl-select.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/material-design-lite/material.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/nvd3@1.8.7/build/nv.d3.min.js"></script>
<script src="assets/js/layout/layout.min.js"></script>
<script src="assets/js/scroll/scroll.min.js"></script>
<script src="assets/js/widgets/charts/discreteBarChart.min.js"></script>
<script src="assets/js/widgets/charts/linePlusBarChart.min.js"></script>
<script src="assets/js/widgets/charts/stackedBarChart.min.js"></script>
<script src="assets/js/widgets/employer-form/employer-form.min.js"></script>
<script src="assets/js/widgets/line-chart/line-charts-nvd3.min.js"></script>
<script src="assets/js/widgets/map/maps.min.js"></script>
<script src="assets/js/widgets/pie-chart/pie-charts-nvd3.min.js"></script>
<script src="assets/js/widgets/table/table.min.js"></script>
<script src="assets/js/widgets/todo/todo.min.js"></script>

</body>
</html>