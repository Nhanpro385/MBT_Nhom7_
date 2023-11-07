<?php
require "../../pdo.php";
require "../../dao/user.php";


// if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["phone"]) && isset($_POST["name"])) {
//     if (check_email($_POST["email"])) {
//         if (strlen($_POST["password"]) >= 6) {
//             user_insert($_POST["name"], $_POST["email"], $_POST["phone"], "", $_POST["password"], 0);
//             $data = true;
//             echo json_encode($data);

//         } else {
//             $message = "Mật khẩu phải có ít nhất 6 ký tự";
//             echo json_encode($message);
//         }
//     } else {
//         $message = "Email không hợp lệ";
//         echo json_encode($message);
//     }
// } else {
//     $message = "Vui lòng nhập đầy đủ thông tin";
//     echo json_encode($message, JSON_UNESCAPED_UNICODE);
// }
if($_SERVER["REQUEST_METHOD"] == "POST"){
    var_dump($_POST["email"]);
    
}