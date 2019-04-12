<?php

namespace App\Http\Controllers;

use App\Basketball;
use Illuminate\Http\Request;

class BasketballController extends Controller
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
        $new_Basketball = new Basketball();
        $new_Basketball->team = $request['team'];
        $new_Basketball->date = $request['date'];
        $new_Basketball->pair = $request['pair'];
        $new_Basketball->category = $request['category'];
        $new_Basketball->between = $request['between'];
        $new_Basketball->around = $request['around'];
        $new_Basketball->line = $request['line'];
        $new_Basketball->time = $request['time'];
        $new_Basketball->results = $request['results'];
        $new_Basketball->save();
        return redirect();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Basketball  $basketball
     * @return \Illuminate\Http\Response
     */
    public function show(Basketball $basketball)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Basketball  $basketball
     * @return \Illuminate\Http\Response
     */
    public function edit(Basketball $basketball)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Basketball  $basketball
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Basketball $basketball)
    {
        $Basketball = Basketball::find($id);
        $Basketball->team = $request['team'];
        $Basketball->date = $request['date'];
        $Basketball->pair = $request['pair'];
        $Basketball->category = $request['category'];
        $Basketball->between = $request['between'];
        $Basketball->around = $request['around'];
        $Basketball->line = $request['line'];
        $Basketball->time = $request['time'];
        $Basketball->results = $request['results'];
        $Basketball->save();
        return redirect();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Basketball  $basketball
     * @return \Illuminate\Http\Response
     */
    public function destroy(Basketball $basketball)
    {
        //
    }
}
