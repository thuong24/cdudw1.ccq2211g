<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset(css/bootstrap.min.css) }}">
    <!-- <link rel="stylesheet" href="./fontawesome/css/all.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset(css/layout.css) }}">
    <link rel="stylesheet" href="{{ asset(css/owl.carousel.min.css) }}">
    <link rel="stylesheet" href="{{ asset(css/owl.theme.defau.min.css) }}">


    @yield('header')
</head>

<body>
    <header>
        <section class="section_header">
            <div class="container">
                <div class="row py-3">
                    <div class="col-md-3">
                        <img src="./image/logo.png" class="img-fluid" alt="logo">
                    </div>
                    <div class="col-md-4">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Tìm kiếm sản phẩm..."
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2"><i
                                    class="fa-solid fa-magnifying-glass"></i></span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="fs-3 text-danger"><i class="fa-solid fa-phone-volume"></i></div>
                                    </div>
                                    <div class="col-9">CSKH<br>
                                        <strong class="text-danger">0702775390</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="fs-3 text-danger"><i class="fa-solid fa-user"></i></div>
                                    </div>
                                    <div class="col-9">Xin chào!<br>
                                        <strong class="text-danger">Đăng nhập</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="row">
                            <div class="col">
                                <a href="#" class="position-relative">
                                    <span class="fs-3"><i class="fa-regular fa-heart"></i></span>
                                    <span
                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                        0
                                    </span>
                                </a>
                            </div>
                            <div class="col">
                                <a href="#" class="position-relative">
                                    <span class="fs-3"><i class="fa-solid fa-bag-shopping"></i></span>
                                    <span
                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                        0
                                    </span>
                                </a>
                            </div>
                            <div class="col">
                                <a href="#" class="position-relative">
                                    <span class="fs-3"><i class="fa-solid fa-code-compare"></i></span>
                                    <span
                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                        0
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <main>
        @yield('maincontent')
    </main>
    <footer>
        <section class="section_footer bg-dark text-white">
            <div class="container">
                <div class="row py-3">
                    <div class="col-lg-3 col-md-6 col-12">
                        <h4 class="title-menu">
                            <span>Văn phòng giao dịch</span>
                        </h4>
                        <ul class="list-menu">
                            <li class="li_menu"><a href="/" title="Trang chủ">Trang chủ</a></li>
                            <li class="li_menu"><a href="/gioi-thieu" title="Giới thiệu">Giới thiệu</a></li>
                            <li class="li_menu"><a href="/collections/all" title="Sản phẩm">Sản phẩm</a></li>
                            <li class="li_menu"><a href="/tin-moi-nhat" title="Tin mới nhất">Tin mới nhất</a></li>
                            <li class="li_menu"><a href="/cau-hoi-thuong-gap" title="Câu hỏi thường gặp">Câu hỏi thường
                                    gặp</a></li>
                            <li class="li_menu"><a href="/tuyen-dung" title="Tuyển dụng">Tuyển dụng</a></li>
                            <li class="li_menu"><a href="/lien-he" title="Liên hệ">Liên hệ</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <h4 class="title-menu">
                            <span>Về chúng tôi</span>
                        </h4>
                        <ul class="list-menu">
                            <li class="li_menu"><a href="/" title="Trang chủ">Trang chủ</a></li>
                            <li class="li_menu"><a href="/gioi-thieu" title="Giới thiệu">Giới thiệu</a></li>
                            <li class="li_menu"><a href="/collections/all" title="Sản phẩm">Sản phẩm</a></li>
                            <li class="li_menu"><a href="/tin-moi-nhat" title="Tin mới nhất">Tin mới nhất</a></li>
                            <li class="li_menu"><a href="/cau-hoi-thuong-gap" title="Câu hỏi thường gặp">Câu hỏi thường
                                    gặp</a></li>
                            <li class="li_menu"><a href="/tuyen-dung" title="Tuyển dụng">Tuyển dụng</a></li>
                            <li class="li_menu"><a href="/lien-he" title="Liên hệ">Liên hệ</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <h4 class="title-menu">
                            <span>Chính sách bán hàng</span>
                        </h4>
                        <ul class="list-menu">
                            <li class="li_menu"><a href="/" title="Trang chủ">Trang chủ</a></li>
                            <li class="li_menu"><a href="/gioi-thieu" title="Giới thiệu">Giới thiệu</a></li>
                            <li class="li_menu"><a href="/collections/all" title="Sản phẩm">Sản phẩm</a></li>
                            <li class="li_menu"><a href="/tin-moi-nhat" title="Tin mới nhất">Tin mới nhất</a></li>
                            <li class="li_menu"><a href="/cau-hoi-thuong-gap" title="Câu hỏi thường gặp">Câu hỏi thường
                                    gặp</a></li>
                            <li class="li_menu"><a href="/tuyen-dung" title="Tuyển dụng">Tuyển dụng</a></li>
                            <li class="li_menu"><a href="/lien-he" title="Liên hệ">Liên hệ</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <h4 class="title-menu">
                            <span>
                                Theo dõi chúng tôi
                            </span>
                        </h4>
                        <ul class="list-menu">
                            <li class="li_menu"><a href="/" title="Trang chủ">Trang chủ</a></li>
                            <li class="li_menu"><a href="/gioi-thieu" title="Giới thiệu">Giới thiệu</a></li>
                            <li class="li_menu"><a href="/collections/all" title="Sản phẩm">Sản phẩm</a></li>
                            <li class="li_menu"><a href="/tin-moi-nhat" title="Tin mới nhất">Tin mới nhất</a>
                            </li>
                            <li class="li_menu"><a href="/cau-hoi-thuong-gap" title="Câu hỏi thường gặp">Câu hỏi
                                    thường gặp</a></li>
                            <li class="li_menu"><a href="/tuyen-dung" title="Tuyển dụng">Tuyển dụng</a></li>
                            <li class="li_menu"><a href="/lien-he" title="Liên hệ">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <h4 class="title-menu">
                                <span>
                                    Thiên đường mua sắm Karl store
                                </span>
                            </h4>
                            <ul>
                                <li>Copyright@ 2021 Công ty cổ phần thương mại Karl Mart</li>
                                <li>Chứng nhận ĐKKD số: 0388282938 do sở KH &amp; ĐT TP.Hà Nội cấp</li>
                                <li>Địa chỉ: Tòa nhà Ladeco 266 Đội Cấn, Ba Đình, Hà Nội</li>
                                <li>Điện thoại: <a class="fone" href="tel:19006750">19006750</a>
                                    - Email: <a href="mailto:support@sapo.vn">support@karl.vn</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-12">
                            <h4 class="title-menu">
                                <span>
                                    Nhận tin khuyến mãi
                                </span>
                            </h4>
                            <div class="mail_footer subscribe">
                                <form id="mc-form" class="newsletter-form" data-toggle="validator" novalidate="true">
                                    <div class="input-group">
                                        <div class="groupiput">
                                            <input aria-label="Địa chỉ Email" type="email" class="form-control"
                                                placeholder="Nhập email của bạn" name="EMAIL" required=""
                                                autocomplete="off">
                                        </div>
                                        <span class="input-group-append subscribe">
                                            <button class="btn btn-default bg-danger" type="submit" aria-label="Đăng ký"
                                                name="subscribe">Đăng ký</button>
                                        </span>
                                    </div>
                                </form>
                                <div class="mailchimp-alerts">
                                    <div class="mailchimp-submitting"></div>
                                    <div class="mailchimp-success"></div>
                                    <div class="mailchimp-error"></div>
                                </div>
                            </div>
                            <div class="social-footer">
                                <div class="social-buttons">
                                    <a href="https://www.facebook.com/boroncoweb" class="social-button facebook"
                                        title="Theo dõi trên Facebook"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://twitter.com" class="social-button twitter"
                                        title="Theo dõi trên Twitter"><i class="fab fa-twitter"></i></a>
                                    <a href="https://google.com.vn" class="social-button google"
                                        title="Theo dõi trên Google"><i class="fab fa-google"></i></a>
                                    <a href="https://www.youtube.com/" class="social-button youtube"
                                        title="Theo dõi trên Youtube"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="inner">
                        <div class="row tablet">
                            <div id="copyright" class="col-lg-6 col-md-6 col-12">
                                <div class="wsp">
                                    Bản quyền thuộc về <a href="#">Ego Creative</a>
                                    <span class="opacity1">
                                        Cung cấp bởi
                                        <a href="javascript:;" rel="noopener">Karl</a>
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 text-right d-none d-lg-block">
                                <ul>
                                    <li><a href="/">Trang chủ</a></li>
                                    <li><a href="/gioi-thieu">Giới thiệu</a></li>
                                    <li><a href="/collections/all">Sản phẩm</a></li>
                                    <li><a href="/tin-moi-nhat">Tin mới nhất</a></li>
                                    <li><a href="/cau-hoi-thuong-gap">Câu hỏi thường gặp</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <script src="{{ asset(js/bootstrap.bundle.min.js) }}"></script>
    <script src="{{ asset(js/jquery371.min.js) }}"></script>
    <script src="{{ asset(js/jquery.min.js) }}"></script>
    <script src="{{ asset(js/owl.carousel.js) }}"></script>
    @yield('footer') 
</body>

</html>