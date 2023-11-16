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
        <form id="login_box" action="" method="post">
            <h2>Đăng nhập tài khoản</h2>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email </label>
                <input type="email" class="form-control" id="user_email">

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
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
    var form = document.getElementById('login_box');
    var email = document.getElementById("user_email");
    var password = document.getElementById("password")
    var login = {}; // Thay vì sử dụng mảng, sử dụng đối tượng
    var error = document.getElementById("error");
    form.addEventListener("submit", function() {
        event.preventDefault();

        if (email == "" || password == "") {
            error.innerHTML = "Vui lòng nhập đầy đủ thông tin";
        } else {
            login.email = email.value;
            login.password = password.value;
            $.ajax({
                url: "site/controller/customer.php",
                type: "post",
                data: {
                    login: login
                },
                success: function(data) {
                    const message = JSON.parse(data);
                    if (message["check"]) {
                        window.location.href = "index.php";
                        
                    } else {
                        error.innerHTML = message["message"]
                    }
                }

            })
        }

    })
</script>

</html>