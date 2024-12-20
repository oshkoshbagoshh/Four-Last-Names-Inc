<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

    {{-- Bootstrap CDN: --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <p style="color: royalblue"> 4 Last Names Inc.</p>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container flex-grow-1">
        @yield('content')
    </div>

    <footer class="bg-dark text-white py-5 mt-5">
        <div class="container">
            <div class="row">
                <!-- Company Info -->
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">{{ config('app.name') }}</h5>
                    <p class="mb-4">Transforming the future of CTV advertising through innovative solutions and
                        data-driven strategies.</p>
                    <div class="social-links">
                        <a href="#" class="text-white me-3"><i class="fab fa-twitter fa-lg"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-facebook fa-lg"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-linkedin fa-lg"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-instagram fa-lg"></i></a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="{{ route('home') }}"
                                class="text-white text-decoration-none">Home</a></li>
                        <li class="mb-2"><a href="{{ route('about') }}" class="text-white text-decoration-none">About
                                Us</a></li>
                        <li class="mb-2"><a href="{{ route('blog.index') }}"
                                class="text-white text-decoration-none">Blog</a></li>
                        <li class="mb-2"><a href="{{ route('meeting.index') }}"
                                class="text-white text-decoration-none">Schedule Meeting</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="col-md-4">
                    <h5 class="text-uppercase mb-4">Contact Us</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-map-marker-alt me-2"></i> 123 Ad Street, NY 10001</li>
                        <li class="mb-2"><i class="fas fa-phone me-2"></i> (555) 123-4567</li>
                        <li class="mb-2"><i class="fas fa-envelope me-2"></i> contact@{{ strtolower(config('app.name')) }}.com</li>
                    </ul>
                </div>
            </div>

            <!-- Copyright -->
            <div class="row mt-5">
                <div class="col-12">
                    <hr class="bg-light">
                    <p class="text-center mb-0">
                        &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>
