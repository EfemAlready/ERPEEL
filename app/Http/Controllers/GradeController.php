<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grade = Grade::all();

        return view('adminpages.gradecrud.index', ["title" => "Index", 'grades' => $grade]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpages.gradecrud.create', ["title" => "Create"]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        // $data = new Grade();
        // $data->pace = $request->pace;
        // $data->shooting = $request->shooting;
        // $data->agility = $request->agility;
        // $data->defending = $request->defending;
        // $data->save();

        $overall = ($r->pace + $r->shooting + $r->passing + $r->agility + $r->defending) / 5;

        $data = Grade::create([
            'user_id' => $r->player,
            'event_id' => $r->event,
            'pace' => $r->pace,
            'shooting' => $r->shooting,
            'passing' => $r->passing,
            'agility' => $r->agility,
            'defending' => $r->defending,
            'overall' => $overall,
        ]);

        // dd($data);

        return redirect()->back()->with('success', 'Grade is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($user_id)
    {
        $grade = Grade::findOrFail($user_id);

        return view('adminpages.gradecrud.edit', ["title" => "Edit Grade"], compact('grade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user_id)
    {
        $data = new Grade();
        $data->pace = $request->pace;
        $data->shooting = $request->shooting;
        $data->agility = $request->agility;
        $data->defending = $request->defending;
        $data->save();
        return view('adminpages.detailpemain', ["title" => "Edit Grade"], compact('grade'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Grade::findOrFail($id);
        $user->delete();

        return redirect('/tables')->with('success', 'Game Data is successfully deleted');
    }
    public function avg()
    {
        $avg = DB::table('grades')
            ->average('overall')
            ->get();
        return view('adminpages.grade', ["title" => "Grades"])->with('avgs', $avg);
    }
}
