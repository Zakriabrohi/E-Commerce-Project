@extends('Master')
@section('content')

<style>
    /* Carousel Controls */
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: #333;
        border-radius: 50%;
        padding: 10px;
        filter: invert(1);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    }

    /* Carousel Caption */
    .carousel-caption {
        background: linear-gradient(to right, rgba(0,0,0,0.6), rgba(0,0,0,0.3));
        border-radius: 10px;
        padding: 20px;
        backdrop-filter: blur(4px);
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
    }

    .carousel-caption h5 {
        font-size: 24px;
        font-weight: 600;
        color: #fff;
    }

    .carousel-caption p {
        font-size: 16px;
        color: #eee;
    }

    /* Carousel Image */
    .carousel-item img {
        height: 480px;
        object-fit: cover;
        width: 100%;
        border-radius: 15px;
        transition: transform 0.5s ease;
    }

    .carousel-item:hover img {
        transform: scale(1.02);
    }

    /* Trending Card */
    .product-card img {
        height: 200px;
        object-fit: cover;
        border-radius: 10px 10px 0 0;
    }

    .product-card {
        transition: transform 0.3s ease;
    }

    .product-card:hover {
        transform: translateY(-7px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    .trending-wrapper {
        margin-top: 50px;
    }

    /* Carousel Indicators */
    .carousel-indicators [data-bs-target] {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background-color: #666;
        margin: 0 5px;
    }

    .carousel-indicators .active {
        background-color: #0d6efd;
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

<!-- Trending Products -->
<div class="container trending-wrapper">
    <h2 class="text-center mb-4 text-primary">Trending Products</h2>
    <div class="row g-4">
        @foreach($product as $values)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a href="/details/{{$values['id']}}" class="text-decoration-none text-dark">
                    <div class="card product-card h-100">
                        <img src="{{ asset($values['Gallery']) }}" class="card-img-top" alt="Product">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $values['name'] }}</h5>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>

@endsection
