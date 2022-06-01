<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller{
    public function tables() #berfungsi untuk menampilkan tampilan menu dashboard
    {
        return view('adminpages.tables',["title"=> "Tables"]); #memanggil view 'dashboard'
    }
}
