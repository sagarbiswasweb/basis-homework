@extends('backend.master')

@section('content')
    <h1 class="text-center mt-3">Manage Products</h1>
    <section class="px-3 my-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#Sl</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Color</th>
                    <th scope="col">Size</th>
                    <th scope="col">image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$product->title}}</td>
                        <td>{{$product->desc}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->color}}</td>
                        <td>{{$product->size}}</td>
                        <td>
                            <img src="{{asset('/')}}{{$product->image}}" alt="product-image" height="50px" width="50px">
                        </td>
                        <td>
                            <a href="" class="btn btn-warning btn-sm">Edit</a>
                            <a href="" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </section>
@endsection
