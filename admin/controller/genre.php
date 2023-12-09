<?php 
require '../../global.php';
require '../../pdo.php';
require '../../dao/genre_movie.php';

if (isset($_POST['btn_add_genre'])) {
$name_add=$_POST['name'];
insert_movie_genre($name_add);
echo json_encode(array('status' => 'success', 'message' => 'Update successful'));
}
else if (isset($_GET['btn_update_genre'])){
$name_update=$_GET['name'];
$id=$_GET['id'];
update_movie_genre($name_update,$id);
echo json_encode(array('status' => 'success', 'message' => 'Update successful'));
}else if(isset($_POST['id_delete'])) {
    $id=$_POST['id_delete'];
    delete_movie_genre($id);
 $response['status'] = 'ok';
 echo json_encode($response);
}
else {
    // Trả về thông báo lỗi nếu không có param btn_update_user
    echo json_encode(array('status' => 'error', 'message' => 'Invalid request'));


}
?>