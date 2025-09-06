@extends('Master')
@section('content')

<style>
    .order-tracking-page {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        min-height: 100vh;
        padding: 2rem 0;
    }

    .order-header {
        font-size: 2.5rem;
        font-weight: 700;
        color: #2c3e50;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .order-now-btn {
        background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
        color: white;
        border: none;
        font-weight: 600;
        transition: all 0.3s ease;
        padding: 12px 30px;
        border-radius: 50px;
        margin: 0 auto 2rem;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 15px rgba(40, 167, 69, 0.3);
        width: 250px;
    }

    .order-now-btn:hover {
        background: linear-gradient(135deg, #218838 0%, #199d76 100%);
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(40, 167, 69, 0.4);
        color: white;
    }

    .cart-card {
        background-color: #ffffff;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        transition: all 0.4s ease;
        margin-bottom: 1.5rem;
        border: none;
    }

    .cart-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
    }

    .product-img {
        height: 180px;
        width: 100%;
        object-fit: cover;
        border-radius: 10px;
        transition: transform 0.3s ease;
        padding: 10px;
    }

    .product-img:hover {
        transform: scale(1.05);
    }

    .product-info {
        padding: 1.5rem;
    }

    .product-info h5 {
        font-size: 1.4rem;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 1rem;
    }

    .badge-status {
        font-size: 0.85rem;
        padding: 6px 12px;
        border-radius: 20px;
        font-weight: 500;
        margin-right: 8px;
        margin-bottom: 8px;
        display: inline-block;
    }

    .delivery {
        background: linear-gradient(135deg, #ffc107 0%, #ff9800 100%);
        color: #000;
    }

    .paid {
        background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
        color: white;
    }

    .cod {
        background: linear-gradient(135deg, #17a2b8 0%, #138496 100%);
        color: white;
    }

    .price {
        font-size: 1.3rem;
        font-weight: 700;
        color: #dc3545;
        margin: 1rem 0;
    }

    .address-info {
        background-color: #f8f9fa;
        border-radius: 10px;
        padding: 1rem;
        margin-top: 1rem;
    }

    .address-info p {
        margin-bottom: 0.5rem;
        color: #6c757d;
    }

    .order-meta {
        display: flex;
        flex-wrap: wrap;
        margin-bottom: 1rem;
    }

    .order-date {
        color: #6c757d;
        font-size: 0.9rem;
        margin-bottom: 1rem;
    }

    .tracking-progress {
        margin-top: 1.5rem;
        padding-top: 1.5rem;
        border-top: 1px solid #e9ecef;
    }

    .progress-bar-container {
        height: 8px;
        background-color: #e9ecef;
        border-radius: 10px;
        margin-bottom: 0.5rem;
        overflow: hidden;
    }

    .progress-bar {
        height: 100%;
        background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
        border-radius: 10px;
        width: 75%; /* Adjust based on actual progress */
    }

    .progress-steps {
        display: flex;
        justify-content: space-between;
        margin-top: 0.5rem;
    }

    .progress-step {
        font-size: 0.8rem;
        color: #6c757d;
    }

    .progress-step.active {
        color: #28a745;
        font-weight: 600;
    }

    .empty-orders {
        text-align: center;
        padding: 3rem;
        background: white;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
    }

    .empty-orders i {
        font-size: 4rem;
        color: #6c757d;
        margin-bottom: 1.5rem;
    }

    .empty-orders h3 {
        color: #6c757d;
        margin-bottom: 1rem;
    }

    @media (max-width: 768px) {
        .order-header {
            font-size: 2rem;
        }

        .product-info {
            text-align: center;
        }

        .order-meta {
            justify-content: center;
        }
    }
</style>

<div class="order-tracking-page">
    <div class="container">
        <h2 class="text-center order-header"><i class="fas fa-truck-loading me-2"></i> Your Delivery Orders</h2>

        <a href="/order" class="order-now-btn"><i class="fas fa-plus-circle me-2"></i> Place New Order</a>

        @if(count($data) > 0)
            @foreach($data as $values)
            <div class="cart-card">
                <div class="row align-items-center">
                    <!-- Product Image -->
                    <div class="col-md-4 text-center">
                        <img src="{{ asset($values->Gallery) }}" alt="Product Image" class="product-img">
                    </div>

                    <!-- Product Info -->
                    <div class="col-md-8 product-info">
                        <h5>{{ $values->name }}</h5>

                        <div class="order-date">
                            <i class="fas fa-calendar-alt me-2"></i> Ordered on: {{ date('M d, Y', strtotime($values->created_at)) }}
                        </div>

                        <div class="order-meta">
                            <span class="badge badge-status delivery"><i class="fas fa-shipping-fast me-1"></i> {{ $values->status }}</span>
                            <span class="badge badge-status paid"><i class="fas fa-money-bill-wave me-1"></i> {{ $values->payment_status }}</span>
                            <span class="badge badge-status cod"><i class="fas fa-credit-card me-1"></i> {{ $values->payment_method }}</span>
                        </div>

                        <div class="price">
                            <i class="fas fa-tag me-2"></i> Price: Rs. {{ $values->price ?? 'N/A' }}
                        </div>

                        <div class="address-info">
                            <p class="mb-2"><i class="fas fa-map-marker-alt me-2"></i> Delivery Address:</p>
                            <p class="mb-0">{{ $values->address }}</p>
                        </div>

                        <!-- Tracking Progress -->
                        <div class="tracking-progress">
                            <h6 class="mb-3"><i class="fas fa-map-marked-alt me-2"></i> Delivery Progress</h6>
                            <div class="progress-bar-container">
                                <div class="progress-bar"></div>
                            </div>
                            <div class="progress-steps">
                                <span class="progress-step active">Ordered</span>
                                <span class="progress-step active">Processed</span>
                                <span class="progress-step">Shipped</span>
                                <span class="progress-step">Delivered</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        @else
            <div class="empty-orders">
                <i class="fas fa-box-open"></i>
                <h3>No Orders Yet</h3>
                <p class="mb-4">You haven't placed any orders yet. Start shopping to see your orders here!</p>
                <a href="/" class="order-now-btn"><i class="fas fa-shopping-bag me-2"></i> Start Shopping</a>
            </div>
        @endif
    </div>
</div>

<!-- Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

@endsection

