<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
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
        $role = Auth::user()->role; #memanggil view 'home'
        if ($role == '0') {
            return view('pemain');
        }
        if ($role == '2') {
            return view('aspel',["title"=> "Asisten Pelatih"]);
        }
        if ($role == '3') {
            return view('pelatih');
        }else{
            return view('admin',["title"=> "Admin"]);
        }
    }
    
    public function dashboard() #berfungsi untuk menampilkan tampilan menu dashboard
    {
        return view('dashboard'); #memanggil view 'dashboard'
    }
}
