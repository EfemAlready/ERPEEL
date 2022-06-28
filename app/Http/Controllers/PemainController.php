<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PemainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = user::all();

        return view('adminpages.pemaincrud.index', ["title" => "Index", 'users' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpages.pemaincrud.create', ["title" => "Create"]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new user;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->position = $request->position;
        $data->password = bcrypt($request->password);
        $data->role = '0';
        $data->save();

        return redirect()->back()->with('success', 'Pemain is successfully saved');
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
    public function edit($id)
    {
        $pemain = user::findOrFail($id);

        return view('adminpages.pemaincrud.edit', ["title" => "Edit"], compact('pemain'));
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

        $data = User::findOrFail($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->position = $request->position;
        $data->save();

        return redirect('/tables')->with('success', 'Game Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/tables')->with('success', 'Game Data is successfully deleted');
    }

    public function dashboardpemain() #berfungsi untuk menampilkan tampilan menu dashboard

    {
        $pemain = user::all()->where('role', '0');

        return view('pemain', ["title" => "Pemain", 'pemains' => $pemain]);
    }
}
