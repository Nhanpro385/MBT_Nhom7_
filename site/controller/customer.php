<?php
require "../../pdo.php";
require "../../dao/user.php";
require "../../global.php";
extract($_REQUEST); 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ mảng có tên là 'register'
    if (isset($_POST['register'])) {
        $datauser = $_POST['register'];
        if ($datauser['email'] == "" || $datauser['password'] == "" || $datauser['phone'] == "" || $datauser['username'] == "") {
            $message = "Vui lòng nhập đầy đủ thông tin";
            echo json_encode($message, JSON_UNESCAPED_UNICODE);
        } else {
            if (email_exists($datauser["email"])) {
                $message = "Email đã tồn tại";
                echo json_encode($message, JSON_UNESCAPED_UNICODE);
            } else {
                if ($datauser['password'] < 6) {
                    $message = 'Mật khẩu phải có ít nhất 6 ký tự';
                } else {
                    $password = md5($datauser['password']); // Mã hóa mật khẩu
                    user_insert($datauser['username'], $datauser['email'], $datauser['phone'], "", $password, "0");
                    echo json_encode($data = true, JSON_UNESCAPED_UNICODE);
                }
            }
        }
    }
    if (isset($_POST["login"])) {
        $email = $_POST["login"]["email"];
        $password = md5($_POST["login"]["password"]);
        $usercheck = user_select_by_email($email);
        $check = false;
        $message = "";
        $message_login = [
            "message" => $message,
            "check" => $check
        ];
        if (user_select_by_email($_POST["login"]["email"]) == false) {
            $message_login["message"] = "Email không tồn tại";

            echo json_encode($message_login, JSON_UNESCAPED_UNICODE);
        } else {
            if ($usercheck["password"] != $password) {
                $message_login["message"] = "Mật khẩu không chính xác";
                echo json_encode($message_login, JSON_UNESCAPED_UNICODE);
            } else {
                if ($email == $usercheck["email"] && $password == $usercheck["password"]) {
                    $message_login["message"] = "Đăng nhập thành công";
                    $_SESSION["user"] = $usercheck;
                    $message_login["check"] = true;
                    echo json_encode($message_login, JSON_UNESCAPED_UNICODE);
                }
            }
        }
    }
} else {
    // Nếu không phải là yêu cầu POST, bạn có thể xử lý theo cách khác hoặc trả về lỗi
}

if(exist_param("logout")){
    unset($_SESSION["user"]);
    header("location: $ROOT_URL?login");
}