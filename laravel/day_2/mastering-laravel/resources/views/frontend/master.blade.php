<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{-- bootstrap cs min  --}}
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/bootstrap.min.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand" href="/">SAGAR</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link @yield('home')" href="/home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('about')" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('contact')" href="/contact">Contact</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
    
    <footer>
        <div class="container-fluid bg-dark">
            <p class="text-center text-white">&copy;All rights reserved by sagar | 2023</p>
        </div>
    </footer>


    {{-- bootstrap js min  --}}
    <script src="{{ asset('/')}}assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
