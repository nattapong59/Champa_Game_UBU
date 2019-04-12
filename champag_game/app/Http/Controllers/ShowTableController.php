<?php

namespace App\Http\Controllers;

use App\ShowTable;
use App\Volleyball;
use App\Futsal;
use App\Football;
use App\Esport;
use App\Basketball;
use App\Badminton;
use Illuminate\Http\Request;

class ShowTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $esport = Esport::all();
        $Volleyball = Volleyball::all();
        $Futsal = Futsal::all();
        $Basketball = Basketball::all();
        $Badminton = Badminton::all();
        $football = Football::all();
        return view('ShowTable',['post_esport'=>$esport,'post_Volleyball'=>$Volleyball,'post_Futsal'=>$Futsal,'post_Basketball'=>$Basketball,'post_Badminton'=>$Badminton,'post_football'=>$football]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ShowTable  $showTable
     * @return \Illuminate\Http\Response
     */
    public function show(ShowTable $showTable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ShowTable  $showTable
     * @return \Illuminate\Http\Response
     */
    public function edit(ShowTable $showTable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ShowTable  $showTable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShowTable $showTable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ShowTable  $showTable
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShowTable $showTable)
    {
        //
    }
}
