<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Users::all();
        return view("home", compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.createUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Users;
        $store->nom = $request->nom;
        $store->prenom = $request->prenom;
        $store->age = $request->age;
        $store->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Users::find($id);
        return view('pages.user', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Users::find($id);
        return view('pages.editUser', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Users $users, $id)
    {
        $user = Users::find($id);
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->age = $request->age;
        $user->save();
        return redirect('/user/' . $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy(Users $users, $id)
    {
        $user = Users::find($id);
        $user->delete();
        return redirect('/');
    }


    public function destroyAll()
    {
        $user = DB::table('users');
        $user->delete();
        return redirect('/');
    }
}
