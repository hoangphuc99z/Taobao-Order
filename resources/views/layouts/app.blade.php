<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <title>@yield('title', 'Online Store Mun')</title>

    <style>
        .box50 {
            width: 50px;
            height: 50px;
            text-align: center;
            line-height: 40px;
            display: inline-block;
        }

        .myfooter ul {
            list-style: none;
            padding: 0px;
            margin: 0px;
        }

        .myfooter ul>LI>a {
            text-decoration: none;
            color: aliceblue;
        }
    </style>
</head>

<body>
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-warning py-4">
        <div class="container">
            <a class="navbar-brand" href="{{route('home.index')}}">Oder Hàng Nội Địa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" href="{{route('home.index')}}">Trang Chủ</a>
                    <a class="nav-link active" href="{{route('product.index')}}">Sản Phẩm</a>
                    <a class="nav-link active" href="{{route('cart.index')}}">Giỏ Hàng</a>
                    <a class="nav-link active" href="{{route('home.about')}}">Giới Thiệu</a>
                    <div class="vr bg-white mx 2 d-none d-lg-block">
                    </div>
                    @guest
                    <a class="nav-link active" href="{{ route('login') }}">Đăng Nhập</a>
                    <a class="nav-link active" href="{{ route('register') }}">Đăng Kí Tài Khoản</a>
                    @else
                    <a class="nav-link active" href="{{ route('myaccount.orders')}}">My Orders</a>
                    <form id="logout" action="{{ route('logout') }}" methoud="POST">
                        <a role="button" class="nav-link active" onclick="document.getElementById('logout').submit();">Logout</a>
                        @csrf
                    </form>
                    @endguest
                </div>
            </div>
    </nav>    
    <section class="mymaincontent">
      <div class="containe">
        <div class="slider">
          <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/qc3.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/qc2.png" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </section>
    
    <section class="text-center py-3 bg-warning">
        <div>
            <h2 class="text-white" aria-current="time"> Hàng Nội Địa Taobao.com</h2>
        </div>
    </section>
    <!-- header -->
    <div class="container my-4">
        @yield('content')
    </div>
    <!--footer -->
    <section class="myfooter bg-warning text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h6 class="fs-5">VĂN PHÒNG GIAO DỊCH</h6>
                    <ul class="list-menu">
                        <li class="li_menu"><a href="/" title="Trang chủ">Trang chủ</a></li>
                        <li class="li_menu"><a href="/gioi-thieu" title="Giới thiệu">Giới thiệu</a></li>
                        <li class="li_menu"><a href="/collections/all" title="Sản phẩm">Sản phẩm</a></li>
                        <li class="li_menu"><a href="/tin-moi-nhat" title="Tin mới nhất">Tin mới nhất</a></li>
                        <li class="li_menu"><a href="/cau-hoi-thuong-gap" title="Câu hỏi thường gặp">Câu hỏi thường gặp</a></li>
                        <li class="li_menu"><a href="/tuyen-dung" title="Tuyển dụng">Tuyển dụng</a></li>
                        <li class="li_menu"><a href="/lien-he" title="Liên hệ">Liên hệ</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h6 class="fs-5">VỀ CHÚNG TÔI</h6>
                    <ul class="list-menu">
                        <li class="li_menu"><a href="/" title="Trang chủ">Trang chủ</a></li>
                        <li class="li_menu"><a href="/gioi-thieu" title="Giới thiệu">Giới thiệu</a></li>
                        <li class="li_menu"><a href="/collections/all" title="Sản phẩm">Sản phẩm</a></li>
                        <li class="li_menu"><a href="/tin-moi-nhat" title="Tin mới nhất">Tin mới nhất</a></li>
                        <li class="li_menu"><a href="/cau-hoi-thuong-gap" title="Câu hỏi thường gặp">Câu hỏi thường gặp</a></li>
                        <li class="li_menu"><a href="/tuyen-dung" title="Tuyển dụng">Tuyển dụng</a></li>
                        <li class="li_menu"><a href="/lien-he" title="Liên hệ">Liên hệ</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h6 class="fs-5">CHÍNH SÁCH BẢO HÀNG</h6>
                    <ul class="list-menu">
                        <li class="li_menu"><a href="/" title="Trang chủ">Trang chủ</a></li>
                        <li class="li_menu"><a href="/gioi-thieu" title="Giới thiệu">Giới thiệu</a></li>
                        <li class="li_menu"><a href="/collections/all" title="Sản phẩm">Sản phẩm</a></li>
                        <li class="li_menu"><a href="/tin-moi-nhat" title="Tin mới nhất">Tin mới nhất</a></li>
                        <li class="li_menu"><a href="/cau-hoi-thuong-gap" title="Câu hỏi thường gặp">Câu hỏi thường gặp</a></li>
                        <li class="li_menu"><a href="/tuyen-dung" title="Tuyển dụng">Tuyển dụng</a></li>
                        <li class="li_menu"><a href="/lien-he" title="Liên hệ">Liên hệ</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h6 class="fs-5">THEO DÕI CHÚNG TUI</h6>
                    <ul class="list-menu">
                        <li class="li_menu"><a href="/" title="Trang chủ">Trang chủ</a></li>
                        <li class="li_menu"><a href="/gioi-thieu" title="Giới thiệu">Giới thiệu</a></li>
                        <li class="li_menu"><a href="/collections/all" title="Sản phẩm">Sản phẩm</a></li>
                        <li class="li_menu"><a href="/tin-moi-nhat" title="Tin mới nhất">Tin mới nhất</a></li>
                        <li class="li_menu"><a href="/cau-hoi-thuong-gap" title="Câu hỏi thường gặp">Câu hỏi thường gặp</a></li>
                        <li class="li_menu"><a href="/tuyen-dung" title="Tuyển dụng">Tuyển dụng</a></li>
                        <li class="li_menu"><a href="/lien-he" title="Liên hệ">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <h5>THIÊN ĐƯỜNG HÀNG NỘI ĐỊA LOGISTICS</h5>
                    <p class="m-0">Copyright@ 2021 Công ty cổ phần thương mại Logistics</p>
                    <p class="m-0">Chứng nhận ĐKKD số: 0388282938 do sở KH & ĐT TP.Hà Nội cấp</p>
                    <p class="m-0">Địa chỉ: Tòa nhà Ladeco 266 Đội Cấn, Ba Đình, Hà Nội</p>
                    <p class="m-0">Điện thoại: 19006750 - Email: hongkonga1990@gmail.vn</p>
                </div>
                <div class="col-md-6">
                    <h5>NHẬN TIN KHUYẾN MÃI</h5>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Nhập email của bạn" aria-label="email" aria-describedby="basic-addon2">
                        <span class="input-group-text bg-warning" id="basic-addon2">Đăng ký</span>
                    </div>
                    <div>
                        <span class="box50 border  bg-white mr-3 ">
                            <img src="img/facebook.png" href="https://www.facebook.com" alt="facebook">
                        </span>
                        <span class="box50 border  bg-white mr-3">
                            <img src="img/instagram.png" alt="instagram">
                        </span>
                        <span class="box50 border bg-white mr-3">
                            <img src="img/youtube.png" alt="youtube">
                        </span>
                        <span class="box50 border bg-white mr-3">
                            <img src="img/gg.png" alt="google">
                        </span>
                    </div>

                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <div class="wsp">
                        Bản quyền thuộc về <a href="https://www.facebook.com/dung.tri.67024">Trí Dũng</a>
                        <span class="opacity1">
                            Cung cấp bởi
                            <a href="https://www.sapo.vn/?utm_campaign=cpn:kho_theme-plm:footer&amp;utm_source=Tu_nhien&amp;utm_medium=referral&amp;utm_content=fm:text_link-km:-sz:&amp;utm_term=&amp;campaign=kho_theme-sapo" rel="noopener" title="Sapo" target="_blank">Sapo</a>
                        </span>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12d-none d-lg-block ">
                    <a>Copyright © 2010-2024 Freepik Company S.L. All rights reserved.
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
</body>

</html>