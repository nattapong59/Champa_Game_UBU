<?php

namespace App\Http\Controllers;

use App\Badminton;
use Illuminate\Http\Request;

class BadmintonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_Badminton = new Badminton();
        $new_Badminton->team = $request['team'];
        $new_Badminton->date = $request['date'];
        $new_Badminton->pair = $request['pair'];
        $new_Badminton->category = $request['category'];
        $new_Badminton->between = $request['between'];
        $new_Badminton->around = $request['around'];
        $new_Badminton->line = $request['line'];
        $new_Badminton->time = $request['time'];
        $new_Badminton->results = $request['results'];
        $new_Badminton->save();
        return redirect();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Badminton  $badminton
     * @return \Illuminate\Http\Response
     */
    public function show(Badminton $badminton)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Badminton  $badminton
     * @return \Illuminate\Http\Response
     */
    public function edit(Badminton $badminton)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Badminton  $badminton
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Badminton $badminton)
    {
        $Badminton = Badminton::find($id);
        $Badminton->team = $request['team'];
        $Badminton->date = $request['date'];
        $Badminton->pair = $request['pair'];
        $Badminton->category = $request['category'];
        $Badminton->between = $request['between'];
        $Badminton->around = $request['around'];
        $Badminton->line = $request['line'];
        $Badminton->time = $request['time'];
        $Badminton->results = $request['results'];
        $Badminton->save();
        return redirect();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Badminton  $badminton
     * @return \Illuminate\Http\Response
     */
    public function destroy(Badminton $badminton)
    {
        //
    }
}
