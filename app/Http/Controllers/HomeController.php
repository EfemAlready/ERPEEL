<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Grade;
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

            $match = Grade::where('event_id', 1)->count();
            $session = Grade::where('event_id', 2)->count();
            $player = User::where('role', 0)->count();
            // dd($match);

            return view('admin',["title"=> "Dashboard", "match" => $match, "session" => $session, "player" => $player]);
        }
    }
    
    public function dashboard() #berfungsi untuk menampilkan tampilan menu dashboard
    {
        return view('dashboard'); #memanggil view 'dashboard'
    }
}
