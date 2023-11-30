<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Form with File Upload Test</title>
</head>
<body>
    <h2>Full Form with File Upload Test</h2>
    <form id="updatemovieForm" enctype="multipart/form-data">
                    <div class="row">
                        <div>
                        <div class="form-group">
                                <label for="updatemovieId">movie id:</label>
                                <input type="text" class="form-control" id="updatemovieId" name="updatemovieId" required>
                            </div>
                            <div class="form-group">
                                <label for="movieName">movie Name:</label>
                                <input type="text" class="form-control" id="update_movie_title" name="update_movie_title" required>
                            </div>
                            <div class="form-group">
                                <label for="movie_genre">Genre</label>
                                <select class="form-control" id="update_movie_genre" name="update_movie_genre" required>
                                    <?php
                                    // Assuming $movies is an array containing movie names fetched from the database
                                    foreach ($genres as $genre) {
                                        echo '<option value="' . $genre['genre_id'] . '">' . $genre['genre_name'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="director">director:</label>
                                <input type="text" class="form-control" id="update_movie_director" name="update_movie_director" required>

                            </div>
                            <div class="form-group">
                                <label for="actors">actors:</label>
                                <input type="text" class="form-control" id="update_movie_actors" name="update_movie_actors" required>
                            </div>
                            <div class="form-group">
                                <label for="duration">duration:</label>
                                <input type="text" class="form-control" id="update_movie_duration" name="update_movie_duration" required>
                            </div>
                        </div>
                        <div>
                            <div class="form-group">
                                <label for="description">description:</label>
                                <input type="text" class="form-control" id="update_movie_description" name="update_movie_description" required>
                            </div>
                            <div class="form-group">
                                <label for="update_movie_average_rating">avg:</label>
                                <input type="text" class="form-control" id="update_movie_average_rating" name="update_movie_average_rating" required>
                            </div>

                            <div class="form-group">
                                <label for="price">price:</label>
                                <input type="text" class="form-control" id="update_movie_price" name="update_movie_price" required>
                            </div>
                            <div class="row d-flex justify-content-between">
                                <div class="form-group">
                                    <label for="update_movie_date_start">date start</label>
                                    <input type="date" class="form-control" id="update_movie_date_start" name="update_movie_date_start" required>
                                </div>
                                <div class="form-group">
                                    <label for="update_movie_date_end">date end</label>
                                    <input type="date" class="form-control" id="update_movie_date_end" name="update_movie_date_end" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="update_movie_img">Movie banner</label>
                                <input type="file" class="form-control" id="update_img_movie" name="update_img_movie" required>
                            </div>
                            <div class="form-group">
                                <label for="update_movie_link">Movie link trailer</label>
                                <input type="text" class="form-control" id="update_movie_link" name="update_movie_link" required>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">update movie</button>
                </form>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#updatemovieForm ').on('submit', function(e) {
                e.preventDefault();
                var allowedFileTypes = 'image.*';
                var allowedFileSize = 1024;
                 var files = $('#update_img_movie')[0].files;
                var formData = new FormData(this);
                console.log(formData);  
                $.ajax({
                    url: 'controller/movie.php', // Replace with the actual path to your PHP script
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        console.log(response);
                    },
                    error: function(error) {
                        console.error(error);
                    }
                });
            });
        });
    </script>
</body>
</html>
