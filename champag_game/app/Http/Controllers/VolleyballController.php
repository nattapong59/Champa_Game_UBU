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
        $Volleyball = Volleyball::all();
        return view('Volleyball',['post_Volleyball'=>$Volleyball]);
       
    }
  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
        $new_Volleyball->around = $request['around'];
        $new_Volleyball->line = $request['line'];
        $new_Volleyball->time = $request['time'];
        $new_Volleyball->rvolleyballs1 = 0;
        $new_Volleyball->rvolleyballs2 = 0;
        $new_Volleyball->save();
        return redirect('addvolleyball');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Volleyball  $volleyball
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Volleyballs = Volleyball::find($id);

      return $Volleyballs;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Volleyball  $volleyball
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Volleyball = Volleyball::find($id);
        return view('edit_Volleyball', ['Volleyball'=>$Volleyball]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Volleyball  $volleyball
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Voll = Volleyball::find($id);
        $Voll->team = $request['team'];
        $Voll->date = $request['date'];
        $Voll->pair = $request['pair'];
        $Voll->category = $request['category'];  
        $Voll->around = $request['around'];
        $Voll->line = $request['line'];
        $Voll->time = $request['time'];
        $Voll->rvolleyballs1 = $request['rvolleyballs1'];
        $Voll->rvolleyballs2 = $request['rvolleyballs2'];
        $Voll->save();
        return redirect('addvolleyball');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Volleyball  $volleyball
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        volleyball::destroy($id);
        return redirect('addvolleyball');
    }
}
