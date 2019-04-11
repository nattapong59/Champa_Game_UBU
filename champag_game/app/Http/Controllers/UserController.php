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
<<<<<<< HEAD
        //
=======
        //$user = User::all();
        //return view('post',['the_post'=>$user]);
>>>>>>> c16d800325409b24c210fd551a0ce5f04f11a82f
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
        //
=======
        return view('addinformation');
>>>>>>> c16d800325409b24c210fd551a0ce5f04f11a82f
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        //
=======
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
>>>>>>> c16d800325409b24c210fd551a0ce5f04f11a82f
    }

    /**
     * Display the specified resource.
     *
<<<<<<< HEAD
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
=======
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
>>>>>>> c16d800325409b24c210fd551a0ce5f04f11a82f
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
<<<<<<< HEAD
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
=======
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
>>>>>>> c16d800325409b24c210fd551a0ce5f04f11a82f
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
<<<<<<< HEAD
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
=======
     * @param  int  $id
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
>>>>>>> c16d800325409b24c210fd551a0ce5f04f11a82f
    }

    /**
     * Remove the specified resource from storage.
     *
<<<<<<< HEAD
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
=======
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
>>>>>>> c16d800325409b24c210fd551a0ce5f04f11a82f
    {
        //
    }
}
