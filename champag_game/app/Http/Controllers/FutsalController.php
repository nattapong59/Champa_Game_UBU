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
        $Futsal = Futsal::all();
        return view('Futsal',['post_Futsal'=>$Futsal]);
   
     
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
        $new_Futsal->around = $request['around'];
        $new_Futsal->line = $request['line'];
        $new_Futsal->time = $request['time'];
        $new_Futsal->rfutsals1 = 0;
        $new_Futsal->rfutsals2 = 0;
        $new_Futsal->save();
        return redirect('addfutsal');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Futsal  $futsal
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $Futsal = Futsal::find($id);

        return $Futsal;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Futsal  $futsal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Futsal = Futsal::find($id);
        return view('edit_Futsal', ['Futsal'=>$Futsal]);
  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Futsal  $futsal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $Futsal = Futsal::find($id);
        $Futsal->team = $request['team'];
        $Futsal->date = $request['date'];
        $Futsal->pair = $request['pair'];
        $Futsal->category = $request['category'];
        $Futsal->around = $request['around'];
        $Futsal->line = $request['line'];
        $Futsal->time = $request['time'];
        $Futsal->rfutsals1 = $request['rfutsals1'];
        $Futsal->rfutsals2 = $request['rfutsals2'];
        $Futsal->save();
        return redirect('addfutsal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Futsal  $futsal
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        Futsal::destroy($id);
        return redirect('addfutsal');
    
    }
}
