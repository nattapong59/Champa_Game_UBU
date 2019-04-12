<?php

namespace App\Http\Controllers;

use App\Futsal;
use Illuminate\Http\Request;

class FutsalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("Futsal");
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
        $new_Futsal = new Futsal();
        $new_Futsal->team = $request['team'];
        $new_Futsal->date = $request['date'];
        $new_Futsal->pair = $request['pair'];
        $new_Futsal->category = $request['category'];
        $new_Futsal->between = $request['between'];
        $new_Futsal->around = $request['around'];
        $new_Futsal->line = $request['line'];
        $new_Futsal->time = $request['time'];
        $new_Futsal->results = $request['results'];
        $new_Futsal->save();
        return redirect();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Futsal  $futsal
     * @return \Illuminate\Http\Response
     */
    public function show(Futsal $futsal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Futsal  $futsal
     * @return \Illuminate\Http\Response
     */
    public function edit(Futsal $futsal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Futsal  $futsal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Futsal $futsal)
    {
        $Futsal = Futsal::find($id);
        $Futsal->team = $request['team'];
        $Futsal->date = $request['date'];
        $Futsal->pair = $request['pair'];
        $Futsal->category = $request['category'];
        $Futsal->between = $request['between'];
        $Futsal->around = $request['around'];
        $Futsal->line = $request['line'];
        $Futsal->time = $request['time'];
        $Futsal->results = $request['results'];
        $Futsal->save();
        return redirect();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Futsal  $futsal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Futsal $futsal)
    {
        //
    }
}
