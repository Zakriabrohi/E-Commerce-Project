@extends('Admin.MasterView')
@section('title', 'Orders')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Orders Management</h2>

    <table class="table table-bordered table-hover table-striped text-center align-middle shadow-sm">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Customer Name</th>
                <th>Product</th>
                <th>Category</th>
                <th>Image</th>
                <th>Price</th>
                <th>Address</th>
                <th>Status</th>
                <th>Payment Method</th>
                <th>Payment Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($data as $values)
            <tr>
                <td>{{ $values->id }}</td>
                <td>{{ $values->user->name ?? 'N/A' }}</td> {{-- if you have relation with users --}}

                @if($values->product)
                    <td>{{ $values->product->name }}</td>
                    <td>{{ $values->product->Category }}</td>
                    <td>
                        <img src="{{ asset($values->product->Gallery) }}" width="80" class="img-thumbnail" alt="Product">
                    </td>
                    <td>${{ $values->product->price }}</td>
                @else
                    <td colspan="4" class="text-danger">Product not available</td>
                @endif

                <td>{{ $values->address }}</td>
                <td>
                    <span class="badge
                        @if($values->status == 'pending') bg-warning
                        @elseif($values->status == 'completed') bg-success
                        @else bg-secondary @endif">
                        {{ ucfirst($values->status) }}
                    </span>
                </td>
                <td>{{ ucfirst($values->payment_method) }}</td>
                <td>
                    <span class="badge
                        @if($values->payment_status == 'paid') bg-success
                        @else bg-danger @endif">
                        {{ ucfirst($values->payment_status) }}
                    </span>
                </td>
                <td>
                    <a href="{{ route('admin.OrderView' , $values->id) }}" class="btn btn-sm btn-primary">View</a>
                    {{-- <a href="{{ url('orders/delete/'.$values->id) }}" class="btn btn-sm btn-danger">Delete</a> --}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
