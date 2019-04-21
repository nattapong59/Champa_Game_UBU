<?php

namespace App\Http\Controllers;

use App\Badminton;
use Illuminate\Http\Request;

class BadmintonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Badminton = Badminton::all();
        return view('Badminton',['post_Badminton'=>$Badminton]);
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
        $new_Badminton = new Badminton();
        $new_Badminton->team = $request['team'];
        $new_Badminton->date = $request['date'];
        $new_Badminton->pair = $request['pair'];
        $new_Badminton->category = $request['category'];
        $new_Badminton->around = $request['around'];
        $new_Badminton->line = $request['line'];
        $new_Badminton->time = $request['time'];
        $new_Badminton->rbadmintons1 = 0;
        $new_Badminton->rbadmintons2 = 0;
        $new_Badminton->save();
        return redirect('addbadminton');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Badminton  $badminton
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Badminton = Badminton::find($id);

        return $Badminton;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Badminton  $badminton
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $Badminton = Badminton::find($id);
        return view('edit_Badminton', ['Badminton'=>$Badminton]);
   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Badminton  $badminton
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $Badminton = Badminton::find($id);
        $Badminton->team = $request['team'];
        $Badminton->date = $request['date'];
        $Badminton->pair = $request['pair'];
        $Badminton->category = $request['category'];
        $Badminton->around = $request['around'];
        $Badminton->line = $request['line'];
        $Badminton->time = $request['time'];
        $Badminton->rbadmintons1 = $request['rbadmintons1'];
        $Badminton->rbadmintons2 = $request['rbadmintons2'];
        $Badminton->save();
        return redirect('addbadminton');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Badminton  $badminton
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        badminton::destroy($id);
        return redirect('addvolleyball');
    }
}
