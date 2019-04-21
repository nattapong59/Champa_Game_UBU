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
        $Basketball = Basketball::all();
        return view('Basketball',['post_Basketball'=>$Basketball]);
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
        $new_Basketball->around = $request['around'];
        $new_Basketball->line = $request['line'];
        $new_Basketball->time = $request['time'];
        $new_Basketball->rbasketballs1 = 0;
        $new_Basketball->rbasketballs2 = 0;
        $new_Basketball->save();
        return redirect('addbasketball');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Basketball  $basketball
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $Basketball = Basketball::find($id);

        return $Basketball;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Basketball  $basketball
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $Basketball = Basketball::find($id);
        return view('edit_Basketball', ['Basketball'=>$Basketball]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Basketball  $basketball
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $Basketball = Basketball::find($id);
        $Basketball->team = $request['team'];
        $Basketball->date = $request['date'];
        $Basketball->pair = $request['pair'];
        $Basketball->category = $request['category'];
        $Basketball->around = $request['around'];
        $Basketball->line = $request['line'];
        $Basketball->time = $request['time'];
        $Basketball->rbasketballs1 = $request['rbasketballs1'];
        $Basketball->rbasketballs2 = $request['rbasketballs2'];
        $Basketball->save();
        return redirect('addbasketball');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Basketball  $basketball
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        Basketball::destroy($id);
        return redirect('addbasketball');
    }
}
