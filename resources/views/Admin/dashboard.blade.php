@extends('Admin.MasterView')
@section('title', 'Dashboard')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4 fw-bold text-primary">📊 Admin Dashboard</h2>

    <div class="row g-4">
        <!-- Total Users -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded-4 h-100 dashboard-card">
                <div class="card-body text-center">
                    <i class="bi bi-people-fill fs-1 text-primary"></i>
                    <h5 class="mt-3">Total Users</h5>
                    <h2 class="fw-bold">{{ $totalUsers }}</h2>
                </div>
            </div>
        </div>

        <!-- Total Orders -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded-4 h-100 dashboard-card">
                <div class="card-body text-center">
                    <i class="bi bi-bag-fill fs-1 text-success"></i>
                    <h5 class="mt-3">Total Orders</h5>
                    <h2 class="fw-bold">{{ $totalOrders }}</h2>
                </div>
            </div>
        </div>

        <!-- Pending Orders -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded-4 h-100 dashboard-card">
                <div class="card-body text-center">
                    <i class="bi bi-hourglass-split fs-1 text-warning"></i>
                    <h5 class="mt-3">Pending Orders</h5>
                    <h2 class="fw-bold text-warning">{{ $pendingOrders }}</h2>
                </div>
            </div>
        </div>

        <!-- Completed Orders -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded-4 h-100 dashboard-card">
                <div class="card-body text-center">
                    <i class="bi bi-check-circle-fill fs-1 text-success"></i>
                    <h5 class="mt-3">Completed Orders</h5>
                    <h2 class="fw-bold text-success">{{ $completedOrders }}</h2>
                </div>
            </div>
        </div>

        <!-- Sales Today -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded-4 h-100 dashboard-card">
                <div class="card-body text-center">
                    <i class="bi bi-currency-dollar fs-1 text-info"></i>
                    <h5 class="mt-3">Sales Today</h5>
                    <h2 class="fw-bold text-info">${{ number_format($salesToday, 2) }}</h2>
                </div>
            </div>
        </div>

        <!-- Sales Last Week -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded-4 h-100 dashboard-card">
                <div class="card-body text-center">
                    <i class="bi bi-graph-up-arrow fs-1 text-danger"></i>
                    <h5 class="mt-3">Sales Last Week</h5>
                    <h2 class="fw-bold text-danger">${{ number_format($salesLastWeek, 2) }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Custom CSS for Hover Effect --}}
<style>
    .dashboard-card {
        transition: transform 0.3s, box-shadow 0.3s;
    }
    .dashboard-card:hover {
        transform: translateY(-5px);
        box-shadow: 0px 8px 20px rgba(0,0,0,0.15);
    }
</style>
@endsection
