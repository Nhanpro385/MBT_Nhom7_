<?php 
    require "global.php";
    // require " pdo.php";
    if(exist_param("login")){

    }else {
        $view_name = "site/view/home.php";
    }
    
    require "layout.php";
    ?>
