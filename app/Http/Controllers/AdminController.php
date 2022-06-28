<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\TeamMember;
use App\Models\User;
use App\Models\Team;
use App\Models\Grade;
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




    public function alltables() #berfungsi untuk menampilkan tampilan menu dashboard
    {
        $aspel = user::all()->where('role', '2');
        $pelatih = user::all()->where('role', '3');
        $pemain = user::all()->where('role', '0');
        // $nilaipemain = DB::table('users')
        //     ->join('grades', 'grades.user_id', '=', 'users.id')
        //     ->select('users.name', 'grades.overall')
        //     // ->where('role', '0')
        //     ->get();
        $pemainGK = user::all()->where('position', 'GK')->where('role', '0');
        $pemainMID = user::where('position', 'CM')->orWhere('position', 'RM')->orWhere('position', 'LM')->get();
        $pemainBACK = user::where('position', 'CB')->orWhere('position', 'RB')->orWhere('position', 'LB')->get();
        $pemainST = user::all()->where('position', 'ST');
        return view('adminpages.tables', ["title" => "Team", 'pelatihs' => $pelatih, 'aspels' => $aspel, 'pemains' => $pemain, 'pemainsGK' => $pemainGK, 'pemainsMID' => $pemainMID, 'pemainsBACK' => $pemainBACK, 'pemainsST' => $pemainST]); #memanggil view 'dashboard'
    }


    public function detailpemain() #berfungsi untuk menampilkan tampilan menu dashboard
    {
        return view('adminpages.detailpemain', ["title" => "Detail Pemain"]); #memanggil view 'dashboard'
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

        // return DB::table('grades')
        // ->leftJoin('users', 'users.id', '=', 'grades.id')
        // ->get();

        // $grade = DB::table('grades')
        //     ->leftJoin('users', 'users.id', '=', 'grades.id')
        //     ->rightJoin('events', 'events.id', '=', 'grades.id')
        //     ->get();

        $player = User::where('role', '0')->get();
        $event = Event::all();
        $grade = Grade::all();
        // dd($grade);

        $avgovr = grade::all()
            ->average('overall');
        $avgpace = grade::all()
            ->average('pace');
        $avgshooting = grade::all()
            ->average('shooting');
        $avgpassing = grade::all()
            ->average('passing');
        $avgagility = grade::all()
            ->average('agility');
        $avgdefending = grade::all()
            ->average('defending');
        // $grade = $grade->sortBy([
        //     ['overall', 'desc'],

        // ]);
        return view('adminpages.grade', ["title" => "Grades", 'avgovrs' => $avgovr, 'avgpaces' => $avgpace, 'avgshootings' => $avgshooting, 'avgpassings' => $avgpassing, 'avgagilitys' => $avgagility, 'avgdefendings' => $avgdefending, 'player' => $player, 'event' => $event])->with('grades', $grade);
    }
    public function lineup(Request $request)
    {
        $user = user::all();
        $team = team::all();
        // $avgovr = grade::all()
        //     ->average('overall');
        // ->leftJoin('users', 'users.id', '=', 'team_members.id')
        // ->leftJoin('teams', 'teams.id', '=', 'team_members.id')
        // ->get();
        // dd($request);
        $member = TeamMember::all();
        // $data = TeamMember::create([
        //     'user_id' => $request->player,
        //     'team_id' => $request->team,

        // ]);
        // dd($member);
        // $teammember = TeamMember::create([
        //     'team_id' => $request->team_id,
        //     'user_id' => $request->user_id
        // ]);



        return view('adminpages.lineup', ["title" => "Team", 'teams' => $team,], compact('team'))->with('members', $member);
    }
}
