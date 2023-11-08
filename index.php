<?php
require "global.php";
// require " pdo.php";
if (exist_param("login")) {
    $view_name = "site/view/login.php";
} else if (exist_param("register")) {
    $view_name = "site/view/register.php";
} else if (exist_param("seat-show")) {
    $view_name = "site/view/seat-show.php";
} else {
    $view_name = "site/view/home.php";
}

require "layout.php";
