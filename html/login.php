<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập - MTP Travel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/base.css">
    <link rel="stylesheet" href="../assets/css/login.css">
</head>
<body>
    <div class="main">
        <div class="container login">
            <div id="form1">

                <div class="form-heading">
                        <div class="form-heading__item active" data="login">Đăng nhập</div>
                        <div class="form-heading__item" data="register">Đăng ký</div>
                </div>
                <form action="" method="POST" class="form form-login">
                    <div class="form-group">
                        <input type="text" name="username" placeholder="Email" class="form-input">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Mật khẩu" class="form-input">
                        <div class="form-icon">
                            <img src="../assets/img/sticker/eye.png" alt="" name="eye" class="active">
                            <img src="../assets/img/sticker/eye-slash.png" alt="" name="eye-slash" class="">
                        </div>
                    </div>
    
                    <span class="form-message"></span>
                    <a href="" class="form-forget-pass">Quên mật khẩu ?</a>
                    <button type="submit" class="form-btn" name="login">Đăng nhập</button>
                </form>
                
                <form action="" method="POST" class="form form-register">
                    <div class="form-group">
                        <input type="text" name="fullname" placeholder="Họ và tên" class="form-input">
                        <span class="form-message"></span>
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" placeholder="Email" class="form-input">
                        <span class="form-message"></span>
                    </div>
                    <div class="form-group">
                        <input type="type" name="phone" placeholder="Số điện thoại" class="form-input">
                        <span class="form-message"></span>
                    </div>
                    <div class="form-group">
                        <input type="text" name="create-password" placeholder="Mật khẩu" class="form-input">
                        <span class="form-message"></span>
                    </div>
    
                    <button type="submit" class="form-btn" name="register">Đăng ký</button>
                </form>
            </div>
            <div class="account-banner">
                <img src="../assets/img/sticker/account-banner.png" alt="" class="account-banner__img">
                <div class="account-banner__desc">
                    <h2 class="account-banner__heading">Chúc bạn một ngày tốt lành</h2>
                    <p class="account-banner__details">Đồng hành cũng chúng tôi để tạo ra những chuyến đi thật đáng nhớ !</p>
                </div>
            </div>    
        </div>
    </div>
    
    <script src="../assets/js/login.js"></script>
</body>
</html>