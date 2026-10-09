@extends('backend.master')

@section('content')
    <h1 class="text-center mt-2">Add Product</h1>
    <h3 class="text-center mt-2 text-success">{{Session::get('msg')}}</h3>
    <section class="col-md-6 offset-3 mt-5 mb-5">
        <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <input type="text" class="form-control" name="desc">
            </div>
            <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="text" class="form-control" name="price">
            </div>
            <div class="mb-3">
                <label class="form-label">Color</label>
                <input type="text" class="form-control" name="color">
            </div>
            <div class="mb-3">
                <label class="form-label">Size</label>
                <input type="text" class="form-control" name="size">
            </div>
            <div class="mb-3">
                <label class="form-label">Image</label>
                <input type="file" class="form-control" name="image" accept="image/*">
            </div>
            <button type="submit" class="btn btn-primary">Add New Product</button>
        </form>
    </section>
@endsection
