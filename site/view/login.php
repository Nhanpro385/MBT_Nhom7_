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
            <h2>Đăng nhập tài khoản</h2>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email </label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">

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
        </form>
    </section>
</body>
<script>
    var form = document.getElementById('login_box');
    var email = document.getElementById("email");
    var password = document.getElementById("password");
    form.addEventListener("submit", function() {
        event.preventDefault();
        $.ajax({
            url: "site/controller/login.php",
            type: "post",
            data: {
                email: email.value,
                password: password.value
            },
            success: function(data) {
                if (data == "true") {
                    alert("Đăng nhập thành công");
                    window.location.href = "index.php";
                } else {

                    alert("Đăng nhập thất bại");
                }
                
            }

        })

    })
</script>

</html>