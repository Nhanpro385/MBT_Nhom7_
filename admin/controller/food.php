<?php
require '../../global.php';
require '../../pdo.php';
require '../../dao/food.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Kiểm tra nếu có add_item_name
    if (isset($_FILES['add_item_img'], $_POST['add_item_name'], $_POST['add_item_price'])) {
        $fileName = time() . '_' . basename($_FILES["add_item_img"]["name"]);

        // File upload path
        $targetDir = $_SERVER["DOCUMENT_ROOT"] . "/MBT_Nhom7_-1/uploads/";
        $targetFilePath = $targetDir . $fileName;

        // Allow certain file formats
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif'); // Adjust this based on your requirement

        if (in_array($fileType, $allowTypes)) {
            // Upload file to server
            if (move_uploaded_file($_FILES["add_item_img"]["tmp_name"], $targetFilePath)) {
                $item_name = $_POST['add_item_name'];
                $item_price = $_POST['add_item_price'];
                $img = $fileName;

                insert_food($item_name, $item_price, $img);

                echo json_encode(array('status' => 'success', 'message' => 'Showtime added successfully'));
            } else {
                echo json_encode(array('status' => 'error', 'message' => 'Error uploading file'));
            }
        } else {
            echo json_encode(array('status' => 'error', 'message' => 'File type not allowed'));
        }

    } else if (isset($_POST['update_item_id'])) {
        // Kiểm tra nếu có update_item_id
        if (isset($_FILES['update_item_img'])) {
            $fileName = time() . '_' . basename($_FILES["update_item_img"]["name"]);
            $targetDir = $_SERVER["DOCUMENT_ROOT"] . "/MBT_Nhom7_-1/uploads/";
            $targetFilePath = $targetDir . $fileName;

            // Allow certain file formats
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
            $allowTypes = array('jpg', 'png', 'jpeg', 'gif'); // Adjust this based on your requirement

            if (in_array($fileType, $allowTypes)) {
                // Upload file to server
                if (move_uploaded_file($_FILES["update_item_img"]["tmp_name"], $targetFilePath)) {
                    $item_name = $_POST['update_item_name'];
                    $item_price = $_POST['update_item_price'];
                    $img = $fileName;
                    $id = $_POST['update_item_id'];

                    update_food($item_name, $item_price, $img, $id);

                    echo json_encode(array('status' => 'success', 'message' => 'updated img successfully'));
                } else {
                    echo json_encode(array('status' => 'error', 'message' => 'Error uploading file'));
                }
            } else {
                echo json_encode(array('status' => 'error', 'message' => 'File type not allowed'));
            }
        } else {
            $item_name = $_POST['update_item_name'];
            $item_price = $_POST['update_item_price'];
            $id = $_POST['update_item_id'];

            update_food_n0_img($item_name, $item_price, $id);

            echo json_encode(array('status' => 'success', 'message' => 'updated successfully without new img'));
        }
    }else if(isset($_POST['id_delete'])) {
        $id=$_POST['id_delete'];
        delete_food($id);
     $response['status'] = 'ok';
     echo json_encode($response);
    } else {
        // Xử lý trường hợp khác
        echo json_encode(array('status' => 'error', 'message' => 'Invalid parameters'));
    }
} else {
    echo json_encode(array('status' => 'error', 'message' => 'Invalid request method'));
}
?>
