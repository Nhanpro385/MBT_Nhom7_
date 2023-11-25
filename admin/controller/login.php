<?php
require '../../global.php';
require '../../pdo.php';
require '../../dao/user.php';

if (exist_param("btn_login")) {
    $email = $_POST['Email'];
    $password = md5($_POST['Password']);

    $user = user_select_by_email($email);

    if ($user) {
        if ($user['password'] == $password) {
            $MESSAGE = "Đăng nhập thành công!";
            $_SESSION["user"] = $user;

            // Xử lý ghi nhớ tài khoản
            if (exist_param("ghi_nho")) {
                add_cookie("ma_kh", $user['ma_kh'], 30);
                add_cookie("password", $password, 30);
            } else {
                delete_cookie("ma_kh");
                delete_cookie("password");
            }

            // Kiểm tra và điều hướng dựa trên vai_tro ngay tại đây
            if ($user['role'] == "2") {
                header("Location: ../index.php");
                exit();
            } elseif ($user['role'] == "0" || $user['role'] == "1") {
                header("Location: ../index.php");
                exit();
            }
        } else {
            $MESSAGE = "Sai mật khẩu!";
            echo $MESSAGE; // Thêm dòng này để hiển thị thông báo
        }
    } else {
        $MESSAGE = "Sai email!";
        echo $MESSAGE; // Thêm dòng này để hiển thị thông báo
    }
} elseif (exist_param("btn_logoff")) {
    session_unset();
    // Redirect to a desired page after logout
    header("location: dang-nhap.php"); // Change 'index.php' to your desired page
    exit();
}

$ma_kh = get_cookie("ma_kh");
$password = get_cookie("password");

echo "ma_kh: $ma_kh, password: $password";
?>
