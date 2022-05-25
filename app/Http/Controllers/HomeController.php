<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() #method yang dijalankan otomatis saat suatu objek dibuat
    {
        $this->middleware('auth'); #middleware untuk menverifikasi setiap user yang melakukan otentikasi pada aplikasi
    }

    /**
     * Show the application dashboard.
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() #berfungsi untuk menampilkan tampilan menu home
    {
        return view('home'); #memanggil view 'home'
    }
    public function dashboard() #berfungsi untuk menampilkan tampilan menu dashboard
    {
        return view('dashboard'); #memanggil view 'dashboard'
    }
}
