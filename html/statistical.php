<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thống Kê</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/grid.css">
    <link rel="stylesheet" href="../assets/css/base.css">
    <link rel="stylesheet" href="../assets/css/manager.css">
</head>
<body>
    <div class="main" style="display: flex;">
        <div class="menu">
            <div class="menu__heading">
                
            </div>
            <ul class="menu__list">
                <li class="menu__item">
                    <a href="index.php" class="menu__link">
                        <i class="fa-solid fa-house menu__icon"></i>
                        Trang chủ
                    </a>
                </li>
                <li class="menu__item">
                    <a href="place-manager.php" class="menu__link">
                        <i class="fa-solid fa-map-location menu__icon"></i>
                        Quản lý địa điểm
                    </a>
                </li>
                <li class="menu__item">
                    <a href="member-manager.php" class="menu__link">
                        <i class="fa-solid fa-users menu__icon"></i>
                        Quản lý thành viên
                    </a>
                </li>
                <li class="menu__item">
                    <a href="tour-manager.php" class="menu__link">
                        <i class="fa-solid fa-plane-departure menu__icon"></i>
                        Quản lý tour
                    </a>
                </li>
                <li class="menu__item active">
                    <a href="statistical.php" class="menu__link">
                        <i class="fa-solid fa-chart-column menu__icon"></i>
                        Thống kê
                    </a>
                </li>
            </ul>
    
            <p class="text-center">MTP Travel</p>
        </div>
        <div class="content">
            <div>
                <div class="content__heading">
                    <h1 class="content__tour--title">Thống Kê</h1>
                    <div class="content__user">
                        <div class="content__user--img" title="Trang cá nhân của bạn">
                            <img src="../assets/img/sticker/user.jpg" alt="">
                        </div>
                        <i class="fa-solid fa-caret-down content__user--down"></i>
                        <i class="fa-solid fa-caret-up content__user--up"></i>
                        <div class="content__user--menu">
                            <div class="content__user--menu--heading">
                                <img src="../assets/img/sticker/user.jpg" alt="" class="content__user--menu--heading--avt">
                                <div class="content__user--menu--heading--name">Lê Hồng Phú</div>
                            </div>
                            <ul class="content__user--menu--list">
                                <li class="content__user--menu--item">
                                    <a href="" class="content__user--menu--link">Trang cá nhân</a>
                                </li>
                                <li class="content__user--menu--item">
                                    <a href="" class="content__user--menu--link">Địa điểm yêu thích</a>
                                </li>
                                <li class="content__user--menu--item">
                                    <a href="" class="content__user--menu--link">Quản lý</a>
                                </li>
                                <li class="content__user--menu--item">
                                    <a href="" class="content__user--menu--link">Cài đặt</a>
                                </li>
                                <li class="content__user--menu--item">
                                    <a href="index.php" class="content__user--menu--link">Đăng xuất</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div style="padding: 30px;">

                    <div class="grid">
                        <div class="row">
                            <div class="col l-4">
                                <div class="statistical pastel-orange">
                                    <p class="statistical__title">Đã bán</p>
                                    <h3 class="statistical__quantity">10k</h3>
                                </div>
                            </div>
                            <div class="col l-4">
                                <div class="statistical pastel-pink">
                                    <p class="statistical__title">Tổng tiền</p>
                                    <h3 class="statistical__quantity">50M</h3>
                                </div>
                            </div>
                            <div class="col l-4">
                                <div class="statistical pastel-yellow">
                                    <p class="statistical__title">Đã bán</p>
                                    <h3 class="statistical__quantity">10k</h3>
                                </div>
                            </div>
                            <div class="col l-4">
                                <div class="statistical pastel-blue">
                                    <p class="statistical__title">Đã bán</p>
                                    <h3 class="statistical__quantity">10k</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <p class="copyright-text">&copy; All rights reserved. <strong>MTP Travel</strong></p>
    </div>
    <script type="module" src="../assets/js/"></script>
</body>
</html>