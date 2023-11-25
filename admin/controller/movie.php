    <?php
    require '../../global.php';
    require '../../pdo.php';
    require '../../dao/movie.php'; // Assuming you have a DAO for movie operations
var_dump($_POST);
    if (exist_param('add_movie_name')) {
        // POST data from the form
        $title = $_POST['name'];
        $genreId = $_POST['genreId'];
        $director = $_POST['director'];
        $actors = $_POST['actors'];
        $duration = $_POST['duration'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $dateStart = $_POST['date_start'];
        $dateEnd = $_POST['date_end']; 
    $trailer_link=$_POST['trailer_link']; 
        // Check if the file has been uploaded
        $img=$_FILES['img_movie'];
    

        $filePath =save_file('img_movie',$upload_url);
    
    $avg=0;
        // Insert movie into the database
        movie_insert($title, $genreId, $director, $actors, $duration, $description,$avg, $price, $dateStart, $dateEnd, $filePath,$trailer_link);

        // Return success message
        echo json_encode(array('status' => 'success', 'message' => 'Movie added successfully'));
    } else {
        // Return an error message if the request is invalid
        echo json_encode(array('status' => 'error', 'message' => 'Invalid request'));
    }
    ?>
