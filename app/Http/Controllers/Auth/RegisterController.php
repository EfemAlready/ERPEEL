<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() // method untuk memberikan nilai awal dan untuk initialize data untuk class
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data) // untuk membuat pengaturan di forum register tertentu wajib diisi(nama,email) atau misalnya karakter yang dimasukkan harus lebih dari 8 karakter seperti pada password
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'], // di set atau di atur validasinya dengan wajib diisi dan bisa di isi karakter dengan sampai 255 karakter
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'position' => ['string', 'max:20', 'unique:users'], // di set atau di atur dengan wajib diisi, bisa di isi hingga 255 karakter dan memiliki keunikan dari setiap user yang dimana email yang sama tidak akan bisa digunakan untuk register
            'password' => ['required', 'string', 'min:8', 'confirmed'], // di set atau diatur dengan wajib diisi, pengisian karakter minimal 8 karakter dan terdapat confirmed untuk menyamakan password baru dengan yang diinput dengan tujuan  jika pengguna salah mengetik password, mereka tidak akan mengenalinya. password konfirmasi menangkap kesalahan ketik dengan meminta pengguna mengetikkan kata sandi mereka dua kali.
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)  // untuk membuat akun pengguna berdasarkan form validasi seperti name,email,password
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'position' =>$data['position'],
            'password' => Hash::make($data['password']), // password otomatis ter ubah saat masuk ke database menjadi suatu Hash
        ]);
    }
}
