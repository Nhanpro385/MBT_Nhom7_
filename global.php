<?php
// Bắt đầu một phiên làm việc PHP để cho phép sử dụng biến phiên.
session_start();
// links goocs
// Định nghĩa một số URL hằng số cho ứng dụng.
$ROOT_URL = "/MBT_NHOM7_"; // URL gốc của ứng dụng.
$public_URL = "$ROOT_URL/public";  // URL cho tài nguyên liên quan đến nội dung.
$ADMIN_URL = "$ROOT_URL/admin";      // URL cho tài nguyên liên quan đến quản trị.
$SITE_URL = "$ROOT_URL/site";
$upload_url = "$ROOT_URL/upload";
// Định nghĩa thư mục nơi các hình ảnh được tải lên sẽ được lưu trữ trên máy chủ.
$IMAGE_DIR = $_SERVER["DOCUMENT_ROOT"] . "$ROOT_URL/uploads";

// Định nghĩa một số biến ban đầu.
$view_name = "index.php";  // Tên chế độ xem mặc định.
$message = "";             // Biến để lưu trữ các thông báo.
// Biến phiên để lưu trữ thông tin người dùng đăng nhập.
// Hàm kiểm tra xem tên trường tồn tại trong tham số yêu cầu không.
function exist_param($fieldname)
{
    return array_key_exists($fieldname, $_REQUEST);
}
// Hàm để lưu một tệp đã tải lên vào thư mục đích.
function save_file($fieldname, $target_dir)
{
    $file_uploaded = $_FILES[$fieldname];
    $file_name = basename($file_uploaded["name"]); // basename() trả về phần tên của một đường dẫn.
    $target_path = $target_dir . $file_name; // Đường dẫn đầy đủ của tệp đã tải lên.
    move_uploaded_file($file_uploaded["tmp_name"], $target_path); // Di chuyển tệp đã tải lên đến đường dẫn đích.
    return $file_name; // Trả về phần tên của tệp đã tải lên.
}

// Hàm để thêm một cookie với tên, giá trị và thời gian hết hạn cụ thể.
function add_cookie($name, $value, $day)
{
    setcookie($name, $value, time() + (86400 * $day), "/");
}

// Hàm để xóa một cookie bằng cách đặt thời gian hết hạn của nó thành ngày trong quá khứ.
function delete_cookie($name)
{
    // Gọi hàm add_cookie với thời gian hết hạn âm sẽ xóa cookie hiệu quả.
    add_cookie($name, "", -1);
}

// Hàm để lấy giá trị của một cookie dựa trên tên.
function get_cookie($name)
{
    // Trả về giá trị của cookie nếu nó tồn tại, nếu không, trả về chuỗi trống.
    return $_COOKIE[$name] ?? '';
}

// Hàm để kiểm tra xem người dùng đã đăng nhập hay chưa và chuyển hướng đến trang đăng nhập nếu chưa.
// function check_login()
// {
//     global $SITE_URL;

//     // Kiểm tra xem người dùng đã đăng nhập bằng cách kiểm tra biến phiên 'user'.
//     if (isset($_SESSION['user'])) {
//         // Nếu người dùng có 'vai_tro' (quyền) là 1, họ có quyền quản trị, nên không cần kiểm tra nữa.
//         if ($_SESSION['user']['vai_tro'] == 1) {

//             return;
//         }

//         // Nếu người dùng không phải là quản trị và yêu cầu nằm trong thư mục '/admin/', chuyển hướng đến trang đăng nhập.
//         if (strpos($_SERVER[""], '/admin/trang-chinh/') === false) {
//             return;
//         }
//     }

//     // Nếu người dùng chưa đăng nhập hoặc không có quyền quản trị, lưu URI yêu cầu hiện tại và chuyển hướng đến trang đăng nhập.
//     $_SESSION['req'] = $_SERVER["REQUEST_URI"];
//     header("location: $SITE_URL/login.php");
// }
function check_login()
{
    global $ROOT_URL;
    // Kiểm tra xem người dùng đã đăng nhập bằng cách kiểm tra biến phiên 'user'.
    if (isset($_SESSION['user'])) {
        // Nếu người dùng có 'vai_tro' (quyền) là 1, họ có quyền quản trị, nên không cần kiểm tra nữa.
        if ($_SESSION['user']['vai_tro'] == 1) {
            header("location: $ROOT_URL/admin/trang-chinh");
            return;
        } else {
            header("location: $ROOT_URL");
            return;
        }
    } else {
        // Nếu người dùng chưa đăng nhập, lưu URI yêu cầu hiện tại và chuyển hướng đến trang đăng nhập.
        $_SESSION['request_uri'] = $_SERVER["REQUEST_URI"];
        header("location: $ROOT_URL/admin/login-admin.php");
        exit; // Dừng việc thực hiện sau khi chuyển hướng.
    }

    // Nếu người dùng không phải là quản trị và yêu cầu nằm trong thư mục '/admin/', chuyển hướng đến trang đăng nhập.
    if (strpos($_SERVER["REQUEST_URI"], '/admin') === false) {
        // Lưu URI yêu cầu hiện tại và chuyển hướng đến trang đăng nhập.
        $_SESSION['request_uri'] = $_SERVER["REQUEST_URI"];
        header("location: $ROOT_URL/site/app.php?login_site");

        exit; // Dừng việc thực hiện sau khi chuyển hướng.
    }
}
function check_email($email)
{
    $pattern = "/^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]+$/";
    if (preg_match($pattern, $email)) { // Hàm preg_match() sẽ trả về 1 nếu có sự khớp giữa chuỗi và biểu thức chính quy, ngược lại trả về 0.
        return true;
    } else {
        return false;
    }
}
