<?php

namespace App\Http\Controllers;

use App\Football;
use Illuminate\Http\Request;

class FootballController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("football");
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
        $new_Football = new Football();
        $new_Football->team = $request['team'];
        $new_Football->date = $request['date'];
        $new_Football->pair = $request['pair'];
        $new_Football->category = $request['category'];
        $new_Football->around = $request['around'];
        $new_Football->line = $request['line'];
        $new_Football->time = $request['time'];
        $new_Football->save();
        return redirect('addfootball');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Football  $football
     * @return \Illuminate\Http\Response
     */
    public function show(Football $football)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Football  $football
     * @return \Illuminate\Http\Response
     */
    public function edit(Football $football)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Football  $football
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Football $football)
    {
        $Football = Football::find($id);
        $Football->team = $request['team'];
        $Football->date = $request['date'];
        $Football->pair = $request['pair'];
        $Football->category = $request['category'];
        $Football->around = $request['around'];
        $Football->line = $request['line'];
        $Football->time = $request['time'];
        $Football->save();
        return redirect('addfootball');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Football  $football
     * @return \Illuminate\Http\Response
     */
    public function destroy(Football $football)
    {
        //
    }
}
