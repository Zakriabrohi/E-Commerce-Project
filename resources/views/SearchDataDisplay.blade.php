@extends('Master')
@section('content')

<div class="container my-5">
    <div class="row">

        <!-- Filter Section -->
        <div class="col-md-3 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title text-primary"><i class="bi bi-filter-circle"></i> Filters</h5>
                    <a href="#" class="btn btn-outline-secondary btn-sm mt-2">Category</a>
                    <a href="#" class="btn btn-outline-secondary btn-sm mt-2">Price</a>
                    <a href="#" class="btn btn-outline-secondary btn-sm mt-2">Brand</a>
                    <!-- Add more filters as needed -->
                </div>
            </div>
        </div>

        <!-- Search Results -->
        <div class="col-md-9">
            <h2 class="mb-4 text-center text-primary">Search Results</h2>
            <div class="row g-4">
                @foreach($product as $values)
                    <div class="col-12 col-sm-6 col-md-4">
                        <a href="/details/{{ $values['id'] }}" class="text-decoration-none text-dark">
                            <div class="card h-100 product-card shadow-sm">
                                <img src="{{ asset($values['Gallery']) }}" class="card-img-top" alt="Product Image" style="height: 200px; object-fit: cover;">
                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ $values['name'] }}</h5>
                                    <p class="card-text text-muted">{{ Str::limit($values['Discription'], 60) }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</div>

<style>
    .product-card:hover {
        transform: translateY(-5px);
        transition: all 0.3s ease-in-out;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    .card-img-top {
        border-radius: 10px 10px 0 0;
    }
</style>

<!-- Bootstrap Icons CDN (include if not already in master layout) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

@endsection
