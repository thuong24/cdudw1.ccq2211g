@extends('layouts.site')

@section('title', 'Trang chủ')
@section('maincontent')

        <section class="section_menu bg-danger">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 text-white py-3">Danh mục sản phẩm</div>
                    <div class="col-md-6">
                        <nav class="navbar navbar-expand-lg text-danger">
                            <div class="container-fluid">
                                <a class="navbar-brand d-none" href="#">Navbar</a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                            <a class="nav-link text-white active" aria-current="page" href="#">Trang
                                                chủ</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white" href="#">Giới thiệu</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link text-white dropdown-toggle" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Sản phẩm
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Iphone</a></li>
                                                <li><a class="dropdown-item" href="#">Apple wach</a></li>
                                                <li><a class="dropdown-item" href="#">Macbook</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-white disabled" aria-disabled="true">Liên hệ</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </section>
        <section class="section_content my-3">
            <div class="container">
                <div class="slider mb-3">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./image/slider_1.webp" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./image/slider_2.webp" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="cate-list mb-3">
                    <div class="row">
                        <div class="large-12 columns">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <img src="./image/slider-1.png" alt="" >
                                    <h4>Sản phẩm 1</h4>
                                </div>
                                <div class="item">
                                    <img src="./image/slider-2.png" alt="" >
                                    <h4>Sản phẩm 2</h4>
                                </div>
                                <div class="item">
                                    <img src="./image/slider-3.png" alt="" >
                                    <h4>Sản phẩm 3</h4>
                                </div>
                                <div class="item">
                                    <img src="./image/slider-1.png" alt="" >
                                    <h4>Sản phẩm 4</h4>
                                </div>
                                <div class="item">
                                    <img src="./image/slider-2.png" alt="" >
                                    <h4>Sản phẩm 5</h4>
                                </div>
                                <div class="item">
                                    <img src="./image/slider-3.png" alt="" >
                                    <h4>Sản phẩm 6</h4>
                                </div>
                                <div class="item">
                                    <img src="./image/slider-1.png" alt="" >
                                    <h4>Sản phẩm 7</h4>
                                </div>
                                <div class="item">
                                    <img src="./image/slider-2.png" alt="" >
                                    <h4>Sản phẩm 8</h4>
                                </div>
                                <div class="item">
                                    <img src="./image/slider-3.png" alt="" >
                                    <h4>Sản phẩm 9</h4>
                                </div>
                                <div class="item">
                                    <img src="./image/slider-1.png" alt="" >
                                    <h4>Sản phẩm 10</h4>
                                </div>
                                <div class="item">
                                    <img src="./image/slider-2.png" alt="" >
                                    <h4>Sản phẩm 11</h4>
                                </div>
                                <div class="item">
                                    <img src="./image/slider-3.png" alt="" >
                                    <h4>Sản phẩm 12</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-list mb-3">
                    <div class="product-title boder-bottom">
                        <strong class="text-danger ">Sản phẩm nổi bật</strong>
                    </div>
                </div>
            </div>
        </section>

    
@endsection
