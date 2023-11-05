<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="<?=$public_URL?>/css/bootstrap_min.css" rel="stylesheet" >
	<link href="<?=$public_URL?>/css/font-awesome_min.css" rel="stylesheet" >
	<link href="<?=$public_URL?>/css/global.css" rel="stylesheet">
	<link href="<?=$public_URL?>/css/index.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Rajdhani&display=swap" rel="stylesheet">
	<script src="js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php 
        require $view_name;
    ?>
</body>

</html>