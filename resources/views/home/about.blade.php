@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
<div class="container">
    <h1 class="mt-5 mb-4 text-center">Quy trình mua sắm</h1>

    <!-- Bước 1 -->
    <div class="row mb-5">
        <div class="col-md-6">
            <h3>Bước 1: Tìm kiếm sản phẩm</h3>
            <p>Tìm kiếm sản phẩm mong muốn trên trang web của chúng tôi hoặc sử dụng công cụ tìm kiếm.</p>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('/img/1.jpeg') }}" alt="Tìm kiếm sản phẩm" class="img-fluid">
        </div>
    </div>

    <!-- Bước 2 -->
    <div class="row mb-5">
        <div class="col-md-6 order-md-2">
            <h3>Bước 2: Thêm vào giỏ hàng</h3>
            <p>Chọn số lượng sản phẩm và nhấn vào nút "Thêm vào giỏ hàng" để tiến hành thanh toán.</p>
        </div>
        <div class="col-md-6 order-md-1">
            <img src="{{ asset('/img/2.jpeg') }}" alt="Thêm vào giỏ hàng" class="img-fluid">
        </div>
    </div>

    <!-- Bước 3 -->
    <div class="row mb-5">
        <div class="col-md-6">
            <h3>Bước 3: Thanh toán</h3>
            <p>Chọn phương thức thanh toán và nhập thông tin cần thiết để hoàn tất giao dịch.</p>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('/img/3.jpeg') }}" alt="Thanh toán" class="img-fluid">
        </div>
    </div>

    <!-- Bước 4 -->
    <div class="row mb-5">
        <div class="col-md-6 order-md-2">
            <h3>Bước 4: Xác nhận đơn hàng</h3>
            <p>Xem lại thông tin đơn hàng và nhấn "Xác nhận" để hoàn tất quy trình mua sắm.</p>
        </div>
        <div class="col-md-6 order-md-1">
            <img src="{{ asset('/img/4.jpeg') }}" alt="Xác nhận đơn hàng" class="img-fluid">
        </div>
    </div>

    <!-- Bước 5 -->
    <div class="row mb-5">
        <div class="col-md-6">
            <h3>Bước 5: Hoàn tất</h3>
            <p>Sau khi xác nhận đơn hàng, bạn sẽ nhận được xác nhận và thông tin vận chuyển qua email hoặc tin nhắn.</p>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('/img/5.jpeg') }}" alt="Hoàn tất" class="img-fluid">
        </div>
    </div>

    <!-- Đánh giá từ người dùng -->
    <h2 class="mt-5 mb-4 text-center">Đánh giá từ người dùng</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <p class="card-text">"Quy trình mua sắm dễ dàng và nhanh chóng. Tôi rất hài lòng với dịch vụ của bạn."</p>
                    <p class="card-text"><small class="text-muted">- Nguyễn Văn A</small></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <p class="card-text">"Sản phẩm đáng giá với giá tiền, cũng như dịch vụ giao hàng nhanh chóng."</p>
                    <p class="card-text"><small class="text-muted">- Trần Thị B</small></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <p class="card-text">"Tôi thích cách mà bạn giữ liên lạc với khách hàng và cập nhật thông tin vận chuyển."</p>
                    <p class="card-text"><small class="text-muted">- Lê Văn C</small></p>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection