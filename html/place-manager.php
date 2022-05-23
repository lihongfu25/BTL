<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Địa Điểm</title>
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
                <li class="menu__item active">
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
                    <h1 class="content__tour--title">Địa Điểm</h1>
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
                            <input type="text" id="search-input" placeholder="Nhập tên địa điểm muốn tìm kiếm" class="">
                        </div>
                    </div>
    
                    <div style="width: 1500px; overflow-y: hidden; border: 1px solid #ccc; margin-top: 20px;">

                        <table style="width: 2700px;">
                            <thead>
                                <tr>
                                    <th style="width: 160px;">Mã Địa Điểm</th>
                                    <th style="width: 200px;">Tên Địa Điểm</th>
                                    <th style="width: 400px;">Địa Chỉ</th>
                                    <th style="width: 160px;">Tỉnh</th>
                                    <th style="width: 160px;">Đơn Giá</th>
                                    <th style="width: 600px;">Giới Thiệu</th>
                                    <th style="width: 160px;">Lượng Truy Cập</th>
                                    <th style="width: 300px;">Tên Khách Sạn</th>
                                    <th style="width: 400px;">Địa Chỉ Khách Sạn</th>
                                    <th style="width: 160px;"> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-row">
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">Hải Dương</td>
                                    <td class="text-center">1</td>
                                    <td>Chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc mô tả khái quát địa điểm. 
                                        Chúng ta vẫn biết rằng, làm việc với một đoạn văn bản dễ đọc và rõ nghĩa dễ gây rối trí và cản trở việc tập trung vào yếu tố trình bày văn bản.</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">
                                        <i class="fa-solid fa-pencil update-btn"></i>
                                        <i class="fa-solid fa-trash-can delete-btn"></i>
                                    </td>
                                </tr>
                                <tr class="table-row">
                                    <td class="text-center">2</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">Nghệ An</td>
                                    <td class="text-center">2</td>
                                    <td>Chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc mô tả khái quát địa điểm. 
                                        Chúng ta vẫn biết rằng, làm việc với một đoạn văn bản dễ đọc và rõ nghĩa dễ gây rối trí và cản trở việc tập trung vào yếu tố trình bày văn bản.</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">
                                        <i class="fa-solid fa-pencil update-btn"></i>
                                        <i class="fa-solid fa-trash-can delete-btn"></i>
                                    </td>
                                </tr>
                                <tr class="table-row">
                                    <td class="text-center">3</td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">Vĩnh Phúc</td>
                                    <td class="text-center">3</td>
                                    <td>Chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc mô tả khái quát địa điểm. 
                                        Chúng ta vẫn biết rằng, làm việc với một đoạn văn bản dễ đọc và rõ nghĩa dễ gây rối trí và cản trở việc tập trung vào yếu tố trình bày văn bản.</td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">
                                        <i class="fa-solid fa-pencil update-btn"></i>
                                        <i class="fa-solid fa-trash-can delete-btn"></i>
                                    </td>
                                </tr>
                                <tr class="table-row">
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">Hải Dương</td>
                                    <td class="text-center">1</td>
                                    <td>Chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc mô tả khái quát địa điểm. 
                                        Chúng ta vẫn biết rằng, làm việc với một đoạn văn bản dễ đọc và rõ nghĩa dễ gây rối trí và cản trở việc tập trung vào yếu tố trình bày văn bản.</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">
                                        <i class="fa-solid fa-pencil update-btn"></i>
                                        <i class="fa-solid fa-trash-can delete-btn"></i>
                                    </td>
                                </tr>
                                <tr class="table-row">
                                    <td class="text-center">2</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">Nghệ An</td>
                                    <td class="text-center">2</td>
                                    <td>Chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc mô tả khái quát địa điểm. 
                                        Chúng ta vẫn biết rằng, làm việc với một đoạn văn bản dễ đọc và rõ nghĩa dễ gây rối trí và cản trở việc tập trung vào yếu tố trình bày văn bản.</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">
                                        <i class="fa-solid fa-pencil update-btn"></i>
                                        <i class="fa-solid fa-trash-can delete-btn"></i>
                                    </td>
                                </tr>
                                <tr class="table-row">
                                    <td class="text-center">3</td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">Vĩnh Phúc</td>
                                    <td class="text-center">3</td>
                                    <td>Chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc mô tả khái quát địa điểm. 
                                        Chúng ta vẫn biết rằng, làm việc với một đoạn văn bản dễ đọc và rõ nghĩa dễ gây rối trí và cản trở việc tập trung vào yếu tố trình bày văn bản.</td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">3</td>
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
                    <label for="place-name" class="form-label">Tên địa điểm:</label>
                    <input id="place-name" name="place-name" class="form-input" placeholder="Tên địa điểm"></input>
                    <span class="form-message"></span>
                </div>

                <div class="form-group">
                    <label for="place-address" class="form-label">Địa chỉ: </label>
                    <input id="place-address" name="place-address" class="form-input" placeholder="Địa chỉ"></input>
                    <span class="form-message"></span>
                </div>

                <div class="form-group">
                    <label for="place-province" class="form-label">Tỉnh:</label>
                    <select name="place-province" id="place-province" class="form-input">
                        <option value="default" class="form-option">Điểm đến</option>
                        <option value="Hải Dương" class="form-option">Hải Dương</option>
                        <option value="Vĩnh Phúc" class="form-option">Vĩnh Phúc</option>
                        <option value="Nghệ An" class="form-option">Nghệ An</option>
                    </select>
                    <span class="form-message"></span>
                </div>

                <div class="form-group">
                    <label for="place-price" class="form-label">Đơn giá:</label>
                    <input id="place-price" name="place-price" class="form-input" placeholder="Đơn giá"></input>
                    <span class="form-message"></span>
                </div>

                <div class="form-group">
                    <label for="place-introduce" class="form-label">Giới thiệu:</label>
                    <textarea id="place-introduce" name="place-introduce" class="form-input" rows="5" placeholder="Giới thiệu về địa điểm"></textarea>
                    <span class="form-message"></span>
                </div>

                <div class="form-group">
                    <label for="place-hotelName" class="form-label">Tên khách sạn:</label>
                    <input id="place-hotelName" name="place-hotelName" class="form-input" placeholder="Tên khách sạn"></input>
                    <span class="form-message"></span>
                </div>

                <div class="form-group">
                    <label for="place-hotelAddress" class="form-label">Địa chỉ khách sạn:</label>
                    <input id="place-hotelAddress" name="place-hotelAddress" class="form-input" placeholder="Địa chỉ khách sạn"></input>
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
    <script type="module" src="../assets/js/place-manager.js"></script>
</body>
</html>