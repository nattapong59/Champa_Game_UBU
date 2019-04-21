<?php

namespace App\Http\Controllers;

use App\ShowTable;
use App\Volleyball;
use App\Futsal;
use App\Football;
use App\Esport;
use App\Basketball;
use App\Badminton;
use App\Tabel;
use Illuminate\Http\Request;

class TabelController extends Controller
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
        return view('welcome',['post_esport'=>$esport,'post_Volleyball'=>$Volleyball,'post_Futsal'=>$Futsal,'post_Basketball'=>$Basketball,'post_Badminton'=>$Badminton,'post_football'=>$football]);
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
     * @param  \App\Tabel  $tabel
     * @return \Illuminate\Http\Response
     */
    public function show(Tabel $tabel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tabel  $tabel
     * @return \Illuminate\Http\Response
     */
    public function edit(Tabel $tabel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tabel  $tabel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tabel $tabel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tabel  $tabel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tabel $tabel)
    {
        //
    }
}
