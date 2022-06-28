<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Str;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Team::all();

        return view('adminpages.teamcrud.index', ["title" => "Index Team", 'teams' => $team]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpages.teamcrud.create', ["title" => "Create Team"]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Team();
        $data->Name_Team  = $request->Name_Team;
        
        $data->save();

        return redirect()->back()->with('success', 'Team is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($team_id)

    {
        // $team_member = DB::table('team_members')
        //     ->leftJoin('users', 'users.id', '=', 'team_members.id')
        //     ->rightJoin('teams', 'teams.id', '=', 'team_members.id')
        //     ->get();

        $team_member = TeamMember::where('team_id', $team_id)->get();

        // dd($team_member);
        
        return view('adminpages.teamcrud.show', ["title" => 'Details', "team_members" => $team_member]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = Team::findOrFail($id);

        return view('adminpages.teamcrud.edit', ["title" => "Edit Team"], compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Team::findOrFail($id);
        $data->Name_Team  = $request->Name_Team;
        $data->save();

        return redirect('/lineup')->with('success', 'Team Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Team::findOrFail($id);
        $user->delete();

        return redirect('/lineup')->with('success', 'Team Data is successfully deleted');
    }
    
    
    public function add_team_member(Request $request)
    {
        $member = TeamMember::all();
        $data = TeamMember::create([
            'user_id' => $request->player,
            // 'team_id' => $request->team,
            
        ]);
        dd($member);
        // dd($data);
        return redirect()->back()->with('success', 'Grade is successfully saved')->with('members', $member);
    }
}
