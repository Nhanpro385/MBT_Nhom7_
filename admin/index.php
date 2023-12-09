<?php
require "../global.php";
require "../pdo.php";
require '../dao/user.php';
require '../dao/genre_movie.php';
require '../dao/movie.php';
require '../dao/cinema.php';
require '../dao/showtime.php';
require '../dao/food.php';




// Kiểm tra nếu session chưa được thiết lập
if (!isset($_SESSION['user'])) {
    // Nếu session chưa được thiết lập, chuyển hướng người dùng đến trang login.php
    header('location:view/login.php');
} else {
    if (exist_param("user_manager")) {
        $user_data=user_select_all();
        $view_name = "view/user_manager.php";
    } else if (exist_param("genre")) {
        $genres = select_all_movie_genres();
        $view_name = "view/genre.php";
    }
   else if (exist_param("btn_update_user")) {
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
    }  else if (exist_param("movie")) {
$movies=movies_select_all();
$genres = select_all_movie_genres();
$view_name="view/movies_manager.php";

    }else if (exist_param("add_movie_name")) {
        $movies=movies_select_all();
        $genres = select_all_movie_genres();
        $view_name="view/movies_manager.php";
        
            }else if (exist_param("movie_delete")) {
                $movies=movies_select_all();
                $genres = select_all_movie_genres();
                $view_name="view/movies_manager.php";
                    }else if (exist_param("showtime")) {

                $movies=movies_select_all();
                $cinemas=select_all_cinemas();
                $showtimes=select_all_showtimes();
                $view_name="view/showtime.php";
            }else if (exist_param("food")) {
                $movies=movies_select_all();
                $genres = select_all_movie_genres();
                $foods=select_all_food();
                $view_name="view/food.php";
                
            }
     else {
        $movies=movies_select_all();
        $genres = select_all_movie_genres();
        $foods=select_all_food();
        $booking_data=chart();
        $view_name="view/chart.php";
        
    }
}

require "layout.php";
?>
