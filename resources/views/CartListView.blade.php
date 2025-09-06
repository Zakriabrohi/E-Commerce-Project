@extends('Master')
@section('content')

<style>
    .cart-container {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(135deg, #f5f7fa 0%, #e4edf5 100%);
        min-height: 100vh;
        padding: 2rem 0;
    }

    .cart-header {
        background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
        color: white;
        border-radius: 15px;
        padding: 1.5rem;
        margin-bottom: 2rem;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .details-img {
        height: 120px;
        width: 100%;
        object-fit: contain;
        transition: transform 0.3s ease;
        padding: 10px;
        background: white;
        border-radius: 10px;
    }

    .details-img:hover {
        transform: scale(1.05);
    }

    .cart-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 15px;
        overflow: hidden;
        margin-bottom: 1.5rem;
        border: none;
        background: white;
    }

    .cart-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    .remove-btn {
        transition: all 0.3s ease;
        border-radius: 50px;
        padding: 0.5rem 1.5rem;
        font-weight: 500;
    }

    .remove-btn:hover {
        background: linear-gradient(135deg, #ff416c 0%, #ff4b2b 100%);
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(255, 75, 43, 0.4);
    }

    .order-btn {
        background: linear-gradient(135deg, #0f9b0f 0%, #1ed760 100%);
        color: white;
        border: none;
        border-radius: 50px;
        padding: 0.8rem 2rem;
        font-weight: 600;
        transition: all 0.3s ease;
        display: block;
        margin: 0 auto;
        width: 250px;
        box-shadow: 0 5px 15px rgba(30, 215, 96, 0.4);
    }

    .order-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(30, 215, 96, 0.6);
        color: white;
    }

    .empty-cart {
        background: white;
        border-radius: 15px;
        padding: 3rem;
        text-align: center;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .empty-cart i {
        font-size: 5rem;
        color: #6c757d;
        margin-bottom: 1.5rem;
    }

    .product-info {
        padding: 1rem;
    }

    .price-tag {
        background: linear-gradient(135deg, #ff416c 0%, #ff4b2b 100%);
        color: white;
        padding: 0.3rem 1rem;
        border-radius: 50px;
        font-weight: 600;
        display: inline-block;
    }

    .quantity-control {
        display: flex;
        align-items: center;
        margin: 1rem 0;
    }

    .quantity-btn {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        background: #f8f9fa;
        border: 1px solid #dee2e6;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .quantity-btn:hover {
        background: #e9ecef;
    }

    .quantity-input {
        width: 50px;
        text-align: center;
        border: 1px solid #dee2e6;
        border-radius: 5px;
        padding: 0.3rem;
        margin: 0 0.5rem;
    }

    .cart-summary {
        background: white;
        border-radius: 15px;
        padding: 1.5rem;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        margin-top: 2rem;
    }

    .summary-title {
        border-bottom: 2px solid #e9ecef;
        padding-bottom: 1rem;
        margin-bottom: 1rem;
        font-weight: 600;
    }

    .summary-item {
        display: flex;
        justify-content: space-between;
        margin-bottom: 0.8rem;
    }

    .summary-total {
        display: flex;
        justify-content: space-between;
        font-weight: 700;
        font-size: 1.2rem;
        border-top: 2px solid #e9ecef;
        padding-top: 1rem;
        margin-top: 1rem;
    }

    @media (max-width: 768px) {
        .cart-header {
            text-align: center;
        }

        .cart-card {
            text-align: center;
        }

        .remove-btn {
            margin-top: 1rem;
        }

        .product-info {
            padding: 1rem 0.5rem;
        }
    }
</style>

<div class="cart-container">
    <div class="container">
        <!-- Cart Header -->
        <div class="cart-header text-center">
            <h1><i class="fas fa-shopping-cart me-2"></i> Your Shopping Cart</h1>
            <p class="mb-0">Review and manage your items</p>
        </div>

        <!-- Order Now Button (Top) -->
        @if(count($products) > 0)
        <div class="text-center mb-4">
            <a href="/order" class="order-btn">
                <i class="fas fa-bolt me-2"></i> Order Now
            </a>
        </div>
        @endif

        <!-- Cart Items -->
        @foreach($products as $values)
        <div class="card cart-card">
            <div class="row g-0 align-items-center p-3">
                <!-- Product Image -->
                <div class="col-md-2 text-center">
                    <img src="{{ asset($values->Gallery) }}" class="details-img" alt="Product Image">
                </div>

                <!-- Product Info -->
                <div class="col-md-6 product-info">
                    <h5 class="fw-bold text-dark mb-2">{{ $values->name }}</h5>
                    <p class="text-muted mb-2">{{ Str::limit($values->Discription, 100) }}</p>
                    <div class="price-tag mb-2">Rs. {{ $values->price ?? 'N/A' }}</div>

                    <!-- Quantity Controls -->
                </div>

                <!-- Remove Button -->
                <div class="col-md-4 text-center">
                    <form action="/remove_from_cart" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $values->cart_id }}">
                        <button class="btn btn-outline-danger remove-btn">
                            <i class="fas fa-trash-alt me-2"></i> Remove
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach

        <!-- Cart Summary -->
        @if(count($products) > 0)
        <div class="cart-summary">
            <h5 class="summary-title">Order Summary</h5>

            <div class="summary-item">
                <span>Subtotal</span>
                <span>Rs. {{ array_sum(array_column($products->toArray(), 'price')) }}</span>
            </div>

            <div class="summary-item">
                <span>Shipping</span>
                <span>Rs. 200</span>
            </div>

            <div class="summary-item">
                <span>Tax</span>
                <span>Rs. 150</span>
            </div>

            <div class="summary-total">
                <span>Total</span>
                <span>Rs. {{ array_sum(array_column($products->toArray(), 'price')) + 350 }}</span>
            </div>

            <div class="text-center mt-4">
                <a href="/order" class="order-btn">
                    <i class="fas fa-bolt me-2"></i> Proceed to Checkout
                </a>
            </div>
        </div>
        @endif

        <!-- Empty Cart Message -->
        @if(count($products) == 0)
        <div class="empty-cart">
            <i class="fas fa-shopping-cart"></i>
            <h3 class="text-muted">Your cart is empty</h3>
            <p class="text-muted mb-4">Looks like you haven't added any items to your cart yet.</p>
            <a href="/" class="order-btn">
                <i class="fas fa-shopping-bag me-2"></i> Start Shopping
            </a>
        </div>
        @endif
    </div>
</div>

<!-- Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
@endsection


