<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Landing Page</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="assets/img/7035290-01.png">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <script src="https://kit.fontawesome.com/83348e384c.js" crossorigin="anonymous"></script>
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Squadfree - v4.7.0
  * Template URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-transparent">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1 class="text-light"><a href="index.html" style="color: #193B58;"><span>CARI PEMAIN</span></a></h1>


            </div>

            <nav id="navbar" class="navbar">
                @if (Route::has('login'))
                    <ul>
                        @auth
                            <li><a class="nav-link scrollto active" href="{{ url('/home') }}"
                                    style="color: #193B58;">Home</a></li>
                            <li><a class="nav-link scrollto" href="#about" style="color: #193B58;">About Us</a></li>
                            <li><a class="nav-link scrollto" href="#services" style="color: #193B58;">Services</a></li>
                            <li><a class="btn btn-primary" href="redirects" style="border-radius: 40px">Let's Get Started</a>
                            </li>
                            <li><a class="nav-link scrollto" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                                         document.getElementById('logout-form').submit();"><i class="fa fa-power-off fa-xl"
                                        style="font-size: 30px"></i></a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </li>
                        @else
                            <li><a class="nav-link scrollto active" href="{{ url('/') }}"
                                    style="color: #193B58;">Home</a></li>
                            <li><a class="nav-link scrollto" href="#about" style="color: #193B58;">About Us</a></li>
                            <li><a class="nav-link scrollto" href="#services" style="color: #193B58;">Services</a></li>
                            <li><a class="btn btn-primary" href="" data-bs-toggle="modal" data-bs-target="#exampleModal">Log
                                    in</a></li>
                            @if (Route::has('register'))
                                <li><a class="btn btn-primary" href="" data-bs-toggle="modal"
                                        data-bs-target="#registerModal">Register</a></li>
                            @endif
                        @endauth

                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                @endif
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->


    <!-- ======= Hero Section ======= -->
    <section id="hero">

        <div class="row">
            <div class="col hero-container " data-aos="fade-up">
                @auth
                    <h2>LET`S ENJOY</h2>
                    <h1>SOCCER</h1>
                    <h2 style="padding-right: 43vh;padding-top:4vh">{{ Auth::user()->name }} </h2>
                @else
                    <h2>LET`S ENJOY</h2>
                    <h1>SOCCER</h1>
                @endauth

            </div>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" style="padding-top:10vh ">
                    <div class="modal-content">
                        <div class="modal-header d-flex justify-content-center"><img src="/assets/img/7035290-01.png"
                                alt="" style="width: 150px;margin-top:-9vh">

                            {{-- <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"
                                style="background-color: #E5E5E5;border-radius:50%;"></button> --}}

                        </div>
                        <div class="modal-body" style="margin-top:-5vh">
                            <h5 class="modal-title" id="exampleModalLabel"
                                style="font-size:18px;font-weight: 800;padding-bottom:1vh">Login</h5>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <label for="email" class="col-md-4 col-form-label text-md-start"
                                    style="font-weight: 800;font-size: 13px;">{{ __('Email Address') }}<span
                                        style="color: red">*</span></label>
                                <div class="input-group mb-3" style="border:2px solid black;border-radius:3px;">
                                    <span class="input-group-text" id="basic-addon1"
                                        style="background-color: white;    border: 0px solid #ced4da;"><i
                                            class="fa-solid fa-envelope"></i></span>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        style="border: 0px" value="{{ old('email') }}" required autocomplete="email"
                                        autofocus>
                                    {{-- pada baris berikut user diminta untuk menginputkan email yang digunakan user setelah registrasi pada view registrasi, lalu akan divalidasikan apakah karakter yang dimasukkan adalah email atau tidak. Pada Value apabila user sudah pernah login sebelumnya maka yang akan tampil pada form adalah email yang pernah di inputkan --}}

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span> {{-- pada baris berikut merupakan feedback dari email yang salah. Feed back yang akan muncul adalah berupa alert dan akan menampilkan message yang telah diatur sebelumya --}}
                                    @enderror
                                </div>
                                <label for="password" class="col-md-4 col-form-label text-md-start"
                                    style="font-weight: 800;font-size: 13px;">{{ __('Password') }}<span
                                        style="color: red">*</span></label>
                                <div class="input-group" style="border:2px solid black;border-radius:3px;">
                                    <span class="input-group-text" id="basic-addon1"
                                        style="background-color: white;    border: 0px solid #ced4da;"><i
                                            class="fa-solid fa-key"></i></span>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password" style="border: 0px">
                                    {{-- pada baris berikut merupakan form penginput password oleh user, apa bila error maka akan menampilkan alert seperti source code dibawah dengan message yang telah diatur --}}

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="row mb-4">
                                    <div class="col-form-label text-md-end">
                                        {{-- baris berikut merupakan button submit apa bila user telah menyelesaikan form login yang nantinya akan autentikasi --}}

                                        @if (Route::has('password.request'))
                                            <a class="" href="{{ route('password.request') }}"
                                                style="font-size:13px;font-weight:700;color:#00897B">
                                                {{ __('Forgot Your Password?') }}
                                            </a> {{-- baris berikut merupakan opsi untuk user apa bila user melupakan user yang pernah dibuat dan ingin mereset password --}}
                                        @endif
                                    </div>
                                </div>
                                <div class="row mb-3 ">
                                    <div class="col-md-6">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>

                                    </div>
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn"
                                            style="border-radius:4px;padding-top:10px;padding-bottom:10px">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>


            {{-- Register Modal --}}
            <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" style="padding-top:10vh ">
                    <div class="modal-content">
                        <div class="modal-header d-flex justify-content-center"><img src="/assets/img/7035290-01.png"
                                alt="" style="width: 150px;margin-top:-9vh">

                            {{-- <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"
                                style="background-color: #E5E5E5;border-radius:50%;"></button> --}}

                        </div>
                        <div class="modal-body" style="margin-top:-5vh">
                            <h5 class="modal-title" id="exampleModalLabel"
                                style="font-size:18px;font-weight: 800;padding-bottom:1vh">Register</h5>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <label for="name" class="col-md-4 col-form-label text-md-start"
                                    style="font-weight: 800;font-size: 13px;">{{ __('Name') }}</label>
                                <div class="input-group mb-3" style="border:2px solid black;border-radius:3px;">
                                    <span class="input-group-text" id="basic-addon1"
                                        style="background-color: white;    border: 0px solid #ced4da;"><i
                                            class="fa-solid fa-user"></i></span>
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <label for="email" class="col-md-4 col-form-label text-md-start"
                                    style="font-weight: 800;font-size: 13px;">{{ __('Email Address') }}</label>
                                <div class="input-group mb-3" style="border:2px solid black;border-radius:3px;">
                                    <span class="input-group-text" id="basic-addon1"
                                        style="background-color: white;    border: 0px solid #ced4da;"><i
                                            class="fa-solid fa-key"></i></span>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <label for="position" class="col-md-4 col-form-label text-md-start"
                                    style="font-weight: 800;font-size: 13px;">{{ __('Position') }}</label>
                                <div class="input-group mb-3" style="border:2px solid black;border-radius:3px;">
                                    <span class="input-group-text" id="basic-addon1"
                                        style="background-color: white;    border: 0px solid #ced4da;"><i
                                            class="fa-solid fa-key"></i></span>
                                    <input id="position" type="text"
                                        class="form-control @error('position') is-invalid @enderror" name="position"
                                        value="{{ old('position') }}" required autocomplete="position">

                                    @error('position')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <label for="password" class="col-md-4 col-form-label text-md-start"
                                    style="font-weight: 800;font-size: 13px;">{{ __('Password') }}</label>
                                <div class="input-group mb-3" style="border:2px solid black;border-radius:3px;">
                                    <span class="input-group-text" id="basic-addon1"
                                        style="background-color: white;    border: 0px solid #ced4da;"><i
                                            class="fa-solid fa-user"></i></span>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-start"
                                    style="font-weight: 800;font-size: 13px;">{{ __('Confirm Password') }}</label>
                                <div class="input-group mb-3" style="border:2px solid black;border-radius:3px;">
                                    <span class="input-group-text" id="basic-addon1"
                                        style="background-color: white;    border: 0px solid #ced4da;"><i
                                            class="fa-solid fa-user"></i></span>
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">

                                </div>

                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn"
                                        style="border-radius:4px;padding-top:10px;padding-bottom:10px">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </section><!-- End Hero -->


    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
