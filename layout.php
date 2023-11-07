<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="public/css/bootstrap_min.css" rel="stylesheet" >
	<link href="public/css/font-awesome_min.css" rel="stylesheet" >
	<link href="public/css/global.css" rel="stylesheet">
	<link href="public/css/index.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Rajdhani&display=swap" rel="stylesheet">
</head>

<body>
    <?php 
        require "site/model/header.php";
        require $view_name;
        require "site/model/footer.php";
        ?>
</body>
<script src="public/js/bootstrap_bundle_min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

</html>