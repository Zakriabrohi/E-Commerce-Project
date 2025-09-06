@extends('Master')
@section('content')

<style>
    /* Product Dashboard Styles */
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 50%;
        padding: 15px;
        background-size: 60% 60%;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        transition: all 0.3s ease;
    }

    .carousel-control-prev-icon:hover,
    .carousel-control-next-icon:hover {
        background-color: rgba(0, 0, 0, 0.8);
        transform: scale(1.1);
    }

    .carousel-caption {
        background: linear-gradient(to right, rgba(0,0,0,0.7), rgba(0,0,0,0.4));
        border-radius: 15px;
        padding: 25px;
        backdrop-filter: blur(5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        text-align: left;
        max-width: 500px;
        left: 10%;
        right: auto;
        bottom: 20%;
    }

    .carousel-caption h5 {
        font-size: 28px;
        font-weight: 700;
        color: #fff;
        margin-bottom: 10px;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.6);
    }

    .carousel-caption p {
        font-size: 16px;
        color: #eee;
        margin-bottom: 15px;
        line-height: 1.5;
    }

    .carousel-item img {
        height: 500px;
        object-fit: cover;
        width: 100%;
        border-radius: 10px;
        transition: transform 0.5s ease;
    }

    .carousel-item:hover img {
        transform: scale(1.03);
    }

    .carousel-indicators [data-bs-target] {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.5);
        margin: 0 6px;
        border: none;
        transition: all 0.3s ease;
    }

    .carousel-indicators .active {
        background-color: #0072ff;
        width: 30px;
        border-radius: 10px;
    }

    /* Category Filter Styles */
    .category-filter {
        margin: 40px 0;
        padding: 20px;
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
    }

    .category-header {
        text-align: center;
        margin-bottom: 20px;
        font-weight: 700;
        font-size: 24px;
        color: #0a0e17;
        position: relative;
        padding-bottom: 15px;
    }

    .category-header::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: linear-gradient(45deg, #0072ff, #00c6ff, #6a11cb);
        border-radius: 2px;
    }

    .category-list {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 15px;
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .category-item {
        background: white;
        border-radius: 50px;
        padding: 10px 25px;
        transition: all 0.3s ease;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        font-weight: 500;
        text-decoration: none;
        color: #495057;
        display: inline-block;
    }

    .category-item:hover {
        background: linear-gradient(45deg, #0072ff, #00c6ff, #6a11cb);
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 6px 15px rgba(0, 114, 255, 0.3);
        text-decoration: none;
    }

    .category-item.active {
        background: linear-gradient(45deg, #0072ff, #00c6ff, #6a11cb);
        color: white;
    }

    /* Trending Products Section */
    .trending-wrapper {
        margin: 60px 0;
        padding: 0 15px;
    }

    .section-title {
        font-weight: 700;
        font-size: 32px;
        text-align: center;
        margin-bottom: 40px;
        position: relative;
        padding-bottom: 15px;
        color: #0a0e17;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: linear-gradient(45deg, #0072ff, #00c6ff, #6a11cb);
        border-radius: 2px;
    }

    .product-card {
        transition: all 0.3s ease;
        border: none;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        height: 100%;
        margin-bottom: 20px;
    }

    .product-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
    }

    .product-card img {
        height: 220px;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .product-card:hover img {
        transform: scale(1.05);
    }

    .product-card .card-body {
        padding: 20px;
        text-align: center;
    }

    .product-card .card-title {
        font-size: 18px;
        font-weight: 600;
        color: #1a1d28;
        margin-bottom: 10px;
    }

    .product-card .price {
        font-size: 20px;
        font-weight: 700;
        color: #0072ff;
        margin-bottom: 15px;
    }

    .product-card .btn {
        border-radius: 50px;
        padding: 8px 20px;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .product-card .btn-primary {
        background: linear-gradient(45deg, #0072ff, #00c6ff, #6a11cb);
        border: none;
    }

    .product-card .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 114, 255, 0.3);
    }

    /* Responsive adjustments */
    @media (max-width: 991.98px) {
        .carousel-caption {
            left: 5%;
            right: 5%;
            bottom: 10%;
            max-width: none;
        }

        .carousel-caption h5 {
            font-size: 22px;
        }
    }

    @media (max-width: 768px) {
        .carousel-item img {
            height: 350px;
        }

        .carousel-caption {
            padding: 15px;
            bottom: 5%;
        }

        .carousel-caption h5 {
            font-size: 18px;
        }

        .carousel-caption p {
            font-size: 14px;
        }

        .section-title {
            font-size: 26px;
        }

        .category-list {
            gap: 10px;
        }

        .category-item {
            padding: 8px 20px;
            font-size: 14px;
        }
    }

    @media (max-width: 576px) {
        .carousel-item img {
            height: 280px;
        }

        .carousel-caption {
            position: relative;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: 0;
            padding: 15px;
        }

        .carousel-caption h5 {
            font-size: 16px;
        }

        .carousel-caption p {
            font-size: 13px;
        }
    }
</style>

<!-- Carousel -->
<div class="container mt-4">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators">
            @foreach($product as $key => $values)
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $key }}"
                    class="{{ $key == 0 ? 'active' : '' }}" aria-current="true"
                    aria-label="Slide {{ $key + 1 }}"></button>
            @endforeach
        </div>

        <!-- Slides -->
        <div class="carousel-inner">
            @foreach($product as $key => $values)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <a href="/details/{{$values['id']}}">
                        <img src="{{ asset($values['Gallery']) }}" class="d-block w-100" alt="Product Image">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{ $values['name'] }}</h5>
                            <p>{{ $values['Discription'] }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<!-- Product Categories Filter -->
<div class="container category-filter">
    <h3 class="category-header">Browse by Category</h3>
    <div class="category-list">
        <a href="/product" class="category-item">All Products</a>
        <a href="/catagoryproducts?Category=Laptop" class="category-item">Laptop</a>
        <a href="/catagoryproducts?Category=Andriod" class="category-item">Android</a>
        <a href="/catagoryproducts?Category=Iphone" class="category-item">iPhone</a>
        <a href="/catagoryproducts?Category=Motherboard" class="category-item">Motherboard</a>
        <a href="/catagoryproducts?Category=headfree" class="category-item">Handphones</a>
        <a href="/catagoryproducts?Category=keyboard" class="category-item">HeyBoard</a>
    </div>
</div>

 <!-- Trending Products -->
<div class="container">
    <h2 class="section-title">Trending Products</h2>
    <div class="row">
        @foreach($product as $values)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card product-card">
                    <img src="{{ asset($values['Gallery']) }}" class="card-img-top" alt="Product">
                    <div class="card-body">
                        <h5 class="card-title">{{ $values['name'] }}</h5>
                        <div class="price">${{ $values['price'] }}</div>
                        <a href="/details/{{ $values['id'] }}" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
