<?php
require '../../global.php';
require '../../pdo.php';
require '../../dao/showtime.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (
        isset($_POST['add_cinema_id'], $_POST['add_movie_id'], $_POST['add_start_time'], $_POST['add_end_time'], $_POST['add_time_type'], $_POST['add_movie_status'])
    ) {
        $cinema_id = $_POST['add_cinema_id'];
        $movie_id = $_POST['add_movie_id'];
        $start_time = $_POST['add_start_time'];
        $end_time = $_POST['add_end_time'];
        $time_type = $_POST['add_time_type'];
        $movie_status = $_POST['add_movie_status'];

        // Gọi hàm insert_showtime để thêm showtime vào cơ sở dữ liệu
        insert_showtime($cinema_id, $movie_id, $start_time, $end_time, $time_type, $movie_status);

        echo json_encode(array('status' => 'success', 'message' => 'Showtime added successfully'));
    } else if (
        isset($_POST['update_showtime_id'], $_POST['update_cinema_id'], $_POST['update_movie_id'], $_POST['update_start_time'], $_POST['update_end_time'], $_POST['update_time_type'], $_POST['update_movie_status'])
    ) {
        $showtime_id = $_POST['update_showtime_id'];
        $cinema_id = $_POST['update_cinema_id'];
        $movie_id = $_POST['update_movie_id'];
        $start_time = $_POST['update_start_time'];
        $end_time = $_POST['update_end_time'];
        $time_type = $_POST['update_time_type'];
        $movie_status = $_POST['update_movie_status'];

        // Gọi hàm update_showtime để cập nhật showtime trong cơ sở dữ liệu
        update_showtime( $cinema_id, $movie_id, $start_time, $end_time, $time_type, $movie_status,$showtime_id);

        echo json_encode(array('status' => 'success', 'message' => 'Showtime updated successfully'));
    } else {
        echo json_encode(array('status' => 'error', 'message' => 'Invalid parameters'));
    }
} else {
    echo json_encode(array('status' => 'error', 'message' => 'Invalid request method'));
}
?>
