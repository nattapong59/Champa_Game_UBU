<?php

namespace App\Http\Controllers;

use App\Esport;
use Illuminate\Http\Request;

class EsportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("Esport");
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
        $new_Esport = new Esport();
        $new_Esport->team = $request['team'];
        $new_Esport->date = $request['date'];
        $new_Esport->pair = $request['pair'];
        $new_Esport->category = $request['category'];
        $new_Esport->between = $request['between'];
        $new_Esport->around = $request['around'];
        $new_Esport->line = $request['line'];
        $new_Esport->time = $request['time'];
        $new_Esport->results = $request['results'];
        $new_Esport->save();
        return redirect();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Esport  $esport
     * @return \Illuminate\Http\Response
     */
    public function show(Esport $esport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Esport  $esport
     * @return \Illuminate\Http\Response
     */
    public function edit(Esport $esport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Esport  $esport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Esport $esport)
    {
        $Esport = Esport::find($id);
        $Esport->team = $request['team'];
        $Esport->date = $request['date'];
        $Esport->pair = $request['pair'];
        $Esport->category = $request['category'];
        $Esport->between = $request['between'];
        $Esport->around = $request['around'];
        $Esport->line = $request['line'];
        $Esport->time = $request['time'];
        $Esport->results = $request['results'];
        $Esport->save();
        return redirect();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Esport  $esport
     * @return \Illuminate\Http\Response
     */
    public function destroy(Esport $esport)
    {
        //
    }
}
