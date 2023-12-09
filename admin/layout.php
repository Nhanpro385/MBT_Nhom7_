<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../public/css/admin_style.css">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="../public/admintemplate/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.6/css/jquery.dataTables.css">

    <!-- DataTables JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.6/js/jquery.dataTables.js"></script>

    <!-- Custom styles for this template-->
    <link href="../public/admintemplate/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <?php
    require "model/header.php";
    require $view_name;
    require "model/footer.php";
    ?>
</body>

<script src="../public/admintemplate/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../public/admintemplate/js/sb-admin-2.min.js"></script>
<!-- Load Bootstrap JS -->

<!-- Page level plugins -->
<!-- <script src="../public/admintemplate/vendor/chartjs/Chart.min.js"></script> -->

<!-- Page level custom scripts -->
<!-- <script src="../public/admintemplate/js/demo/chart-area-demo.js"></script>
    <script src="../public/admintemplate/js/demo/chart-pie-demo.js"></script> -->

</html>