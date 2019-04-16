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
        $esport = Esport::all();
        return view('Esport',['post_esport'=>$esport]);
  
   
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
        $new_Esport->around = $request['around'];
        $new_Esport->line = $request['line'];
        $new_Esport->time = $request['time'];
        $new_Esport->resports1 = 0;
        $new_Esport->resports2 = 0;
        $new_Esport->save();
        return redirect('addesport');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Esport  $esport
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $esport = Esport::find($id);

      return $esport;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Esport  $esport
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $esport = Esport::find($id);
        return view('edit_esport', ['esport'=>$esport]);
  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Esport  $esport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $Esport = Esport::find($id);
        $Esport->team = $request['team'];
        $Esport->date = $request['date'];
        $Esport->pair = $request['pair'];
        $Esport->category = $request['category'];
        $Esport->around = $request['around'];
        $Esport->line = $request['line'];
        $Esport->time = $request['time'];
        $Esport->resports1 = $request['resports1'];
        $Esport->resports2 = $request['resports2'];
        $Esport->save();
        return redirect('addesport');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Esport  $esport
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        Esport::destroy($id);
        return redirect('addesport');
    }
}
