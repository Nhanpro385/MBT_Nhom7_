<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">

    <title>Document</title>
</head>

<body>
    <section class="login-box">
        <form id="register_box" action="" method="post">
            <h2>Đăng ký tài khoản</h2>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email </label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"> Tên </label>
                <input type="text" class="form-control" id="username">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Số điện thoại</label>
                <input type="number" class="form-control" id="phone">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                <input type="password" class="form-control" id="password">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">nhớ đăng nhập</label>
            </div>
            <button type="submit" class="btn btn-primary" id="btn-login">Đăng nhập</button>
            <span id="error"></span>
        </form>
    </section>
</body>
<script>
    var form = document.getElementById('register_box');
    var email = document.getElementById("email");
    var password = document.getElementById("password");
    var phone = document.getElementById("phone");
    var username = document.getElementById("username");
    var regitser = {}; // Thay vì sử dụng mảng, sử dụng đối tượng
    var error = document.getElementById("error");
    form.addEventListener("submit", function() {
        event.preventDefault();
        regitser.email = email.value;
        regitser.password = password.value;
        regitser.phone = phone.value;
        regitser.username = username.value;
        if (regitser.email == "" || regitser.password == "" || regitser.phone == "" || regitser.username == "") {
            error.innerHTML = "Vui lòng nhập đầy đủ thông tin";
            return;
        } else {
            error.innerHTML = "";
            if (regitser.password.length < 6) {
                error.innerHTML = "Mật khẩu phải có ít nhất 6 ký tự";
                return;
            } else {
                error.innerHTML = "";
                if (isValidPhoneNumber(regitser.phone)) {
                    $.ajax({
                        url: "site/controller/customer.php",
                        type: "post",
                        data: {
                            register: regitser
                        }, // Đặt tên mảng là 'register'
                        success: function(data) {
                            if (data == "true") {
                                alert("Đăng ký thành công");
                                window.location.href = "?login";
                            } else {
                                error.innerHTML = "Đăng ký thất bại";
                                return;
                            }
                        }
                    });
                } else {
                    error.innerHTML = "Số điện thoại không hợp lệ";
                    return;
                }


            }
        }
    });

    function isValidPhoneNumber(phoneNumber) {
        // Biểu thức chính quy kiểm tra định dạng số điện thoại
        var phoneRegex = /^[0-9]{10,}$/;
        return phoneRegex.test(phoneNumber);
    }
</script>

</html>