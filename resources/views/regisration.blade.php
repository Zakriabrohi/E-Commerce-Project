@extends('Master')
@section('content')
 <div class="container">
  <div class="row justify-content-center mt-5">
    <div class="col-md-4 shadow p-4 bg-white rounded">
        <h4 class="text-center mb-4">Registarion</h4>
        <form action='/register' method="get">
            @csrf
            
            <div class="mb-3">
                <label class="form-label">User Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter User Name">
            </div>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" placeholder="Enter your email">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter password">
            </div>
            <button type="submit" class="btn btn-primary w-100">Register</button>
        </form>
    </div>
  </div>
</div>
@endsection