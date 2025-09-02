@extends('Master')
@section('content')

<div class="container my-5">
    <div class="row align-items-center">
        <!-- Product Image -->
        <div class="col-md-6 text-center mb-4 mb-md-0">
            <img class="details-img img-fluid shadow rounded" src="{{ asset($ProDetails['Gallery']) }}" alt="Product Image">
        </div>

        <!-- Product Info -->
        <div class="col-md-6">
            <a href="{{ route('user.dashboard') }}" class="btn btn-outline-secondary mb-3">← Go Back</a>

            <h2 class="mb-3"> {{ $ProDetails['name'] }}</h2>

            <h4 class="text-success mb-2">Price: <strong>Rs. {{ $ProDetails['price'] }}</strong></h4>
            <p><span class="fw-bold">Category:</span> {{ $ProDetails['Category'] }}</p>
            <p><span class="fw-bold">Description:</span> {{ $ProDetails['Discription'] }}</p>

            <!-- Add to Cart Form -->
            <form action="/add_to_cart" method="post" class="my-4">
                @csrf
                <input type="hidden" name="product_id" value="{{ $ProDetails['id'] }}">
                <button class="btn btn-success me-2">
                    <i class="bi bi-cart-plus-fill"></i> Add to Cart
                </button>
                <button type="button" class="btn btn-danger">
                    <i class="bi bi-lightning-fill"></i> Buy Now
                </button>
            </form>
        </div>
    </div>
</div>

<style>
    .details-img {
        max-width: 100%;
        height: auto;
        border: 2px solid #eee;
    }

    h2, h4 {
        font-weight: 600;
    }

    form .btn {
        min-width: 140px;
    }
</style>

<!-- Optionally include Bootstrap Icons CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

@endsection
