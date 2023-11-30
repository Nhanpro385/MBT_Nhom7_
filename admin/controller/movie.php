<?php
require '../../global.php';
require '../../pdo.php';
require '../../dao/movie.php';

// Generate unique file name
$fileName = time() . '_' . basename($_FILES["update_img_movie"]["name"]);

// File upload path
$targetDir = $_SERVER["DOCUMENT_ROOT"] . "/MBT_Nhom7_-1/uploads/";
$targetFilePath = $targetDir . $fileName;

// Allow certain file formats
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
$allowTypes = array('jpg', 'png', 'jpeg', 'gif');

if (in_array($fileType, $allowTypes)) {
    // Upload file to server
    if (move_uploaded_file($_FILES["update_img_movie"]["tmp_name"], $targetFilePath)) {
        // Insert file data into the database using the movie_insert function
        $movieId_update = $_POST['updatemovieId'];
        $title = $_POST['update_movie_title'];
        $genreId = $_POST['update_movie_genre'];
        $director = $_POST['update_movie_director'];
        $actors = $_POST['update_movie_actors'];
        $duration = $_POST['update_movie_duration'];
        $description = $_POST['update_movie_description'];
        $avg_rating = $_POST['update_movie_average_rating'];
        $price = $_POST['update_movie_price'];
        $dateStart = $_POST['update_movie_date_start'];
        $dateEnd = $_POST['update_movie_date_end'];
        $trailer_link = $_POST['update_movie_link'];
        $filePath = $fileName;

        // Call the movie_insert function
        movie_update_part_1($title, $genreId, $director, $actors, $duration, $description, $movieId_update);
        movie_update_part_2($avg_rating, $price, $dateStart, $dateEnd, $filePath, $trailer_link, $movieId_update);

        // Success response
        $response['status'] = 'ok';
        $response['message'] = 'Movie updated successfully';
    } else {
        $response['status'] = 'err';
        $response['message'] = 'Error uploading the file';
    }
} else {
    $response['status'] = 'type_err';
    $response['message'] = 'Invalid file type';
}

echo json_encode($response);
?>
