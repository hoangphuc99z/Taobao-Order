@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')
<style>
    body {
      background-color: #f8f9fa;
    }

    .jumbotron {
      background-color: orange;
      color: #fff;
      padding: 4rem 2rem;
      border-radius: 0;
    }

    .jumbotron h1 {
      font-size: 2.5rem;
    }

    .lead {
      font-size: 1.2rem;
    }

    .btn {
      font-size: 1.2rem;
      padding: 10px 20px;
      margin-top: 20px;
    }

    /* Hiệu ứng */
    @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }

    .animated {
      animation-duration: 1s;
      animation-fill-mode: both;
      animation-name: fadeIn;
    }
  </style>
<div class="container mt-5">
    <div class="jumbotron text-center animated">
        <h1 class="display-4">Welcome to Admin Page</h1>
        <p class="lead">Bạn đã đến đúng nơi!</p>
        <a href="#" class="btn btn-lg btn-primary">Bắt đầu</a>
    </div>
</div>
@endsection