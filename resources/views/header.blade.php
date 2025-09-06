<?php
  use App\Http\controllers\ProductController;
  $total = ProductController::cartItems();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABZ Tech - Header</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Orbitron:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary: #0072ff;
            --secondary: #00c6ff;
            --accent: #6a11cb;
            --dark: #0a0e17;
            --light: #f8f9fa;
            --text-dark: #1a1d28;
            --text-light: #f8f9fa;
            --gradient: linear-gradient(45deg, var(--primary), var(--secondary), var(--accent));
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f9fafb;
            color: #333;
            padding-top: 80px; /* Account for fixed header */
        }

        .demo-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
            text-align: center;
        }

        /* Header Styles */
        .navbar {
            background: rgba(10, 14, 23, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            padding: 0.8rem 1rem;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            border-bottom: 1px solid rgba(0, 198, 255, 0.1);
        }

        .navbar-brand {
            font-family: 'Orbitron', sans-serif;
            font-weight: 700;
            font-size: 1.8rem;
            background: linear-gradient(45deg, var(--secondary), var(--primary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
        }

        .navbar-brand:hover {
            transform: scale(1.03);
        }

        .navbar-brand i {
            font-size: 2rem;
            margin-right: 0.5rem;
            color: var(--secondary);
            -webkit-text-fill-color: var(--secondary);
        }

        .navbar-nav .nav-link {
            color: var(--text-light) !important;
            font-weight: 500;
            font-size: 1rem;
            position: relative;
            margin: 0 0.5rem;
            transition: all 0.3s ease;
        }

        .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background: var(--gradient);
            transition: width 0.3s ease;
        }

        .navbar-nav .nav-link:hover::after,
        .navbar-nav .nav-link.active::after {
            width: 100%;
        }

        .navbar-nav .nav-link:hover {
            color: var(--secondary) !important;
        }

        .cart-count {
            background: var(--gradient);
            color: white;
            border-radius: 50%;
            width: 22px;
            height: 22px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 0.75rem;
            margin-left: 0.3rem;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(0, 198, 255, 0.4); }
            70% { box-shadow: 0 0 0 7px rgba(0, 198, 255, 0); }
            100% { box-shadow: 0 0 0 0 rgba(0, 198, 255, 0); }
        }

        .search-box {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
            border-radius: 50px;
            padding: 0.5rem 1.2rem;
            transition: all 0.3s ease;
        }

        .search-box:focus {
            background: rgba(255, 255, 255, 0.15);
            border-color: var(--secondary);
            box-shadow: 0 0 0 0.2rem rgba(0, 198, 255, 0.25);
            color: white;
        }

        .search-box::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }

        .search-btn {
            background: var(--gradient);
            border: none;
            border-radius: 50px;
            padding: 0.5rem 1.2rem;
            color: white;
            transition: all 0.3s ease;
        }

        .search-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0, 114, 255, 0.3);
        }

        .btn-login {
            background: transparent;
            border: 1px solid var(--secondary);
            color: var(--secondary);
            border-radius: 50px;
            padding: 0.5rem 1.5rem;
            transition: all 0.3s ease;
        }

        .btn-login:hover {
            background: rgba(0, 198, 255, 0.1);
            transform: translateY(-2px);
        }

        .btn-register {
            background: var(--gradient);
            border: none;
            color: white;
            border-radius: 50px;
            padding: 0.5rem 1.5rem;
            transition: all 0.3s ease;
        }

        .btn-register:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0, 114, 255, 0.3);
        }

        .btn-logout {
            background: transparent;
            border: 1px solid #ff4757;
            color: #ff4757;
            border-radius: 50px;
            padding: 0.5rem 1.5rem;
            transition: all 0.3s ease;
        }

        .btn-logout:hover {
            background: rgba(255, 71, 87, 0.1);
            transform: translateY(-2px);
        }

        .navbar-toggler {
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 0.25rem 0.5rem;
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255, 255, 255, 0.8)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        /* Responsive adjustments */
        @media (max-width: 991.98px) {
            .navbar-collapse {
                background: rgba(10, 14, 23, 0.98);
                padding: 1rem;
                border-radius: 10px;
                margin-top: 0.5rem;
                border: 1px solid rgba(0, 198, 255, 0.1);
            }

            .navbar-nav {
                padding: 1rem 0;
            }

            .search-form {
                margin: 1rem 0;
            }

            .auth-buttons {
                margin-top: 1rem;
                display: flex;
                gap: 0.5rem;
                justify-content: center;
            }
        }

        @media (max-width: 576px) {
            .navbar-brand {
                font-size: 1.5rem;
            }

            .navbar-brand i {
                font-size: 1.7rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        {{-- <div class="container-flex"> --}}
            <!-- Logo / Brand -->
            <a class="navbar-brand" href="{{ route('user.dashboard') }}">
                <i class="fas fa-microchip"></i> ABZ Tech
            </a>

            <!-- Toggler for Mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Content -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Left Links -->
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/index"><i class="fas fa-home me-1"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/product"><i class="fas fa-box me-1"></i> Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/myorder"><i class="fas fa-bag-shopping me-1"></i> Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/cartlist">
                            <i class="fas fa-shopping-cart me-1"></i> Cart(<span class="text-danger">{{$total}}</span>)
                        </a>
                    </li>
                </ul>

                <!-- Search -->
                {{-- <form class="d-flex search-form me-3">
                    <input class="form-control search-box me-2" type="search" placeholder="Search products" aria-label="Search">
                    <button class="btn search-btn" type="submit"><i class="fas fa-search"></i></button>
                </form> --}}
                    <form action="/search" method="get" class="d-flex search-form me-3" role="search">
                            @csrf
                            <input class="form-control me-2 search-box" type="search" name="search" placeholder="Search products" aria-label="Search">
                                                <button class="btn search-btn" type="submit"><i class="fas fa-search"></i></button>
                        </form>
                <!-- Auth Buttons -->
                <div class="auth-buttons">
                         @if(session::has('user'))
                            <a href="/logout" class="btn btn-danger px-3"><i class="bi bi-box-arrow-right"></i> Logout</a>
                        @else
                            <a href="/" class="btn btn-outline-primary me-2"><i class="bi bi-person"></i> Login</a>
                            <a href="/reg" class="btn btn-primary"><i class="bi bi-person-plus"></i> Register</a>
                         @endif
                </div>

                <!-- Uncomment for logged in state -->
                <!--
                <div class="auth-buttons">
                    <a href="#" class="btn btn-logout"><i class="fas fa-sign-out-alt me-1"></i> Logout</a>
                </div>
                -->
            </div>
        </div>
    </nav>

</body>
</html>
