@extends('Admin.MasterView')
@section('title', 'Products')
@section('content')

<div class="container my-4">
    <!-- Heading -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="text-primary">
            <i class="fa-solid fa-box"></i> Manage Products
        </h3>
<button class="btn btn-success" onclick="window.location='{{ route('addview') }}'">
  Add New Product <i class="fa-solid fa-plus"></i>
</button>

    </div>

    <!-- Product Table -->
    <div class="card shadow-lg rounded-3">
        <div class="card-body">
            <table class="table table-bordered table-hover text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th><i class="fa-solid fa-tag"></i> Name</th>
                        <th><i class="fa-solid fa-dollar-sign"></i> Price</th>
                        <th><i class="fa-solid fa-layer-group"></i> Category</th>
                        <th><i class="fa-solid fa-file-alt"></i> Description</th>
                        <th><i class="fa-solid fa-image"></i> Image</th>
                        <th><i class="fa-solid fa-pen-to-square"></i> Update</th>
                        <th><i class="fa-solid fa-trash"></i> Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $values)
                    <tr>
                        <form action="{{ route('updateproducts'  , $values->id ) }}   " method="post">
                            @csrf
                            <input type="hidden" name="_method" value="put">
                            <td>{{ $values->id }}</td>
                            <td><input class="form-control" type="text" name="name" value="{{ $values->name }}"></td>
                            <td><input class="form-control" type="text" name="price" value="{{ $values->price }}"></td>
                            <td><input class="form-control" type="text" name="Category" value="{{ $values->Category }}"></td>
                            <td><input class="form-control" type="text" name="Discription" value="{{ $values->Discription }}"></td>
                            <td>
                                {{-- <img src="{{ asset('uploads/storage/images/'.$values->Gallery) }}" width="100" class="img-thumbnail" alt="Product Image"> --}}
                                <img src="{{ asset($values->Gallery) }}" width="100" class="img-thumbnail" alt="Product Image"> </td>

                            </td>
                            <td>
                                <button class="btn btn-warning btn-sm">
                                    <i class="fa-solid fa-pen-to-square"></i> Update
                                </button>
                            </td>
                        </form>
                        <td>
                            <form action="{{ route('deleteprodects', $values->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fa-solid fa-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
 @endsection
