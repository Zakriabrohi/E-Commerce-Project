@extends('Master')
@section('content')

<div class="container my-5 product-details">
    <div class="row align-items-start">
        <!-- Product Image Gallery -->
        <div class="col-md-6 mb-4 mb-md-0">
            <div class="product-image-container text-center">
                <img class="details-img img-fluid main-image shadow rounded" src="{{ asset($ProDetails['Gallery']) }}" alt="Product Image">

                <!-- Thumbnail Gallery (you can add more images if available) -->
                <div class="thumbnail-container mt-3 d-flex justify-content-center">
                    <div class="thumbnail active" data-image="{{ asset($ProDetails['Gallery']) }}">
                        <img src="{{ asset($ProDetails['Gallery']) }}" alt="Thumbnail 1">
                    </div>
                    <!-- Add more thumbnails if you have additional product images -->
                </div>
            </div>
        </div>

        <!-- Product Info -->
        <div class="col-md-6">
            <h1 class="product-title mb-3">{{ $ProDetails['name'] }}</h1>

            <div class="price-container mb-3">
                <h3 class="text-success mb-0">Rs. {{ $ProDetails['price'] }}</h3>
                <p class="text-muted"><small>Inclusive of all taxes</small></p>
            </div>

            <div class="product-meta mb-4">
                <p class="mb-2"><span class="fw-bold">Category:</span> {{ $ProDetails['Category'] }}</p>
                <p class="mb-2"><span class="fw-bold">Availability:</span> <span class="text-success">In Stock</span></p>
                <p class="mb-0"><span class="fw-bold">SKU:</span> ABZ-{{ $ProDetails['id'] }}-{{ substr($ProDetails['Category'], 0, 3) }}</p>
            </div>

            <div class="description mb-4">
                <h5 class="fw-bold">Description</h5>
                <p class="mb-0">{{ $ProDetails['Discription'] }}</p>
            </div>

            <!-- Add to Cart Form -->
            <form action="/add_to_cart" method="post" class="my-4">
                @csrf
                <input type="hidden" name="product_id" value="{{ $ProDetails['id'] }}">

                <div class="d-flex flex-wrap gap-3">
                    <button class="btn btn-primary btn-lg flex-fill">
                        <i class="fas fa-shopping-cart me-2"></i> Add to Cart
                    </button>
                    {{-- <button type="button" class="btn btn-danger btn-lg flex-fill">
                        <i class="fas fa-bolt me-2"></i> Buy Now
                    </button> --}}
                </div>
            </form>

            <!-- Additional Info -->
              </div>
        </div>
    </div>

    <!-- Product Details Tabs -->
    <div class="row mt-5">
        <div class="col-12">
            <ul class="nav nav-tabs" id="productTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="specifications-tab" data-bs-toggle="tab" data-bs-target="#specifications" type="button" role="tab" aria-controls="specifications" aria-selected="true">Specifications</button>
                </li>
            </ul>
            <div class="tab-content p-3 border border-top-0 rounded-bottom" id="productTabsContent">
                <div class="tab-pane fade show active" id="specifications" role="tabpanel" aria-labelledby="specifications-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-striped">
                                <tr>
                                    <th>Category</th>
                                    <td>{{ $ProDetails['Category'] }}</td>
                                </tr>
                                <tr>
                                    <th>Model</th>
                                    <td>{{ $ProDetails['name'] }}</td>
                                </tr>
                                <tr>
                                    <th>Warranty</th>
                                    <td>1 Year</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-striped">
                                <tr>
                                    <th>SKU</th>
                                    <td>ABZ-{{ $ProDetails['id'] }}-{{ substr($ProDetails['Category'], 0, 3) }}</td>
                                </tr>
                                <tr>
                                    <th>Availability</th>
                                    <td>In Stock</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .product-details {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .breadcrumb {
        background-color: #f8f9fa;
        padding: 0.75rem 1rem;
        border-radius: 0.375rem;
    }

    .product-title {
        font-weight: 700;
        color: #2c3e50;
    }

    .product-image-container {
        position: relative;
    }

    .details-img {
        max-width: 100%;
        height: auto;
        border-radius: 0.5rem;
        transition: transform 0.3s ease;
    }

    .details-img:hover {
        transform: scale(1.02);
    }

    .thumbnail-container {
        gap: 10px;
    }

    .thumbnail {
        width: 60px;
        height: 60px;
        border: 2px solid #dee2e6;
        border-radius: 0.25rem;
        overflow: hidden;
        cursor: pointer;
        opacity: 0.7;
        transition: all 0.3s ease;
    }

    .thumbnail:hover, .thumbnail.active {
        opacity: 1;
        border-color: #007bff;
    }

    .thumbnail img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .price-container {
        background-color: #f8f9fa;
        padding: 1rem;
        border-radius: 0.5rem;
    }

    .btn-primary {
        background: linear-gradient(45deg, #0072ff, #00c6ff);
        border: none;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background: linear-gradient(45deg, #0062cc, #0095cc);
        transform: translateY(-2px);
    }

    .btn-danger {
        background: linear-gradient(45deg, #ff416c, #ff4b2b);
        border: none;
        transition: all 0.3s ease;
    }

    .btn-danger:hover {
        background: linear-gradient(45deg, #e7355f, #e63c1f);
        transform: translateY(-2px);
    }

    .product-features {
        background-color: #f8f9fa;
        padding: 1.5rem;
        border-radius: 0.5rem;
    }

    .nav-tabs .nav-link {
        font-weight: 600;
        color: #495057;
    }

    .nav-tabs .nav-link.active {
        color: #007bff;
        border-bottom: 3px solid #007bff;
    }

    @media (max-width: 768px) {
        .product-title {
            font-size: 1.5rem;
        }

        .btn-lg {
            padding: 0.5rem 1rem;
            font-size: 1rem;
        }
    }
</style>

<!-- Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- Bootstrap JS for tabs functionality -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



@endsection
