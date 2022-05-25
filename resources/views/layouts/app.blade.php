<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        {{-- NAVIGATION BAR --}}
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">

            <div class="container">

                {{-- Logo pada navigation bar (jika diklik redirect ke homepage) --}}
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>

                {{-- Navigation bar responsive toggler --}}
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <ul class="navbar-nav me-auto">

                    </ul>

                    {{-- Item menu pada navigation bar --}}
                    <ul class="navbar-nav ms-auto">
                        {{-- Authentication Links --}}
                        
                        @guest {{-- Jika role guest, maka pilihan menu hanya login dan register --}}
                            
                            @if (Route::has('login')) {{-- Route untuk login --}}
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register')) {{-- Route untuk registrasi--}}
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                        {{-- Jika user telah di autentikasi--}}
                            <li class="nav-item dropdown"> {{-- Dropdown menu profile --}}

                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{-- Menampilkan nama user --}}
                                    {{ Auth::user()->name }} 
                                </a>

                                {{-- Menu logout --}}
                                {{-- Memunculkan dropdown yang terdapat pilihan logout --}}
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    {{-- Form untuk logout --}}
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        {{-- Konten Utama --}}
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>