@extends('Admin.MasterView')
@section('title' , 'AddProduct')
@section('content')

      <div class="card mt-5 shadow-lg rounded-3">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0"><i class="fa-solid fa-plus"></i> Add Product</h5>
        </div>
        <div class="card-body">
            <form action="{{ Route('addproduct') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                    <div class="col-md-3">
                        <input class="form-control" type="text" name="name" placeholder="Enter product name">
                    </div>
                    <div class="col-md-2">
                        <input class="form-control" type="text" name="price" placeholder="Price">
                    </div>
                    <div class="col-md-2">
                        <input class="form-control" type="text" name="Category" placeholder="Category">
                    </div>
                    <div class="col-md-3">
                        <input class="form-control" type="text" name="discription" placeholder="Description">
                    </div>
                    <div class="col-md-2">
                        <input class="form-control" type="file" name="file">
                    </div>
                </div>
                <div class="text-end mt-3">
                    <button class="btn btn-success">
                        <i class="fa-solid fa-plus"></i> Add Product
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection()
