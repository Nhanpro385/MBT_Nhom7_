<?php
require "../../global.php";
 require "../pdo.php";
 if (!isset($_SESSION['user_id'])) {
    // Nếu session chưa được thiết lập, chuyển hướng người dùng đến trang login.php
    header("Location: view/login.php");
    exit(); // Đảm bảo rằng không có mã PHP nào được thực hiện sau lệnh header
}
if (exist_param("login")) {
    $view_name = "view/login.php";
} else if (exist_param("register")) {
    $view_name = "view/login.php";
} else if (exist_param("seat-show")) {
    $view_name = "view/login.php";
} else {
    $view_name = "view/index.php";
}

require "layout.php";
