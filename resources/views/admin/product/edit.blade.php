@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')
    <div class="card mb-4">
        <div class="card-header">
        Chỉnh Sửa Sản Phẩm
        </div>
        <div class="card-body">
            @if ($errors->any())
                <ul class="alert alert-danger list-unstyled">
                    @foreach ($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        <!-- add form -->

        <!-- add form -->
            <form method="POST"
                action="{{ route('admin.product.update',
                                ['id' => $viewData['product']->getId()]) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
        <!--add element form: name, price, image, description-->
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Tên:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="name" value="{{ $viewData['product']->getName() }}" type="text"
                                class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Giá:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="price" value="{{ $viewData['product']->getPrice() }}" type="number"
                                class="form-control">
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Hình:</label>
                                <div class="col-lg-10 col-md-6 col-sm-12">
                                    <input class="form-control" type="file" name="image">
                                </div>
                        </div>
                    </div>
                    <div class="col">
                        &nbsp;
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Ghi Chú Sản Phẩm</label>
                        <textarea class="form-control" name="description" rows="3">{{ $viewData['product']->getDescription() }}</textarea>
                    </div>
                </div>
                <!--add element form: name, price, image, description-->
                <button type="submit" class="btn btn-primary">Sửa</button>
            </form>
        </div>
    </div>
@endsection