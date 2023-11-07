<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    l
    <title>Document</title>
</head>

<body>
    <section class="login-box">
        <form id="login_box" action="" method="post">
            <h2>Đăng ký tài khoản</h2>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email </label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"> Tên </label>
                <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Số điện thoại</label>
                <input type="number" class="form-control" id="phone" aria-describedby="emailHelp">
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
        </form>
    </section>
</body>
<script>
    var form = document.getElementById('login_box');
    var email = document.getElementById("email");
    var password = document.getElementById("password");
    var phone = document.getElementById("phone");
    var name = document.getElementById("name");
    var regitser = {};
    regitser.email = email.value;
    regitser.password = password.value;
    regitser.phone = phone.value;
    regitser.name = name.value;

    form.addEventListener("submit", function() {
        event.preventDefault();
        $.ajax({
            url: "site/controller/login.php",
            type: "post",
            data: regitser,
            success: function(data) {
                // if (data == "true") {
                //     alert("Đăng Ky thành công");
                //     window.location.href = "index.php";
                // } else {
                //     alert("Đăng ky thất bại");
                // }
                console.log(data);
            
            }
        })
    })
</script>

</html>