<?php
require "../global.php";
 require "../pdo.php";
if (exist_param("login")) {
    $view_name = "admin/view/login.php";
} else if (exist_param("register")) {
    $view_name = "admin/view/login.php";
} else if (exist_param("seat-show")) {
    $view_name = "admin/view/login.php";
} else {
    $view_name = "admin/view/login.php";
}

require "layout.php";
