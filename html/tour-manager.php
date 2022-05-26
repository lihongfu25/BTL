<?php
    $connect = mysqli_connect("localhost", "root", "", "qlbantour");

    $currentPage = 1;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["page"]))
            $currentPage = $_POST['page'];
        elseif (isset($_POST["delete"])) {
            $ID = $_POST["delete"];

            $sql = "DELETE FROM tour WHERE MaTour = $ID";
            mysqli_query($connect, $sql);
        }
        else {
            if (isset($_POST["tour-name"]))
                $tourName = $_POST["tour-name"];
            if (isset($_POST["tour-destination"]))
                $tourDestination = $_POST["tour-destination"];
            if (isset($_POST["tour-days"]))
                $tourDay = $_POST["tour-days"];
            if (isset($_POST["tour-startDay"]))
                $tourStartDay = $_POST["tour-startDay"];
            if (isset($_POST["tour-desc"]))
                $tourDesc = $_POST["tour-desc"];
            
            $tempSQL = "SELECT MaDiaDiem FROM diadiem WHERE TenDiaDiem = '$tourDestination'";
            $maDiaDiem = mysqli_fetch_all(mysqli_query($connect, $tempSQL), MYSQLI_ASSOC)[0]['MaDiaDiem'];

            if (isset($_POST["id"])) {
                $ID = $_POST["id"];    
    
                $sql = "UPDATE tour
                        SET TenTour = '$tourName',
                            SoNgay = '$tourDay',
                            NgayKhoiHanh = '$tourStartDay',
                            MoTa = '$tourDesc',
                            MaDiaDiem = $maDiaDiem
                        WHERE MaTour = $ID
                        ";
                mysqli_query($connect, $sql);
                echo "<script> alert('Cập nhật thành công !') </script>";
            }
            else {
                $sql = "INSERT INTO tour(MaDiaDiem, TenTour, MoTa, NgayKhoiHanh, SoNgay)
                        VALUES ($maDiaDiem, '$tourName', '$tourDesc', '$tourStartDay', $tourDay)
                        ";
                mysqli_query($connect, $sql);
                echo "<script> alert('Thêm thành công !') </script>";
            }
        }   
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Tour</title>
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
                    <a href="image-manager.php" class="menu__link">
                        <i class="fa-solid fa-map-location menu__icon"></i>
                        Quản lý hình ảnh
                    </a>
                </li>
                <li class="menu__item">
                    <a href="member-manager.php" class="menu__link">
                        <i class="fa-solid fa-users menu__icon"></i>
                        Quản lý thành viên
                    </a>
                </li>
                <li class="menu__item">
                    <a href="news-manager.php" class="menu__link">
                        <i class="fa-solid fa-users menu__icon"></i>
                        Quản lý tin tức
                    </a>
                </li>
                <li class="menu__item active">
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
                    <h1 class="content__tour--title">Tour</h1>
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
                            <input type="text" id="search-input" placeholder="Nhập tên tour muốn tìm kiếm" class="">
                        </div>
                    </div>
                    
    
                    <div style="width: 1500px; overflow-y: hidden; border: 1px solid #ccc; margin-top: 20px;">

                        <table style="width: 1920px;">
                            <thead>
                                <tr>
                                    <th style="width: 180px;">Mã Tour</th>
                                    <th style="width: 400px;">Tên Tour</th>
                                    <th style="width: 220px;">Điểm Đến</th>
                                    <th style="width: 160px;">Số Ngày Đi</th>
                                    <th style="width: 240px;">Ngày Khởi Hành</th>
                                    <th style="width: 600px;">Mô Tả</th>
                                    <th style="width: 160px;"> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $sql = "SELECT MaTour, TenTour, TenDiaDiem, SoNgay, NgayKhoiHanh, MoTa
                                            FROM tour t inner join diadiem d on t.MaDiaDiem = d.MaDiaDiem";
                                    $rows = mysqli_fetch_all(mysqli_query($connect, $sql), MYSQLI_ASSOC);
                                    $page = ceil(count($rows) / 10);
                                    if ($currentPage == $page) {
                                        for ($i = (($currentPage - 1) * 10); $i < count($rows); $i++) {
                                            echo "
                                                <tr class='table-row'>
                                                    <td class='text-center'>" . $rows[$i]['MaTour'] . "</td>
                                                    <td class='text-center'>" . $rows[$i]['TenTour'] . "</td>
                                                    <td class='text-center'>" . $rows[$i]['TenDiaDiem'] . "</td>
                                                    <td class='text-center'>" . $rows[$i]['SoNgay'] . "</td>
                                                    <td class='text-center'>" . $rows[$i]['NgayKhoiHanh'] . "</td>
                                                    <td class='text-overflow' style='max-width: 600px'>" . $rows[$i]['MoTa'] . "</td>
                                                    <td class='text-center'>
                                                        <i class='fa-solid fa-pencil update-btn'></i>
                                                        <i class='fa-solid fa-trash-can delete-btn'></i>
                                                    </td>
                                                </tr>
                                            
                                            ";
                                        }
                                    }
                                    else {
                                        for ($i = (($currentPage - 1) * 10); $i <= ($currentPage * 10 - 1); $i++) {
                                            echo "
                                                <tr class='table-row'>
                                                    <td class='text-center'>" . $rows[$i]['MaTour'] . "</td>
                                                    <td class='text-center'>" . $rows[$i]['TenTour'] . "</td>
                                                    <td class='text-center'>" . $rows[$i]['TenDiaDiem'] . "</td>
                                                    <td class='text-center'>" . $rows[$i]['SoNgay'] . "</td>
                                                    <td class='text-center'>" . $rows[$i]['NgayKhoiHanh'] . "</td>
                                                    <td class='text-overflow' style='max-width: 600px'>" . $rows[$i]['MoTa'] . "</td>
                                                    <td class='text-center'>
                                                        <i class='fa-solid fa-pencil update-btn'></i>
                                                        <i class='fa-solid fa-trash-can delete-btn'></i>
                                                    </td>
                                                </tr>
                                            
                                            ";
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                        
                    </div>
    
                    <form method="POST" class="page">
                        
                        <?php 
                            echo "
                                <button name='page' class='page-nav page-prev'>
                                    <i class='fa-solid fa-angle-left'></i>
                                </button>
                            ";
                            for ($i = 1; $i <= $page; $i++)
                                echo "<button name='page' value='" . $i . "' class='page-nav page-number'>" . $i . "</button>";
                            echo "
                                <button name='page' class='page-nav page-next' value='" . $currentPage+1 . "'>
                                    <i class='fa-solid fa-angle-right'></i>
                                </button>
                                <script>
                                    let changePageBtns = document.querySelectorAll('.page-number')
                                    let prevPageBtn = document.querySelector('.page-prev')
                                    let nextPageBtn = document.querySelector('.page-next')

                                    if ($currentPage == 1)
                                        prevPageBtn.disabled = true
                                    else
                                        prevPageBtn.disabled = false

                                    if ($currentPage == $page)
                                        nextPageBtn.disabled = true
                                    else
                                        nextPageBtn.disabled = false

                                    changePageBtns.forEach(changePageBtn => {
                                        if (changePageBtn.value == '$currentPage')
                                            changePageBtn.classList.add('active')
                                        else
                                            changePageBtn.classList.remove('active')
                                    })

                                    prevPageBtn.onclick = () => {
                                        console.log(prevPageBtn.name)
                                        if ($currentPage > 1)
                                            prevPageBtn.value = '" . $currentPage - 1 . "'
                                    }

                                    nextPageBtn.onclick = () => {
                                        if ($currentPage < $page)
                                            nextPageBtn.value = '" . $currentPage + 1 . "'
                                    }
                                </script>
                            ";
                        ?>
                        
                    </form>
                </div>
            </div>
            <p class="copyright-text">&copy; All rights reserved. <strong>MTP Travel</strong></p>
        </div>
        
        <div class="form-container">
            <form action="" class="form" method="post">

                <h2 class="form-heading text-center">Nhập thông tin mới</h2>

                <input type="text" id="id" name="" style="display: none;">

                <div class="form-group">
                    <label for="tour-name" class="form-label">Tên tour:</label>
                    <input id="tour-name" name="tour-name" class="form-input" placeholder="Tên tour" required></input>
                    <span class="form-message"></span>
                </div>

                <div class="form-group">
                    <label for="tour-destination" class="form-label">Điểm đến</label>
                    <select name="tour-destination" id="tour-destination" class="form-input" required>
                        <?php 
                            echo "<option value='' class='form-option'>Điểm đến</option>";
                            $sql = "SELECT TenDiaDiem FROM diadiem";
                            $rows = mysqli_fetch_all(mysqli_query($connect, $sql), MYSQLI_ASSOC);
                            for ($i = 0; $i < count($rows); $i++) {
                               echo "<option value='" . $rows[$i]['TenDiaDiem'] . "' class='form-option'>" . $rows[$i]['TenDiaDiem'] . "</option>";
                            } 
                        ?>
                    </select>
                    <span class="form-message"></span>
                </div>

                <div class="form-group">
                    <label for="tour-days" class="form-label">Số ngày đi:</label>
                    <input id="tour-days" name="tour-days" class="form-input" placeholder="Số ngày đi" required></input>
                    <span class="form-message"></span>
                </div>

                <div class="form-group">
                    <label for="tour-startDay" class="form-label">Ngày khởi hành:</label>
                    <input id="tour-startDay" name="tour-startDay" type="date" class="form-input" placeholder="Ngày khởi hành" required></input>
                    <span class="form-message"></span>
                </div>

                <div class="form-group">
                    <label for="tour-desc" class="form-label">Mô tả:</label>
                    <textarea id="tour-desc" name="tour-desc" class="form-input" rows="5" placeholder="Mô tả về chuyến đi" required></textarea>
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
                <button name="delete" type="submit" class="form-delete__btn--yes">Có</button>
                <button type="button" class="form-delete__btn--no">Không</button>                
            </div>
        </div>
    </div>
    <script type="module" src="../assets/js/tour-manager.js"></script>
</body>
</html>