@extends('Master')
@section('content')

<style>
    .order-header {
        font-size: 2rem;
        font-weight: bold;
        color: #0d6efd;
        text-shadow: 1px 1px 2px #ccc;
    }

    .order-now-btn {
        background: linear-gradient(135deg, #28a745, #218838);
        color: white;
        border: none;
        font-weight: bold;
        transition: all 0.3s ease;
        padding: 12px 25px;
        border-radius: 10px;
        margin: auto;
        display: block;
    }

    .order-now-btn:hover {
        background: linear-gradient(135deg, #1e7e34, #155724);
        transform: scale(1.05);
    }

    .cart-card {
        background-color: #ffffff;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.4s ease;
    }

    .cart-card:hover {
        transform: scale(1.02);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
    }

    .product-img {
        height: 160px;
        object-fit: cover;
        border-radius: 15px;
        transition: transform 0.3s ease;
    }

    .product-img:hover {
        transform: scale(1.05);
    }

    .product-info h5 {
        font-size: 1.3rem;
        font-weight: 700;
    }

    .badge-status {
        font-size: 0.9rem;
        padding: 5px 10px;
        border-radius: 20px;
    }

    .delivery {
        background-color: #ffc107;
        color: #000;
    }

    .paid {
        background-color: #28a745;
        color: white;
    }

    .cod {
        background-color: #17a2b8;
        color: white;
    }

    .price {
        font-size: 1.2rem;
        font-weight: bold;
        color: #dc3545;
    }

    @media (max-width: 768px) {
        .product-info {
            margin-top: 20px;
        }
    }
</style>

<div class="container my-5">
    <h2 class="mb-4 text-center order-header"><i class="bi bi-truck"></i> Your Delivery Orders</h2>

    <a href="/order" class="order-now-btn mb-5">Place New Order</a>

    @foreach($data as $values)
    <div class="cart-card p-4 mb-4">
        <div class="row align-items-center">
            <!-- Product Image -->
            <div class="col-md-4 text-center">
                <img src="{{ asset($values->Gallery) }}" alt="Product Image" class="img-fluid product-img border">
            </div>

            <!-- Product Info -->
            <div class="col-md-8 product-info">
                <h5>{{ $values->name }}</h5>
                <div class="mb-2">
                    <span class="badge badge-status delivery">Delivery: {{ $values->status }}</span>
                    <span class="badge badge-status paid">Payment: {{ $values->payment_status }}</span>
                    <span class="badge badge-status cod">Method: {{ $values->payment_method }}</span>
                </div>
                <p class="mb-1 text-muted">Address: {{ $values->address }}</p>
                <p class="price">Price: Rs. {{ $values->price ?? 'N/A' }}</p>
            </div>
        </div>
    </div>
    @endforeach

</div>

@endsection
