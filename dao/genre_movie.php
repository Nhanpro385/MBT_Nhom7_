<?php 
function insert_movie_genre($genre_name) {
    $sql = "INSERT INTO movie_genres (genre_name) VALUES (?)";
    pdo_execute($sql, $genre_name);
}

function update_movie_genre($genre_id, $genre_name) {
    $sql = "UPDATE movie_genres SET genre_name = ? WHERE genre_id = ?";
    pdo_execute($sql, $genre_name, $genre_id);
}

function delete_movie_genre($genre_id) {
    $sql = "DELETE FROM movie_genres WHERE genre_id = ?";
    pdo_execute($sql, $genre_id);
}

function select_all_movie_genres() {
    $sql = "SELECT * FROM movie_genres";
    return pdo_query($sql);
}

function select_movie_genre_by_id($genre_id) {
    $sql = "SELECT * FROM movie_genres WHERE genre_id = ?";
    return pdo_query_one($sql, $genre_id);
}




?>