<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="{{ asset('/css/admin.css') }}" rel="stylesheet" />
    <title>@yield('title', 'Admin - Taobao Order')</title>
    <style>
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

<body>`
    <div class="row g-0">
        <!-- sidebar -->
        <div class="p-3 col fixed text-white bg-warning">
            <a href="" class="text-white text-decoration-none">
                <span class="fs-4">Admin Shop Oder</span>
            </a>
            <hr />
            <ul class="nav flex-column">
                <li><a href="" class="nav-link text-white">- Admin - Trang Chủ</a></li>
                <li><a href="{{ route('admin.product.index') }}" class="nav-link text-white">- Admin - Sản Phẩm</a></li>
                <li>
                    <a href="" class="mt-2 btn bg-black text-white">Quay về trang chủ...</a>
                </li>
            </ul>
        </div>
        <!-- sidebar -->
        <div class="col content-grey">
            <nav class="p-3 shadow text-end">
                <span class="profile-font">Admin</span>
                <img class="img-profile rounded-circle" src="{{ asset('/img/undraw_profile.svg') }}">
            </nav>
            <div class="g-0 m-5">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Công ty Vận chuyển và Shop Mun</h5>
                    <p>Thông tin về công ty Vận chuyển và Shop Mun, chuyên cung cấp dịch vụ vận chuyển và sản phẩm mỹ phẩm.</p>
                </div>
                <div class="col-md-3">
                    <h5>Liên hệ</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Địa chỉ</a></li>
                        <li><a href="#">Số điện thoại</a></li>
                        <li><a href="#">Email</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Theo dõi chúng tôi</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                    </ul>
                </div>
            </div>
            <hr class="bg-light">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>&copy; 2024 Công ty Vận chuyển và Shop Mun. Bản quyền đã được đăng ký.</p>
                </div>
            </div>
        </div>
    </footer>


    <!-- footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
</body>

</html>