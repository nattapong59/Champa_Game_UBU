<?php

namespace App\Http\Controllers;

use App\SepakTakraw;
use Illuminate\Http\Request;

class SepakTakrawController extends Controller
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_SepakTakraw = new SepakTakraw();
        $new_SepakTakraw->team = $request['team'];
        $new_SepakTakraw->date = $request['date'];
        $new_SepakTakraw->pair = $request['pair'];
        $new_SepakTakraw->category = $request['category'];
        $new_SepakTakraw->between = $request['between'];
        $new_SepakTakraw->around = $request['around'];
        $new_SepakTakraw->line = $request['line'];
        $new_SepakTakraw->time = $request['time'];
        $new_SepakTakraw->results = $request['results'];
        $new_SepakTakraw->save();
        return redirect();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SepakTakraw  $sepakTakraw
     * @return \Illuminate\Http\Response
     */
    public function show(SepakTakraw $sepakTakraw)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SepakTakraw  $sepakTakraw
     * @return \Illuminate\Http\Response
     */
    public function edit(SepakTakraw $sepakTakraw)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SepakTakraw  $sepakTakraw
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SepakTakraw $sepakTakraw)
    {
        $SepakTakraw = SepakTakraw::find($id);
        $SepakTakraw->team = $request['team'];
        $SepakTakraw->date = $request['date'];
        $SepakTakraw->pair = $request['pair'];
        $SepakTakraw->category = $request['category'];
        $SepakTakraw->between = $request['between'];
        $SepakTakraw->around = $request['around'];
        $SepakTakraw->line = $request['line'];
        $SepakTakraw->time = $request['time'];
        $SepakTakraw->results = $request['results'];
        $SepakTakraw->save();
        return redirect();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SepakTakraw  $sepakTakraw
     * @return \Illuminate\Http\Response
     */
    public function destroy(SepakTakraw $sepakTakraw)
    {
        //
    }
}
