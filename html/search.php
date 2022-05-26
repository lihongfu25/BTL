<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MTP Travel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/grid.css">
    <link rel="stylesheet" href="../assets/css/base.css">
    <link rel="stylesheet" href="../assets/css/search.css">
</head>
<body>
    <?php include "./header.php" ?>
    <!-- banner -->
    <div class="banner" style="height: 600px; background-image: url(https://dulichbiendanang.net/wp-content/uploads/2020/12/cau-vang-ba-na-hill2.jpg);">
        <!-- search -->
        <div class="search">
            <h1 class="search__heading1 text-shadow">Tìm kiếm kỳ nghỉ mà bạn thích</h1>
            <h1 class="search__heading2 text-shadow">Đừng bỏ lỡ những ưu đãi cực lớn</h1>
            <form action="search.php" name="search" method="GET" class="search__form">
                <select name="province" id="" class="search__select">
                    <option value="default" class="search__option">Địa điểm</option>
                    <option value="Hải Dương" class="search__option">Hải Dương</option>
                    <option value="Nghệ An" class="search__option">Nghệ An</option>
                    <option value="Vĩnh Phúc" class="search__option">Vĩnh Phúc</option>
                </select>
                <select name="price" id="" class="search__select">
                    <option value="default" class="search__option">Giá tiền</option>
                    <option value="Dưới 2 triệu" class="search__option">Dưới 2 triệu</option>
                    <option value="2 triệu - 4 triệu" class="search__option">2 triệu - 4 triệu</option>
                    <option value="4 triệu - 6 triệu" class="search__option">4 triệu - 6 triệu</option>
                    <option value="Trên 6 triệu" class="search__option">Trên 6 triệu</option>                
                </select>
                <div class="search__discount">
                    <label for="discount" class="search__discount--label">Ưu đãi</label>
                    <input type="checkbox" name="discount" id="discount" class="search__discount--input">
                </div>
                <button type="submit" class="search__btn"></button>
            </form>
        </div>
    </div>
    <!-- content -->
    <div class="content">
        <div class="grid wide">
            <div class="row">
                <div class="col l-3">
                    <!-- đề xuất -->
                    <div class="proposals">
                        <h3 class="proposals__title">Gợi ý cho bạn</h3>
                        <div class="proposals__place">
                            <img src="../assets/img/place/hoian2.jpg" class="proposals__img">
                            <div class="proposals__info">
                                <h6 class="proposals__name">Hội An</h6>
                                <p class="proposals__desc">Lorem ipsum dolor sit amet, consectetur adip iscing elit. Proin rhoncus urna dictum neque molestie ultricies mauris.</p>
                            </div>
                        </div>
                        <div class="proposals__place">
                            <img src="../assets/img/place/hoian2.jpg" class="proposals__img">
                            <div class="proposals__info">
                                <h6 class="proposals__name">Hội An</h6>
                                <p class="proposals__desc">Lorem ipsum dolor sit amet, consectetur adip iscing elit. Proin rhoncus urna dictum neque molestie ultricies mauris.</p>
                            </div>
                        </div>
                        <div class="proposals__place">
                            <img src="../assets/img/place/hoian2.jpg" class="proposals__img">
                            <div class="proposals__info">
                                <h6 class="proposals__name">Hội An</h6>
                                <p class="proposals__desc">Lorem ipsum dolor sit amet, consectetur adip iscing elit. Proin rhoncus urna dictum neque molestie ultricies mauris.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col l-9">
                    <div class="row">
                        <div class="col l-4">
                            <div class="tour-rectangle__place">
                                <img src="../assets/img/place/ban-cat-cat_sapa.jpg" alt="" class="tour-rectangle__place--img">
                                <div class="tour-rectangle__place--content">
                                    <div style="display: flex; justify-content: space-between; align-items: flex-end;">
                                        <h3 class="tour-rectangle__place--name">Sapa</h3>
                                        <h6 class="tour-rectangle__place--province">
                                            <i class="fa-solid fa-location-dot" style="margin-right: 5px;"></i>
                                            Lào Cai
                                        </h6>
                                    </div>
                                    <p class="tour-rectangle__place--desc">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                    </p>
                                    <button class="tour-rectangle__place--btn">Tìm hiểu</button>
                                </div>
                            </div>
                        </div>
                        <div class="col l-4">
                            <div class="tour-rectangle__place">
                                <img src="../assets/img/place/hoian.jpg" alt="" class="tour-rectangle__place--img">
                                <div class="tour-rectangle__place--content">
                                    <div style="display: flex; justify-content: space-between; align-items: flex-end;">
                                        <h3 class="tour-rectangle__place--name">Hội An</h3>
                                        <h6 class="tour-rectangle__place--province">
                                            <i class="fa-solid fa-location-dot" style="margin-right: 5px;"></i>
                                            Quảng Nam
                                        </h6>
                                    </div>
                                    <p class="tour-rectangle__place--desc">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                    </p>
                                    <button class="tour-rectangle__place--btn">Tìm hiểu</button>
                                </div>
                            </div>
                        </div>
                        <div class="col l-4">
                            <div class="tour-rectangle__place">
                                <img src="../assets/img/place/Phuquoc2.jpg" alt="" class="tour-rectangle__place--img">
                                <div class="tour-rectangle__place--content">
                                    <div style="display: flex; justify-content: space-between; align-items: flex-end;">
                                        <h3 class="tour-rectangle__place--name">Phú Quốc</h3>
                                        <h6 class="tour-rectangle__place--province">
                                            <i class="fa-solid fa-location-dot" style="margin-right: 5px;"></i>
                                            Kiên Giang
                                        </h6>
                                    </div>
                                    <p class="tour-rectangle__place--desc">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                    </p>
                                    <button class="tour-rectangle__place--btn">Tìm hiểu</button>
                                </div>
                            </div>
                        </div>
                        <div class="col l-4">
                            <div class="tour-rectangle__place">
                                <img src="../assets/img/place/ban-cat-cat_sapa.jpg" alt="" class="tour-rectangle__place--img">
                                <div class="tour-rectangle__place--content">
                                    <div style="display: flex; justify-content: space-between; align-items: flex-end;">
                                        <h3 class="tour-rectangle__place--name">Sapa</h3>
                                        <h6 class="tour-rectangle__place--province">
                                            <i class="fa-solid fa-location-dot" style="margin-right: 5px;"></i>
                                            Lào Cai
                                        </h6>
                                    </div>
                                    <p class="tour-rectangle__place--desc">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                    </p>
                                    <button class="tour-rectangle__place--btn">Tìm hiểu</button>
                                </div>
                            </div>
                        </div>
                        <div class="col l-4">
                            <div class="tour-rectangle__place">
                                <img src="../assets/img/place/hoian.jpg" alt="" class="tour-rectangle__place--img">
                                <div class="tour-rectangle__place--content">
                                    <div style="display: flex; justify-content: space-between; align-items: flex-end;">
                                        <h3 class="tour-rectangle__place--name">Hội An</h3>
                                        <h6 class="tour-rectangle__place--province">
                                            <i class="fa-solid fa-location-dot" style="margin-right: 5px;"></i>
                                            Quảng Nam
                                        </h6>
                                    </div>
                                    <p class="tour-rectangle__place--desc">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                    </p>
                                    <button class="tour-rectangle__place--btn">Tìm hiểu</button>
                                </div>
                            </div>
                        </div>
                        <div class="col l-4">
                            <div class="tour-rectangle__place">
                                <img src="../assets/img/place/Phuquoc2.jpg" alt="" class="tour-rectangle__place--img">
                                <div class="tour-rectangle__place--content">
                                    <div style="display: flex; justify-content: space-between; align-items: flex-end;">
                                        <h3 class="tour-rectangle__place--name">Phú Quốc</h3>
                                        <h6 class="tour-rectangle__place--province">
                                            <i class="fa-solid fa-location-dot" style="margin-right: 5px;"></i>
                                            Kiên Giang
                                        </h6>
                                    </div>
                                    <p class="tour-rectangle__place--desc">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                    </p>
                                    <button class="tour-rectangle__place--btn">Tìm hiểu</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <?php include "./footer.php" ?>
    <script type="module" src="../assets/js/search.js"></script>
</body>
</html>