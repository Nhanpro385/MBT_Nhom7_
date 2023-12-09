<?php
require '../../global.php';
require '../../pdo.php';
require '../../dao/user.php'; // Assuming you have a DAO for movie operations
if(isset($_POST['id_delete'])) {
    $id=$_POST['id_delete'];
    delete_user($id);
 $response['status'] = 'ok';
 echo json_encode($response);
}
?>