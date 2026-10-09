@extends('backend.master')

@section('content')
    <h1 class="mt-3 text-center">Manage Sliders</h1>
    <section class="my-3 mx-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#Sl</th>
                    <th scope="col">Title</th>
                    <th scope="col">Subtitle</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach ($sliders as $slider)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $slider->title }}</td>
                        <td>{{ $slider->subtitle }}</td>
                        <td>
                            <img src="{{asset('/')}}{{$slider->image}}" alt="slider-image" height="50px" width="50px">
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
