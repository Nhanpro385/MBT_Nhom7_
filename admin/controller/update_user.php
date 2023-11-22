<?php
require '../../global.php';
require '../../pdo.php';
require '../../dao/user.php';

if (isset($_GET['btn_update_user'])) {
    $userId = $_GET['id'];
    $name = $_GET['name'];
    $email = $_GET['email'];
    $phone = $_GET['phoneNumber'];
    $role = $_GET['role'];
    $address = $_GET['address'];

    // Gọi hàm cập nhật người dùng từ file dao/user.php
    user_update_no_pass($userId, $name, $email, $phone, $address, $role);

    // Trả về thông báo thành công hoặc thông báo khác tùy thuộc vào logic của bạn
    echo json_encode(array('status' => 'success', 'message' => 'Update successful'));
} else {
    // Trả về thông báo lỗi nếu không có param btn_update_user
    echo json_encode(array('status' => 'error', 'message' => 'Invalid request'));
}
?>
