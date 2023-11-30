<?php
require '../../global.php';
require '../../pdo.php';
require '../../dao/movie.php'; // Assuming you have a DAO for movie operations

if (isset($_FILES["img_movie"])) {
    // Generate unique file name
    $fileName = time() . '_' . basename($_FILES["img_movie"]["name"]);

    // File upload path
    $targetDir = $_SERVER["DOCUMENT_ROOT"] . "/MBT_Nhom7_-1/uploads/";
    $targetFilePath = $targetDir . $fileName;

    // Allow certain file formats
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif'); // Adjust this based on your requirements

    if (in_array($fileType, $allowTypes)) {
        // Upload file to server
        if (move_uploaded_file($_FILES["img_movie"]["tmp_name"], $targetFilePath)) {
            // Insert file data into the database using the movie_insert function
            $title = $_POST['add_movie_name'];
            $genre_id = $_POST['add_movie_genre'];
            $director = $_POST['add_movie_director'];
            $actors = $_POST['add_movie_actors'];
            $duration = $_POST['add_movie_duration'];
            $description = $_POST['add_movie_description'];
            $price = $_POST['add_movie_price'];
            $date_start = $_POST['add_movie_date_start'];
            $date_end = $_POST['add_movie_date_end'];
            $img_movie = $fileName;
            $trailer_link = $_POST['add_movie_link'];

            // Call the movie_insert function
            movie_insert($title, $genre_id, $director, $actors, $duration, $description, 0, $price, $date_start, $date_end, $img_movie, $trailer_link);

            // Success response
            $response['status'] = 'ok';
          
        } else {
            $response['status'] = 'err';
        }
    } else {
        $response['status'] = 'type_err';
        
    }

    // Render response data in JSON format
    echo json_encode($response);
}
?>
