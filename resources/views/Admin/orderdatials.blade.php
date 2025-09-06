@extends('Admin.MasterView')
@section('title', 'Order Details')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-11">

            <!-- Page Header -->
            <div class="text-center mb-5 animate__animated animate__fadeInDown">
                <h2 class="fw-bold text-primary">
                    <i class="bi bi-bag-check-fill"></i> Order Details
                </h2>
                <p class="text-muted">Order ID: <span class="fw-semibold">{{ $order->id }}</span></p>
            </div>

            <!-- Order Card -->
            <div class="card shadow-lg border-0 rounded-4 overflow-hidden order-card animate__animated animate__fadeInUp">
                <div class="row g-0">

                    <!-- Left: Product Image -->
                    <div class="col-md-5 bg-light d-flex align-items-center justify-content-center p-4">
                        @if($order->product)
                            <img src="{{ asset($order->product->Gallery) }}"
                                 alt="Product Image"
                                 class="img-fluid rounded-4 shadow-lg product-img animate__animated animate__zoomIn"
                                 style="max-height: 450px; object-fit: cover;">
                        @else
                            <p class="text-danger">Product image not available</p>
                        @endif
                    </div>

                    <!-- Right: Details -->
                    <div class="col-md-7 p-4 details-section">
                        <!-- Customer Info -->
                        <h4 class="fw-bold text-secondary mb-3 section-title">
                            <i class="bi bi-person-circle"></i> Customer Information
                        </h4>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-person"></i> <strong>Name:</strong> {{ $order->user->name ?? 'N/A' }}</li>
                            <li><i class="bi bi-envelope"></i> <strong>Email:</strong> {{ $order->user->email ?? 'N/A' }}</li>
                        </ul>

                        <hr>

                        <!-- Product Info -->
                        <h4 class="fw-bold text-secondary mb-3 section-title">
                            <i class="bi bi-box-seam"></i> Product Information
                        </h4>
                        @if($order->product)
                            <ul class="list-unstyled">
                                <li><i class="bi bi-tag"></i> <strong>Product:</strong> {{ $order->product->name }}</li>
                                <li><i class="bi bi-grid"></i> <strong>Category:</strong> {{ $order->product->Category }}</li>
                                <li><i class="bi bi-cash-coin"></i> <strong>Price:</strong> ${{ $order->product->price }}</li>
                            </ul>
                        @else
                            <p class="text-danger">Product details not available</p>
                        @endif

                        <hr>

                        <!-- Order Info -->
                        <h4 class="fw-bold text-secondary mb-3 section-title">
                            <i class="bi bi-receipt-cutoff"></i> Order Information
                        </h4>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-geo-alt"></i> <strong>Address:</strong> {{ $order->address }}</li>
                            <li><i class="bi bi-clock"></i> <strong>Status:</strong>
                                <span class="badge
                                    @if($order->status == 'pending') bg-warning
                                    @elseif($order->status == 'processing') bg-info
                                    @elseif($order->status == 'completed') bg-success
                                    @else bg-secondary @endif status-badge">
                                    {{ ucfirst($order->status) }}
                                </span>
                            </li>
                            <li><i class="bi bi-credit-card"></i> <strong>Payment Method:</strong> {{ ucfirst($order->payment_method) }}</li>
                            <li><i class="bi bi-check-circle"></i> <strong>Payment Status:</strong>
                                <span class="badge
                                    @if($order->payment_status == 'paid') bg-success
                                    @else bg-danger @endif">
                                    {{ ucfirst($order->payment_status) }}
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Order Progress Tracker -->
            <div class="mt-5 p-4 bg-white shadow rounded-4 animate__animated animate__fadeInUp tracker">
                <h4 class="fw-bold text-secondary mb-4"><i class="bi bi-truck"></i> Order Progress</h4>
                <div class="progress custom-progress" style="height: 25px;">
                    @php
                        $statusSteps = ['pending', 'processing', 'completed'];
                        $currentIndex = array_search($order->status, $statusSteps);
                        $progress = ($currentIndex !== false) ? (($currentIndex+1) / count($statusSteps)) * 100 : 0;
                    @endphp
                    <div class="progress-bar progress-bar-striped progress-bar-animated
                        @if($order->status == 'completed') bg-success
                        @elseif($order->status == 'processing') bg-info
                        @else bg-warning @endif"
                        role="progressbar"
                        style="width: {{ $progress }}%">
                        {{ ucfirst($order->status) }}
                    </div>
                </div>
            </div>

            <!-- Back Button -->
            <div class="text-center mt-4">
                <a href="{{ url('admin/orders') }}" class="btn btn-outline-primary btn-lg back-btn animate__animated animate__fadeInUp">
                    <i class="bi bi-arrow-left-circle"></i> Back to Orders
                </a>
            </div>

        </div>
    </div>
</div>

<!-- Custom CSS for hover & coloring -->
<style>
    .order-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .order-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
    }
    .product-img {
        transition: transform 0.3s ease;
    }
    .product-img:hover {
        transform: scale(1.05);
    }
    .details-section ul li {
        padding: 6px 0;
        transition: color 0.3s ease;
    }
    .details-section ul li:hover {
        color: #0d6efd;
    }
    .section-title {
        position: relative;
        display: inline-block;
    }
    .section-title::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: -4px;
        width: 0;
        height: 3px;
        background: #0d6efd;
        transition: width 0.4s ease;
    }
    .section-title:hover::after {
        width: 100%;
    }
    .custom-progress {
        border-radius: 15px;
        overflow: hidden;
    }
    .back-btn {
        transition: background-color 0.3s ease, transform 0.2s ease;
    }
    .back-btn:hover {
        background-color: #0d6efd;
        color: #fff;
        transform: scale(1.05);
    }
    .status-badge {
        transition: transform 0.3s ease;
    }
    .status-badge:hover {
        transform: scale(1.1);
    }
</style>
@endsection
