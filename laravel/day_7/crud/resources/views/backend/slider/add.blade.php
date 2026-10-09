@extends('backend.master')

@section('content')
    <h1 class="mt-3 text-center">Add slider</h1>
    <h4 class="mt-3 text-center text-success">{{Session::get('msg')}}</h4>
    <section class="col-md-6 offset-3 mt-5 mb-5">
        <form action="{{route('slider.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="mb-3">
                <label class="form-label">Subtitle</label>
                <input type="text" class="form-control" name="subtitle">
            </div>
            <div class="mb-3">
                <label class="form-label">Image</label>
                <input type="file" class="form-control" name="image" accept="image/*">
            </div>
            <button type="submit" class="btn btn-primary">Add New Slider</button>
        </form>
    </section>
@endsection
