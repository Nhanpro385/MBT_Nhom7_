<?php
require "../global.php";
require "../pdo.php";
require '../dao/user.php';
require '../dao/genre_movie.php';

// Kiểm tra nếu session chưa được thiết lập
if (!isset($_SESSION['user'])) {
    // Nếu session chưa được thiết lập, chuyển hướng người dùng đến trang login.php
    header('location:view/login.php');
} else {
    if (exist_param("login")) {
        $view_name = "view/user_manager.php";
    } else if (exist_param("btn_genre")) {
        $genres = select_all_movie_genres();
        $view_name = "view/genre.php";
    } else if (exist_param("seat-show")) {
        $view_name = "view/user_manager.php";
    }else if (exist_param("btn_update_user")) {
        $userId = $_POST['userId'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $role = $_POST['role'];
        $address = $_POST['address'];
    
        // Gọi hàm cập nhật người dùng từ file dao/user.php
        user_update_no_pass($userId, $name, $email, $phone, $address, $role);
    
        // Thêm biến $viewname và gán giá trị 'aa.php' nếu điều kiện được đáp ứng
        $view_name = "view/user_manager.php";
    } else {
        $user_data=user_select_all();
        $view_name = "view/user_manager.php";
    }
}

require "layout.php";
?>
