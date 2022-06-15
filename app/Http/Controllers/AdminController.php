<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Event;

class AdminController extends Controller
{
    public function addaspel(Request $request)
    {
        $data = new user;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->role = '2';
        $data->save();

        return redirect()->back();
    }
    public function addpelatih(Request $request)
    {
        $data = new user;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->role = '3';
        $data->save();

        return redirect()->back();
    }
    public function alltables() #berfungsi untuk menampilkan tampilan menu dashboard
    {
        $aspel = user::all()->where('role', '2');
        $pelatih = user::all()->where('role', '3');
        $pemain = user::all()->where('role', '0');
        return view('adminpages.tables', ["title" => "Tables",'pelatihs'=> $pelatih, 'aspels' =>$aspel, 'pemains' => $pemain]); #memanggil view 'dashboard'
    }

    public function profile() #berfungsi untuk menampilkan tampilan menu dashboard
    {
        return view('adminpages.profile', ["title" => "Profile"]); #memanggil view 'dashboard'
    }
    function show()
    {
        return view('listaspel');
    }
    function showpel()
    {
        return view('listpel');
    }
    function event(Request $request){
        if ($request->ajax()) {
            $data = Event::whereDate('start', '>=', $request->start)
                ->whereDate('end',   '<=', $request->end)
                ->get(['id', 'title', 'start', 'end']);
            return response()->json($data);
        }
        
        return view('adminpages.event', ["title" => "Event"]);

    }

    public function action(Request $request)
    {
        if ($request->ajax()) {
            if ($request->type == 'add') {
                $event = Event::create([
                    'title'        =>    $request->title,
                    'start'        =>    $request->start,
                    'end'        =>    $request->end
                ]);

                return response()->json($event);
            }

            if ($request->type == 'update') {
                $event = Event::find($request->id)->update([
                    'title'        =>    $request->title,
                    'start'        =>    $request->start,
                    'end'        =>    $request->end
                ]);

                return response()->json($event);
            }

            if ($request->type == 'delete') {
                $event = Event::find($request->id)->delete();

                return response()->json($event);
            }
        }
    }
    public function grade(){
        return view('adminpages.grade', ["title" => "Grades"]);
    }
    public function lineup()
    {
        return view('adminpages.lineup', ["title" => "Line Up"]);
    }
}
