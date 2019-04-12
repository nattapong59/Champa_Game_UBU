<?php

namespace App\Http\Controllers;

use App\Volleyball;
use Illuminate\Http\Request;

class VolleyballController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("Volleyball");
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
        $new_Volleyball = new Volleyball();
        $new_Volleyball->team = $request['team'];
        $new_Volleyball->date = $request['date'];
        $new_Volleyball->pair = $request['pair'];
        $new_Volleyball->category = $request['category'];
        $new_Volleyball->between = $request['between'];
        $new_Volleyball->around = $request['around'];
        $new_Volleyball->line = $request['line'];
        $new_Volleyball->time = $request['time'];
        $new_Volleyball->results = $request['results'];
        $new_Volleyball->save();
        return redirect();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Volleyball  $volleyball
     * @return \Illuminate\Http\Response
     */
    public function show(Volleyball $volleyball)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Volleyball  $volleyball
     * @return \Illuminate\Http\Response
     */
    public function edit(Volleyball $volleyball)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Volleyball  $volleyball
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Volleyball $volleyball)
    {
        $Volleyball = Volleyball::find($id);
        $Volleyball->team = $request['team'];
        $Volleyball->date = $request['date'];
        $Volleyball->pair = $request['pair'];
        $Volleyball->category = $request['category'];
        $Volleyball->between = $request['between'];
        $Volleyball->around = $request['around'];
        $Volleyball->line = $request['line'];
        $Volleyball->time = $request['time'];
        $Volleyball->results = $request['results'];
        $Volleyball->save();
        return redirect();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Volleyball  $volleyball
     * @return \Illuminate\Http\Response
     */
    public function destroy(Volleyball $volleyball)
    {
        //
    }
}
