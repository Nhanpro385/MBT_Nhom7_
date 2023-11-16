<?php
require "../global.php";
require "../pdo.php";
require '../dao/user.php';

// Kiểm tra nếu session chưa được thiết lập
if (!isset($_SESSION['user'])) {
    // Nếu session chưa được thiết lập, chuyển hướng người dùng đến trang login.php
    header('location:view/login.php');
} else {
    if (exist_param("login")) {
        $view_name = "view/user_manager.php";
    } else if (exist_param("register")) {
        $view_name = "view/login.php";
    } else if (exist_param("seat-show")) {
        $view_name = "view/user_manager.php";
    } else {
        $user_data=user_select_all();
        $view_name = "view/user_manager.php";
    }
}

require "layout.php";
?>
