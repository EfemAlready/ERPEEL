<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AspelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = user::all();

        return view('adminpages.aspelcrud.index', ["title" => "Index", 'users' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpages.aspelcrud.create', ["title" => "Create"]);
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
        $data->role = '2';
        $data->save();

        return redirect()->back()->with('success', 'Asisten Pelatih is successfully saved');
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
        $aspel = user::findOrFail($id);

        return view('adminpages.aspelcrud.edit', ["title" => "Edit"], compact('aspel'));
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

        return redirect('/tables')->with('success', 'Asisten Pelatih Data is successfully updated');
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

        return redirect('/aspelcrud')->with('success', 'Asisten Pelatih Data is successfully deleted');
    }
}
