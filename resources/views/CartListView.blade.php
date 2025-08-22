@extends('Master')
@section('content')

<style>
    .details-img {
        max-height: 150px;
        object-fit: contain;
        transition: transform 0.3s ease;
    }

    .details-img:hover {
        transform: scale(1.05);
    }

    .cart-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .cart-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }


    
    .remove-btn {
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .remove-btn:hover {
        background-color: #dc3545;
        color: #fff;
    }
</style>

<div class="container my-5">
    <h2 class="mb-4 text-center text-primary"><i class="bi bi-cart3"></i> Your Shopping Cart</h2>
                <a href="/order" class='btn btn-outline-success mb-4' style="display:flex;"> <span style="margin-left:45%"> <strong>Order Now </strong>  </span> </a>
       
    @foreach($products as $values)
    <div class="card mb-4 cart-card border-0 shadow-sm">
        
        <div class="row g-0 align-items-center p-3">
            <!-- Product Image -->
            <div class="col-md-3 text-center">
                <img src="{{ asset($values->Gallery) }}" class="img-fluid rounded border details-img" alt="Product Image">
            </div>

            <div class="col-md-1">

            </div>
            <!-- Product Info -->
            <div class="col-md-4 d-flex flex-column justify-content-center">
                <h5 class="fw-bold text-dark">{{ $values->name }}</h5>
                <p class="text-muted mb-1">{{ $values->Discription }}</p>
                <p class="text-danger fw-bold mb-0">Price: Rs. {{ $values->price ?? 'N/A' }}</p>
            </div>

            <!-- Remove Button -->
            <div class="col-md-4 text-end">
                <form action="/remove_from_cart" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $values->cart_id }}">
                    <button class="btn btn-outline-danger remove-btn">
                        <i class="bi bi-trash3-fill"></i> Remove from Cart
                    </button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
<a href="/order" class='btn btn-outline-success mb-4' style="display:flex;"> <span style="margin-left:45%"> <strong>Order Now </strong>  </span> </a>
    @if(count($products) == 0)
    <div class="alert alert-warning text-center">
        Your cart is empty. <a href="/" class="text-decoration-none fw-bold">Start shopping</a> now!
    </div>
    @endif
</div>

@endsection
