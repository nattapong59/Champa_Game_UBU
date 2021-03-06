<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //

        return view('addinformation');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_User = new User();
        $new_User->user_id = $request['user_id'];
        $new_User->first_name = $request['first_name'];
        $new_User->last_name = $request['last_name'];
        $new_User->email = $request['email'];
        $new_User->password = $request['password'];
        $new_User->branch = $request['branch'];
        $new_User->year = $request['year'];
        $new_User->phonenumber = $request['phonenumber'];
        $new_User->save();
        return redirect('add');
    }

    /**
     * Display the specified resource.
     *

     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $User = User::find($id);
        $User->user_id = $request['user_id'];
        $User->first_name = $request['first_name'];
        $User->last_name = $request['last_name'];
        $User->email = $request['email'];
        $User->password = $request['password'];
        $User->branch = $request['branch'];
        $User->year = $request['year'];
        $User->phonenumber = $request['phonenumber'];
        $User->save();
        return redirect('add');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
