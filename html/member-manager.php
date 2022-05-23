<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Thành Viên</title>
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
                <li class="menu__item active">
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
                <li class="menu__item">
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
                    <h1 class="content__tour--title">Thành Viên</h1>
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
    
                <div class="container">
                    <div class="func-group">
                        <button class="add-btn">Thêm mới</button>
                        <div class="search">
                            <label for="search-input">Tìm kiếm:</label>
                            <input type="text" id="search-input" placeholder="Nhập tên thành viên muốn tìm kiếm" class="">
                        </div>
                    </div>
                    <div style="width: 1500px; overflow-y: hidden; border: 1px solid #ccc; margin-top: 20px;">

                        <table style="width: 2000px;">
                            <thead>
                                <tr>
                                    <th style="width: 160px;">Mã Thành Viên</th>
                                    <th style="width: 300px;">Tên Thành Viên</th>
                                    <th style="width: 400px;">Địa Chỉ</th>
                                    <th style="width: 280px;">Email</th>
                                    <th style="width: 200px;">Số Điện Thoại</th>
                                    <th style="width: 200px;">Username</th>
                                    <th style="width: 200px;">Password</th>
                                    <th style="width: 100px;">Role</th>
                                    <th style="width: 160px;"> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd table-row">
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">
                                        <i class="fa-solid fa-pencil update-btn"></i>
                                        <i class="fa-solid fa-trash-can delete-btn"></i>
                                    </td>
                                </tr>
                                <tr class="odd table-row">
                                    <td class="text-center">2</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">
                                        <i class="fa-solid fa-pencil update-btn"></i>
                                        <i class="fa-solid fa-trash-can delete-btn"></i>
                                    </td>
                                </tr>
                                <tr class="odd table-row">
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">
                                        <i class="fa-solid fa-pencil update-btn"></i>
                                        <i class="fa-solid fa-trash-can delete-btn"></i>
                                    </td>
                                </tr>
                                <tr class="odd table-row">
                                    <td class="text-center">2</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">
                                        <i class="fa-solid fa-pencil update-btn"></i>
                                        <i class="fa-solid fa-trash-can delete-btn"></i>
                                    </td>
                                </tr>
                                <tr class="odd table-row">
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">
                                        <i class="fa-solid fa-pencil update-btn"></i>
                                        <i class="fa-solid fa-trash-can delete-btn"></i>
                                    </td>
                                </tr>
                                <tr class="odd table-row">
                                    <td class="text-center">2</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">
                                        <i class="fa-solid fa-pencil update-btn"></i>
                                        <i class="fa-solid fa-trash-can delete-btn"></i>
                                    </td>
                                </tr>
                                <tr class="odd table-row">
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">
                                        <i class="fa-solid fa-pencil update-btn"></i>
                                        <i class="fa-solid fa-trash-can delete-btn"></i>
                                    </td>
                                </tr>
                                <tr class="odd table-row">
                                    <td class="text-center">2</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">
                                        <i class="fa-solid fa-pencil update-btn"></i>
                                        <i class="fa-solid fa-trash-can delete-btn"></i>
                                    </td>
                                </tr>
                                <tr class="odd table-row">
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">
                                        <i class="fa-solid fa-pencil update-btn"></i>
                                        <i class="fa-solid fa-trash-can delete-btn"></i>
                                    </td>
                                </tr>
                                <tr class="odd table-row">
                                    <td class="text-center">2</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">
                                        <i class="fa-solid fa-pencil update-btn"></i>
                                        <i class="fa-solid fa-trash-can delete-btn"></i>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
    
                    <div class="page">
                        <button class="page-nav page-prev" disabled>
                            <i class="fa-solid fa-angle-left"></i>
                        </button>
                        <button class="page-nav page-number active">1</button>
                        <button class="page-nav page-number">2</button>
                        <button class="page-nav page-number">3</button>
                        <button class="page-nav page-next">
                            <i class="fa-solid fa-angle-right"></i>
                        </button>
                    </div>
                </div>
            </div>
            <p class="copyright-text">&copy; All rights reserved. <strong>MTP Travel</strong></p>
        </div>
        
        <div class="form-container">
            <form action="" class="form" method="post">

                <h2 class="form-heading text-center">Nhập thông tin mới</h2>

                <div class="form-group">
                    <label for="member-name" class="form-label">Tên thành viên:</label>
                    <input id="member-name" name="member-name" class="form-input" placeholder="Tên thành viên"></input>
                    <span class="form-message"></span>
                </div>

                <div class="form-group">
                    <label for="member-address" class="form-label">Địa chỉ: </label>
                    <input id="member-address" name="member-address" class="form-input" placeholder="Địa chỉ"></input>
                    <span class="form-message"></span>
                </div>

                <div class="form-group">
                    <label for="member-email" class="form-label">Email:</label>
                    <input id="member-email" name="member-email" class="form-input" placeholder="Email"></input>
                    <span class="form-message"></span>
                </div>

                <div class="form-group">
                    <label for="member-phone" class="form-label">Số điện thoại:</label>
                    <input id="member-phone" name="member-phone" class="form-input" placeholder="Số điện thoại"></input>
                    <span class="form-message"></span>
                </div>

                <div class="form-group">
                    <label for="member-username" class="form-label">Username:</label>
                    <input id="member-username" name="member-username" class="form-input" placeholder="Username"></input>
                    <span class="form-message"></span>
                </div>

                <div class="form-group">
                    <label for="member-password" class="form-label">Password:</label>
                    <input id="member-password" name="member-password" class="form-input" placeholder="Password"></input>
                    <span class="form-message"></span>
                </div>

                <div class="form-group">
                    <label for="member-role" class="form-label">Role:</label>
                    <select name="member-role" id="member-role" class="form-input">
                        <option value="default" class="form-option">Role</option>
                        <option value="1" class="form-option">1</option>
                        <option value="2" class="form-option">2</option>
                    </select>
                    <span class="form-message"></span>
                </div>

                <div class="form-btn text-center">
                    <button class="btn-submit"></button>
                    <button type="button" class="btn-cancel">Hủy</button>
                </div>

            </form>
        </div>

        <form class="form-delete text-center" method="post">
            <p class="form-delete__message">Hành động này không thể hoàn tác. Bạn có chắc muốn tiếp tục ?</p>
            <div class="form-delete__btn">
                <button type="submit" class="form-delete__btn--yes">Có</button>
                <button type="button" class="form-delete__btn--no">Không</button>                
            </div>
        </div>
    </div>
    <script type="module" src="../assets/js/member-manager.js"></script>
</body>
</html>