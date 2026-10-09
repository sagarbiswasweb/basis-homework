@extends('backend.master')

@section('content')
    <h1 class="my-3 text-center">Manage Products</h1>
    <section class="p-3">
        <table class="table table-striped" border="">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Desc</th>
                    <th>Size</th>
                    <th>Color</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $productsArr)
                    <tr>
                        <td>{{$productsArr->title}}</td>
                        <td>{{$productsArr->desc}}</td>
                        <td>{{$productsArr->size}}</td>
                        <td>{{$productsArr->color}}</td>
                        <td>{{$productsArr->price}}</td>
                        <td>{{$productsArr->image}}</td>
                        <td>
                            <a href="" class="btn btn-warning">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
