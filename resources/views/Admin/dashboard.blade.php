@extends('Admin.MasterView')
@section('title', 'Dashboard')

@section('content')
<h1>Welcome to abz admin panel</h1>
<div class="row">
    <div class="col-md-3">
        <div class="card text-white bg-primary mb-3 shadow-sm">
            <div class="card-body">
                <h5 class="card-title"><i class="fa-solid fa-box"></i> Products</h5>
                <p class="card-text">120 Products</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-white bg-success mb-3 shadow-sm">
            <div class="card-body">
                <h5 class="card-title"><i class="fa-solid fa-cart-shopping"></i> Orders</h5>
                <p class="card-text">85 Orders</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-white bg-warning mb-3 shadow-sm">
            <div class="card-body">
                <h5 class="card-title"><i class="fa-solid fa-users"></i> Users</h5>
                <p class="card-text">56 Users</p>
            </div>
        </div>
    </div>
</div>
@endsection
