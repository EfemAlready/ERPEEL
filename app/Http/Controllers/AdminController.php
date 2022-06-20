<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Team;
use Illuminate\Http\Request;
use App\Models\Event;

class AdminController extends Controller
{
    
    
    public function addpemain(Request $request)
    {
        $data = new user;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->position = $request->position;
        $data->password = bcrypt($request->password);
        $data->role = '0';
        $data->save();

        return redirect()->back();
    }
    public function addaspel(Request $request)
    {
        $data = new user;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->position = $request->position;
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
        $data->position = $request->position;
        $data->password = bcrypt($request->password);
        $data->role = '3';
        $data->save();

        return redirect()->back();
    }
    public function addteam(Request $request)
    {
        $data = new Team();
        $data->Name_Team = $request->Name_Team;
        $data->save();

        return redirect()->back();
    }
    public function teamtables() #berfungsi untuk menampilkan tampilan menu dashboard
    {
        $team = team::all();
        
        return view('adminpages.lineup', ["title" => "Team", 'teams' => $team]); #memanggil view 'dashboard'
    }


    public function alltables() #berfungsi untuk menampilkan tampilan menu dashboard
    {
        $aspel = user::all()->where('role', '2');
        $pelatih = user::all()->where('role', '3');
        $pemain = user::all()->where('role', '0');
        $pemainGK = user::all()->where('position', 'GK');
        $pemainMID =user::where('position', 'CM')->orWhere('position', 'RM')->orWhere('position', 'LM')->get();
        $pemainBACK = user::where('position','CB')->orWhere('position', 'RB')->orWhere('position', 'LB')->get();
        $pemainST = user::all()->where('position', 'ST');
        return view('adminpages.tables', ["title" => "Team", 'pelatihs' => $pelatih, 'aspels' => $aspel, 'pemains' => $pemain, 'pemainsGK' => $pemainGK, 'pemainsMID' => $pemainMID, 'pemainsBACK' => $pemainBACK, 'pemainsST' => $pemainST]); #memanggil view 'dashboard'
    }


    public function profile() #berfungsi untuk menampilkan tampilan menu dashboard
    {
        return view('adminpages.profile', ["title" => "Profile"]); #memanggil view 'dashboard'
    }
    
    function event(Request $request)
    {
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
    public function grade()
    {
        return view('adminpages.grade', ["title" => "Grades"]);
    }
    public function lineup()
    {
        $team = team::all();

        return view('adminpages.lineup', ["title" => "Team", 'teams' => $team]);
    }

    
}
