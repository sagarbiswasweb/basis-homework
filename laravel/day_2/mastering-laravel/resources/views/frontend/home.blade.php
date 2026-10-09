@extends('frontend.master')

@section('title')
    Home
@endsection

@section('home')
    active
@endsection

@section('content')
    <section class="py-2">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="{{ asset('/') }}assets/images/06.jpg" class="d-block w-100" alt="..." height="400px">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="{{ asset('/') }}assets/images/07.jpg" class="d-block w-100" alt="..." height="400px">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="{{ asset('/') }}assets/images/08.jpg" class="d-block w-100" alt="..." height="400px">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row py-2">
                <div>
                    <h2 class="text-center text-decoration-underline">All Products</h2>
                </div>
            </div>
            <div class="row border border-secondary rounded">
                <div class="col-md-2 py-2">
                    <div class="card">
                        <img src="{{ asset('/') }}assets/images/a.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">T-shirt</h5>
                            <p class="card-text text-truncate">Our product is unique and original</p>
                            <p class="card-text"><b>Price:</b>200 tk</p>
                            <a href="#" class="btn btn-primary">Get Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 py-2">
                    <div class="card">
                        <img src="{{ asset('/') }}assets/images/a.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">T-shirt</h5>
                            <p class="card-text text-truncate">Our product is unique and original</p>
                            <p class="card-text"><b>Price:</b>200 tk</p>
                            <a href="#" class="btn btn-primary">Get Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 py-2">
                    <div class="card">
                        <img src="{{ asset('/') }}assets/images/a.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">T-shirt</h5>
                            <p class="card-text text-truncate">Our product is unique and original</p>
                            <p class="card-text"><b>Price:</b>200 tk</p>
                            <a href="#" class="btn btn-primary">Get Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 py-2">
                    <div class="card">
                        <img src="{{ asset('/') }}assets/images/a.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">T-shirt</h5>
                            <p class="card-text text-truncate">Our product is unique and original</p>
                            <p class="card-text"><b>Price:</b>200 tk</p>
                            <a href="#" class="btn btn-primary">Get Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 py-2">
                    <div class="card">
                        <img src="{{ asset('/') }}assets/images/a.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">T-shirt</h5>
                            <p class="card-text text-truncate">Our product is unique and original</p>
                            <p class="card-text"><b>Price:</b>200 tk</p>
                            <a href="#" class="btn btn-primary">Get Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 py-2">
                    <div class="card">
                        <img src="{{ asset('/') }}assets/images/a.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">T-shirt</h5>
                            <p class="card-text text-truncate">Our product is unique and original</p>
                            <p class="card-text"><b>Price:</b>200 tk</p>
                            <a href="#" class="btn btn-primary">Get Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 py-2">
                    <div class="card">
                        <img src="{{ asset('/') }}assets/images/a.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">T-shirt</h5>
                            <p class="card-text text-truncate">Our product is unique and original</p>
                            <p class="card-text"><b>Price:</b>200 tk</p>
                            <a href="#" class="btn btn-primary">Get Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 py-2">
                    <div class="card">
                        <img src="{{ asset('/') }}assets/images/a.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">T-shirt</h5>
                            <p class="card-text text-truncate">Our product is unique and original</p>
                            <p class="card-text"><b>Price:</b>200 tk</p>
                            <a href="#" class="btn btn-primary">Get Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 py-2">
                    <div class="card">
                        <img src="{{ asset('/') }}assets/images/a.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">T-shirt</h5>
                            <p class="card-text text-truncate">Our product is unique and original</p>
                            <p class="card-text"><b>Price:</b>200 tk</p>
                            <a href="#" class="btn btn-primary">Get Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 py-2">
                    <div class="card">
                        <img src="{{ asset('/') }}assets/images/a.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">T-shirt</h5>
                            <p class="card-text text-truncate">Our product is unique and original</p>
                            <p class="card-text"><b>Price:</b>200 tk</p>
                            <a href="#" class="btn btn-primary">Get Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-3">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <nav aria-label="...">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active" aria-current="page">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection
