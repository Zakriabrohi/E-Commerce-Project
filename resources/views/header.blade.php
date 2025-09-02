<?php
  use App\Http\controllers\ProductController;
  $total = ProductController::cartItems();
?>
<!-- Add Bootstrap Icons CDN in your <head> if not already added -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3">

    <div class="container-fluid">

        <!-- Brand -->
        <a class="navbar-brand fw-bold text-primary" href="{{ route('user.dashboard') }}" style="font-size: 20px;">
            <i class="bi bi-shop"></i> ABZ Shop
        </a>

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links and Search -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Left Links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-3">
                <li class="nav-item">
                    <a class="nav-link active" href="#"><i class="bi bi-house-door"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-box-seam"></i> Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/myorder"><i class="bi bi-bag-check"></i> Orders</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/cartlist">
                        <i class="bi bi-cart3" style="color:red;"></i>
                        Cart(<span style="color:red;">{{$total}}</span>)
                    </a>
                </li>
            </ul>

            <!-- Search Bar -->
            <form action="/search" method="get" class="d-flex me-3" role="search">
                @csrf
                <input class="form-control me-2 search-box" type="search" name="search" placeholder="Search products" aria-label="Search">
                <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
            </form>

            <!-- Login Button -->
             @if(session::has('user'))
            <a href="/logout" class="btn btn-outline-primary">
                <i class="bi bi-box-arrow-in-right"></i> Logout
            </a>
             @else
            <a href="/" class="btn btn-outline-primary">
                <i class="bi bi-box-arrow-in-right"></i> Login
            </a>
            <a href="/reg" class="btn btn-outline-primary">
                <i class="bi bi-box-arrow-in-right"></i> Registarion
            </a>
             @endif

        </div>
    </div>
</nav>

<style>
    .search-box {
        width: 250px;
    }

    @media (max-width: 768px) {
        .search-box {
            width: 100%;
            margin-bottom: 10px;
        }
    }

    .navbar-nav .nav-link {
        font-weight: 500;
        font-size: 16px;
    }

    .navbar .btn {
        font-size: 15px;
    }
</style>
