<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | Controller ini bertanggung jawab untuk menangani verifikasi email untuk semua
    | pengguna yang baru saja terdaftar dengan aplikasi. Email juga akan
    | dikirim ulang jika pengguna tidak menerima pesan email asli.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     * disini user kan di redirect ketika sudah melakukan verifikasi
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     * function ini hanya untuk membuat controller instance yang baru untuk middleware
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }
}
