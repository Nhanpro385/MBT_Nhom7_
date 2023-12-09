<?php 
function insert_movie_genre($genre_name) {
    $sql = "INSERT INTO movie_genres (genre_name) VALUES (?)";
    pdo_execute($sql, $genre_name);
}

function update_movie_genre($genre_name,$genre_id) {
    $sql = "UPDATE movie_genres SET genre_name = ? WHERE genre_id = ?";
    pdo_execute($sql, $genre_name, $genre_id);
}

function delete_movie_genre($genre_id) {
    $sql = "UPDATE  movie_genres SET status=1 WHERE genre_id = ?";
    pdo_execute($sql, $genre_id);
}

function select_all_movie_genres() {
    $sql = "SELECT * FROM movie_genres WHERE status=0";
    return pdo_query($sql);
}

function select_movie_genre_by_id($genre_id) {
    $sql = "SELECT * FROM movie_genres WHERE genre_id = ?";
    return pdo_query_one($sql, $genre_id);
}


function chart(){
    $sql = "
    SELECT
        movies.title AS 'Tên Phim',
        COUNT(booking_history.booking_id) AS 'Số Lượt Đặt Vé',
        DATE_FORMAT(booking_history.booking_time, '%Y-%m') AS 'Thời Gian Đặt Vé (Tháng-Năm)'
    FROM
        booking_history
    JOIN
        bookings ON booking_history.booking_id = bookings.booking_id
    JOIN
        show_times ON bookings.showtime_id = show_times.showtime_id
    JOIN
        movies ON show_times.movie_id = movies.movie_id
    WHERE
        YEAR(booking_history.booking_time) = 2023
        AND MONTH(booking_history.booking_time) = 12
    GROUP BY
        movies.title, DATE_FORMAT(booking_history.booking_time, '%Y-%m')
    ORDER BY
        'Số Lượt Đặt Vé' DESC;
";

return pdo_query($sql);
}

?>