<?php

function insert_showtime($cinema_id, $movie_id, $start_time, $end_time, $time_type, $movie_status) {
    $sql = "INSERT INTO show_times (cinema_id, movie_id, start_time, end_time, time_type, movie_status) VALUES (?, ?, ?, ?, ?, ?)";
    pdo_execute($sql, $cinema_id, $movie_id, $start_time, $end_time, $time_type, $movie_status);
}

function update_showtime( $cinema_id, $movie_id, $start_time, $end_time, $time_type, $movie_status,$showtime_id,) {
    $sql = "UPDATE show_times SET cinema_id = ?, movie_id = ?, start_time = ?, end_time = ?, time_type = ?, movie_status = ? WHERE showtime_id = ?";
    pdo_execute($sql, $cinema_id, $movie_id, $start_time, $end_time, $time_type, $movie_status, $showtime_id);
}

function delete_showtime($showtime_id) {
    $sql = "DELETE FROM show_times WHERE showtime_id = ?";
    pdo_execute($sql, $showtime_id);
}

function select_all_showtimes() {
    $sql = "SELECT * FROM show_times";
    return pdo_query($sql);
}

function select_showtime_by_id($showtime_id) {
    $sql = "SELECT * FROM show_times WHERE showtime_id = ?";
    return pdo_query_one($sql, $showtime_id);
}
?>
