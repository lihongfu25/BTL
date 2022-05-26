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
    <link rel="stylesheet" href="../assets/css/index.css">
</head>
<body>
    <?php include "./header.php" ?>
    <!-- banner -->
    <div class="banner" style="height: 800px; background-image: url(../assets/img/place/index-banner.jpg);">
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
        <!-- outstanding tours -->
        <div class="grid wide tours outstanding-tours">
            <div class="tours__heading">
                <h6 class="tours__desc">CÓ THỂ BẠN SẼ THÍCH</h6>
                <h3 class="tours__title">CÁC ĐỊA ĐIỂM ĐÁNG CHÚ Ý</h3>
            </div>
            <div class="row">
                <div class="col l-4">
                    <div class="tour-square__place">
                        <img src="../assets/img/place/Coto.jpg" alt="Cô Tô" class="tour-square__place--img">
                        <div class="tour-square__place--desc">
                            <h3 class="tour-square__place--name text-shadow">Cô Tô</h3>
                            <h6 class="tour-square__place--province text-shadow">Quảng Ninh</h6>
                        </div>
                        <div class="tour-square__place--details">
                            <h3 class="tour-square__place--details--name">Cô Tô</h3>
                            <div class="tour-square__place--details--rate">
                                <div class="rate">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="rate rate-active">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <h6 class="tour-square__place--details--price">Giá: 2.345.000đ</h6>
                            <button class="tour-square__place--details--btn">XEM NGAY</button>
                        </div>
                    </div>
                </div>
                <div class="col l-4">
                    <div class="tour-square__place">
                        <img src="../assets/img/place/ban-cat-cat-sapa1.jpg" alt="Sapa" class="tour-square__place--img">
                        <div class="tour-square__place--desc">
                            <h3 class="tour-square__place--name">Sapa</h3>
                            <h6 class="tour-square__place--province">Lào Cai</h6>
                        </div>
                        <div class="tour-square__place--details">
                            <h3 class="tour-square__place--details--name">Sapa</h3>
                            <div class="tour-square__place--details--rate">
                                <div class="rate">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="rate rate-active">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <h6 class="tour-square__place--details--price">Giá: 2.345.000đ</h6>
                            <button class="tour-square__place--details--btn">XEM NGAY</button>
                        </div>
                    </div>
                </div>
                <div class="col l-4">
                    <div class="tour-square__place">
                        <img src="../assets/img/place/halong.jpg" alt="Hạ Long" class="tour-square__place--img">
                        <div class="tour-square__place--desc">
                            <h3 class="tour-square__place--name">Hạ Long</h3>
                            <h6 class="tour-square__place--province">Quảng Ninh</h6>
                        </div>
                        <div class="tour-square__place--details">
                            <h3 class="tour-square__place--details--name">Hạ Long</h3>
                            <div class="tour-square__place--details--rate">
                                <div class="rate">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="rate rate-active">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <h6 class="tour-square__place--details--price">Giá: 2.345.000đ</h6>
                            <button class="tour-square__place--details--btn">XEM NGAY</button>
                        </div>
                    </div>
                </div>
                <div class="col l-4">
                    <div class="tour-square__place">
                        <img src="../assets/img/place/phuquoc4.jpg" alt="Phú Quốc" class="tour-square__place--img">
                        <div class="tour-square__place--desc">
                            <h3 class="tour-square__place--name">Phú Quốc</h3>
                            <h6 class="tour-square__place--province">Kiên Giang</h6>
                        </div>
                        <div class="tour-square__place--details">
                            <h3 class="tour-square__place--details--name">Phú Quốc</h3>
                            <div class="tour-square__place--details--rate">
                                <div class="rate">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="rate rate-active">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <h6 class="tour-square__place--details--price">Giá: 2.345.000đ</h6>
                            <button class="tour-square__place--details--btn">XEM NGAY</button>
                        </div>
                    </div>
                </div>
                <div class="col l-4">
                    <div class="tour-square__place">
                        <img src="../assets/img/place/hoian2.jpg" alt="Hội An" class="tour-square__place--img">
                        <div class="tour-square__place--desc">
                            <h3 class="tour-square__place--name">Hội An</h3>
                            <h6 class="tour-square__place--province">Quảng Nam</h6>
                        </div>
                        <div class="tour-square__place--details">
                            <h3 class="tour-square__place--details--name">Hội An</h3>
                            <div class="tour-square__place--details--rate">
                                <div class="rate">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="rate rate-active">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <h6 class="tour-square__place--details--price">Giá: 2.345.000đ</h6>
                            <button class="tour-square__place--details--btn">XEM NGAY</button>
                        </div>
                    </div>
                </div>
                <div class="col l-4">
                    <div class="tour-square__place">
                        <img src="../assets/img/place/thac-ban-gioc-cao-bang.jpg" alt="Cao Bằng" class="tour-square__place--img">
                        <div class="tour-square__place--desc">
                            <h3 class="tour-square__place--name">Cao Bằng</h3>
                            <h6 class="tour-square__place--province">Cao Bằng</h6>
                        </div>
                        <div class="tour-square__place--details">
                            <h3 class="tour-square__place--details--name">Cao Bằng</h3>
                            <div class="tour-square__place--details--rate">
                                <div class="rate">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <div class="rate rate-active">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                            <h6 class="tour-square__place--details--price">Giá: 2.345.000đ</h6>
                            <button class="tour-square__place--details--btn">XEM NGAY</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner 2 -->
        <div class="banner-2">
            <h2 class="banner-2__title text-shadow">PHÁ ĐẢO MIỀN TÂY</h2>
            <h4 class="banner-2__desc text-shadow">Cùng chúng tôi đến miền sông nước để cảm nhận vẻ đẹp nông thôn Việt Nam</h4>
            <button class="banner-2__btn">Xem ngay</button>
        </div>
        <!-- slide -->
        <div class="tour-slider">
            <div class="tour-slider__content">
                <h6 class="tour-slider__name">Biển Nha Trang</h6>
                <p class="tour-slider__desc">Chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc mô tả khái quát địa điểm. 
                    Chúng ta vẫn biết rằng, làm việc với một đoạn văn bản dễ đọc và rõ nghĩa dễ gây rối trí và cản trở việc tập trung vào yếu tố trình bày văn bản.
                </p>
                <div class="tour-slider__details--rate">
                    <div class="rate">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <div class="rate rate-active">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>
                <h6 class="tour-slider__details--price">2.345.000đ</h6>
                <button class="tour-slider__details--btn">XEM NGAY</button>
            </div>
            <!-- slider -->
                <div class="slideshow">
    
                    <div class="slides">
                        
                        <!-- radio btn -->
                        <input type="radio" name="slide-img" id="slide_1" class="slide-radio">
                        <input type="radio" name="slide-img" id="slide_2" class="slide-radio">
                        <input type="radio" name="slide-img" id="slide_3" class="slide-radio">
                        <input type="radio" name="slide-img" id="slide_4" class="slide-radio">
    
                        <!-- slide img -->
                        <img src="https://busvietnam.net/wp-content/uploads/2019/05/nha-trang-1.jpg" alt="" class="slide-img first">
                            
                        <img src="http://dulichvietnam.com.vn/data/du-lich-hawaii-1.jpg" alt="" class="slide-img second">

                        <img src="https://i.ytimg.com/vi/5Ok7-XHPGdA/maxresdefault.jpg" alt="" class="slide-img third">

                        <img src="https://images.fineartamerica.com/images/artworkimages/mediumlarge/1/kealani-sunset-a-colorful-sunset-in-wailea-maui-hawaii-nature-photographer.jpg" alt="" class="slide-img final">

                        <!-- navigation auto -->
                        <div class="navigation-auto">
                            <div class="auto-btn1"></div>
                            <div class="auto-btn2"></div>
                            <div class="auto-btn3"></div>
                            <div class="auto-btn4"></div>
                        </div>
                    </div>
    
                    <!-- manual navigation -->
                    <div class="navigation-manual">
                        <label for="slide_1" class="manual-btn"></label>
                        <label for="slide_2" class="manual-btn"></label>
                        <label for="slide_3" class="manual-btn"></label>
                        <label for="slide_4" class="manual-btn"></label>
                    </div>
    
                </div>
        </div>
        <!-- famous tour -->
        <div class="grid wide tours famous-tours">
            <div class="tours__heading">
                <h6 class="tours__desc">CÓ THỂ BẠN SẼ THÍCH</h6>
                <h3 class="tours__title">NHỮNG TOUR DU LỊCH NỔI TIẾNG</h3>
            </div>
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
            </div>
        </div>
        <!-- tours cities -->
        <div class="grid wide tours tour-cities">
            <div class="tours__heading">
                <h6 class="tours__desc">CÓ THỂ BẠN SẼ THÍCH</h6>
                <h3 class="tours__title">CÁC THÀNH PHỐ DU LỊCH</h3>
            </div>
            <div class="row">
                <div class="col l-6">
                    <div class="row">
                        <div class="col l-6">
                            <div class="tour-cities__place">
                                <img src="../assets/img/place/Dong_van_HaGiang_2.jpg" alt="" class="tour-cities__place--img">
                                <div class="tour-cities__place--content">
                                    <h3 class="tour-cities__place--name text-shadow">Hà Giang</h3>
                                    <h6 class="tour-cities__place--price text-shadow">2.345.000đ</h6>
                                    <button class="tour-cities__place--btn">Xem ngay</button>
                                </div>
                            </div>
                        </div>
                        <div class="col l-6">
                            <div class="tour-cities__place">
                                <img src="../assets/img/place/Dong_van_HaGiang_2.jpg" alt="" class="tour-cities__place--img">
                                <div class="tour-cities__place--content">
                                    <h3 class="tour-cities__place--name text-shadow">Hà Giang</h3>
                                    <h6 class="tour-cities__place--price text-shadow">2.345.000đ</h6>
                                    <button class="tour-cities__place--btn">Xem ngay</button>
                                </div>
                            </div>
                        </div>
                        <div class="col l-6">
                            <div class="tour-cities__place">
                                <img src="../assets/img/place/Dong_van_HaGiang_2.jpg" alt="" class="tour-cities__place--img">
                                <div class="tour-cities__place--content">
                                    <h3 class="tour-cities__place--name text-shadow">Hà Giang</h3>
                                    <h6 class="tour-cities__place--price text-shadow">2.345.000đ</h6>
                                    <button class="tour-cities__place--btn">Xem ngay</button>
                                </div>
                            </div>
                        </div>
                        <div class="col l-6">
                            <div class="tour-cities__place">
                                <img src="../assets/img/place/Dong_van_HaGiang_2.jpg" alt="" class="tour-cities__place--img">
                                <div class="tour-cities__place--content">
                                    <h3 class="tour-cities__place--name text-shadow">Hà Giang</h3>
                                    <h6 class="tour-cities__place--price text-shadow">2.345.000đ</h6>
                                    <button class="tour-cities__place--btn">Xem ngay</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col l-6">
                    <div class="tour-cities__container">
                        <div class="tour-cities__map">
                            <img src="../assets/img/place/VN-NorthSide.png" alt="" class="tour-cities__map--img">
                        </div>
                        <div class="tour-cities__details">
                            <h3 class="tour-cities__title">Miền Bắc</h3>
                            <p class="tour-cities__desc">
                                Chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc mô tả khái quát địa điểm. 
                                Chúng ta vẫn biết rằng, làm việc với một đoạn văn bản dễ đọc và rõ nghĩa dễ gây rối trí và cản trở việc tập trung vào yếu tố trình bày văn bản.
                            </p>
                            <div class="tour-cities__list">
                                <h6 class="tour-cities__list--heading">Các thành phố du lịch</h6>
                                <li class="tour-cities__item" name="Hà Nội">Hà Nội</li>
                                <li class="tour-cities__item" name="Hà Giang">Hà Giang</li>
                                <li class="tour-cities__item" name="Sapa">Sapa</li>
                                <li class="tour-cities__item" name="Hải Dương">Hải Dương</li>
                                <li class="tour-cities__item" name="Vinh">Vinh</li>
                            </div>
                        </div>
                    </div>                 
                </div>
                <div class="col l-6">
                    <div class="tour-cities__container">
                        <div class="tour-cities__map">
                            <img src="../assets/img/place/VN-SouthSide.png" alt="" class="tour-cities__map--img">
                        </div>
                        <div class="tour-cities__details">
                            <h3 class="tour-cities__title">Miền Nam</h3>
                            <p class="tour-cities__desc">
                                Chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc mô tả khái quát địa điểm. 
                                Chúng ta vẫn biết rằng, làm việc với một đoạn văn bản dễ đọc và rõ nghĩa dễ gây rối trí và cản trở việc tập trung vào yếu tố trình bày văn bản.
                            </p>
                            <div class="tour-cities__list">
                                <h6 class="tour-cities__list--heading">Các thành phố du lịch</h6>
                                <li class="tour-cities__item" name="Đà Lạt">Đà Lạt</li>
                                <li class="tour-cities__item" name="Nha Trang">Nha Trang</li>
                                <li class="tour-cities__item" name="Phan Thiết">Phan Thiết</li>
                                <li class="tour-cities__item" name="Cần Thơ">Cần Thơ</li>
                                <li class="tour-cities__item" name="Phú Quốc">Phú Quốc</li>
                            </div>
                        </div>
                    </div>                 
                </div>
                <div class="col l-6">
                    <div class="row">
                        <div class="col l-6">
                            <div class="tour-cities__place">
                                <img src="../assets/img/place/Dong_van_HaGiang_2.jpg" alt="" class="tour-cities__place--img">
                                <div class="tour-cities__place--content">
                                    <h3 class="tour-cities__place--name text-shadow">Hà Giang</h3>
                                    <h6 class="tour-cities__place--price text-shadow">2.345.000đ</h6>
                                    <button class="tour-cities__place--btn">Xem ngay</button>
                                </div>
                            </div>
                        </div>
                        <div class="col l-6">
                            <div class="tour-cities__place">
                                <img src="../assets/img/place/Dong_van_HaGiang_2.jpg" alt="" class="tour-cities__place--img">
                                <div class="tour-cities__place--content">
                                    <h3 class="tour-cities__place--name text-shadow">Hà Giang</h3>
                                    <h6 class="tour-cities__place--price text-shadow">2.345.000đ</h6>
                                    <button class="tour-cities__place--btn">Xem ngay</button>
                                </div>
                            </div>
                        </div>
                        <div class="col l-6">
                            <div class="tour-cities__place">
                                <img src="../assets/img/place/Dong_van_HaGiang_2.jpg" alt="" class="tour-cities__place--img">
                                <div class="tour-cities__place--content">
                                    <h3 class="tour-cities__place--name text-shadow">Hà Giang</h3>
                                    <h6 class="tour-cities__place--price text-shadow">2.345.000đ</h6>
                                    <button class="tour-cities__place--btn">Xem ngay</button>
                                </div>
                            </div>
                        </div>
                        <div class="col l-6">
                            <div class="tour-cities__place">
                                <img src="../assets/img/place/Dong_van_HaGiang_2.jpg" alt="" class="tour-cities__place--img">
                                <div class="tour-cities__place--content">
                                    <h3 class="tour-cities__place--name text-shadow">Hà Giang</h3>
                                    <h6 class="tour-cities__place--price text-shadow">2.345.000đ</h6>
                                    <button class="tour-cities__place--btn">Xem ngay</button>
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
    <script type="module" src="../assets/js/index.js"></script>
</body>
</html>
