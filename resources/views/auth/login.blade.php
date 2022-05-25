@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div> {{--Mengarahkan user ke menu login apa bila ingin merefresh page--}}

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">{{--Mengarahkan user ke menu login apa bila ingin merefresh page yang membedakan dengan yang sebelumnya adalah penyederhanaan saja namun fungsinya tetap sama, method post berguna untuk mengirimkan data dari form ke database untuk diautentikasi --}}
                        @csrf {{-- csrf pada laravel bergungsi untuk melindungi website yang dibuat dari csrf attack, csrf secara otomatis men-generate CSRF token untuk setiap user yang mengakses website, biasanya digunakan untuk memverifikasi user yang meminta token/login--}}

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> {{-- pada baris berikut user diminta untuk menginputkan email yang digunakan user setelah registrasi pada view registrasi, lalu akan divalidasikan apakah karakter yang dimasukkan adalah email atau tidak. Pada Value apabila user sudah pernah login sebelumnya maka yang akan tampil pada form adalah email yang pernah di inputkan--}}

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> {{-- pada baris berikut merupakan feedback dari email yang salah. Feed back yang akan muncul adalah berupa alert dan akan menampilkan message yang telah diatur sebelumya--}}
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> {{--pada baris berikut merupakan form untuk input password --}}

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"> {{-- pada baris berikut merupakan form penginput password oleh user, apa bila error maka akan menampilkan alert seperti source code dibawah dengan message yang telah diatur --}}

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>{{-- baris berikut merupakan form check apa bila user menginginkan website untuk mengingat profil user yang sebelumnya sudah pernah login--}}

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button> {{-- baris berikut merupakan button submit apa bila user telah menyelesaikan form login yang nantinya akan autentikasi  --}}

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a> {{-- baris berikut merupakan opsi untuk user apa bila user melupakan user yang pernah dibuat dan ingin mereset password --}}
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
