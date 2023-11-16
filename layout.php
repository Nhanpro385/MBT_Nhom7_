<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link href="https://fonts.googleapis.com/css2?family=Rajdhani&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="./system/libary/slick-1.8.1/slick/slick.css">
    <link href="public/css/bootstrap_min.css" rel="stylesheet">
    <link href="public/css/font-awesome_min.css" rel="stylesheet">
    <link href="public/css/global.css" rel="stylesheet">
    <link href="public/css/index.css" rel="stylesheet">
    <link href="public/css/style.css" rel="stylesheet">
</head>

<body>
    <?php
    require "site/model/header.php";
    require $view_name;
    require "site/model/footer.php";
    ?>
</body>
<script src="public/js/bootstrap_bundle_min.js"></script>
<script src="./system/libary/slick-1.8.1/slick/slick.min.js"></script>
<script src="public/js/app.js"></script>

</html>