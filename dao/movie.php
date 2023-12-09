<?php
function movie_insert($title, $genre_id, $director, $actors, $duration, $description, $average_rating, $price, $date_start, $date_end, $img_movie, $trailer_link) {
    $sql = "INSERT INTO movies (title, genre_id, director, actors, duration, description, average_rating, price, date_start, date_end, img_movie, trailer_link) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    pdo_execute($sql, $title, $genre_id, $director, $actors, $duration, $description, $average_rating, $price, $date_start, $date_end, $img_movie, $trailer_link);
}

function movie_update_part_1($title, $genre_id, $actors, $director, $duration, $description, $movie_id)
{
    $sql = "UPDATE movies SET title=?, genre_id=?, actors=?, director=?, duration=?, description=? WHERE movie_id=?";
    pdo_execute($sql, $title, $genre_id,$actors, $director, $duration, $description, $movie_id);
}
function movie_update_part_2($average_rating, $price, $date_start, $date_end, $img_movie, $trailer_link, $movie_id)
{

    $sql = "UPDATE movies SET average_rating=?, price=?, date_start=?, date_end=?, img_movie=? , trailer_link=? WHERE movie_id=?";
    pdo_execute($sql,$average_rating,$price,$date_start,$date_end,$img_movie,$trailer_link, $movie_id);
}
function delete_movie($movie_id){
    $sql="UPDATE movies set status=1 WHERE movie_id=?";
    pdo_execute($sql,$movie_id);
}

function movies_select_all()
{
    $sql = "SELECT 
    movie_id,	
    title,	
    movies.genre_id,	
    director,	
    actors,	
    duration,	
    description,	
    average_rating,	
    price,	
    date_start,	
    date_end,	
    img_movie,	
    trailer_link,
    genre_name  FROM movies INNER JOIN movie_genres ON movies.genre_id=movie_genres.genre_id WHERE movies.status=0 ";
    return pdo_query($sql);
}
function movies_select_limit($start, $limit)
{
    $sql = "SELECT * FROM movies ORDER BY movie_id DESC LIMIT $start, $limit";
    return pdo_query($sql);
}
function movies_select_by_id($idmovie)
{
    $sql = "SELECT *
    FROM movie_genres
    JOIN movies ON movie_genres.genre_id = movies.genre_id
    WHERE movies.movie_id = ?";
    return pdo_query_one($sql, $idmovie);
}

function inngaytrongkhoang($startdae, $enddate)
{
    $start = new DateTime($startdae);
    $end = new DateTime($enddate);
    $today = new DateTime();

    $ngaytrongkhoang = array();
    $daysOfWeek = array(
        'Sun' => 'Chủ Nhật',
        'Mon' => 'Thứ Hai',
        'Tue' => 'Thứ Ba',
        'Wed' => 'Thứ Tư',
        'Thu' => 'Thứ Năm',
        'Fri' => 'Thứ Sáu',
        'Sat' => 'Thứ Bảy'
    );

    // Lặp qua từng ngày trong khoảng thời gian
    while ($start <= $end) {
        $ngay = $start->format('Y-m-d'); // Lấy ngày tháng năm

        $thu = $start->format('D'); // Lấy chuỗi thứ tiếng Anh
        // Chuyển đổi chuỗi thứ sang tiếng Việt
        $thuVietnamese = isset($daysOfWeek[$thu]) ? $daysOfWeek[$thu] : '';

        // Lưu cặp thông tin ngày và thứ vào mảng
        $ngaytrongkhoang[] = array(
            'ngay' => $ngay,
            'thu' => $thuVietnamese,
            'checktoday' => ""
        );

        $start->modify('+1 day'); // Tăng ngày lên 1
    }
    
    foreach ($ngaytrongkhoang as $key => $value) {
            if ($value['ngay'] == $today->format('Y-m-d')) {
                $ngaytrongkhoang[$key]['checktoday'] = "checked";
                $ngaytrongkhoang[$key]['thu'] = "Hôm nay";
            }
    }
    return $ngaytrongkhoang;
}