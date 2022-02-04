<?php

namespace App\Http\Controllers;

use App\Models\actor;
use Illuminate\Http\Request;
use DB;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $actors = DB::table('actors')
            ->get();
        $countries = DB::table('countries')
            ->get();

        return view('actors.index',['actors' => $actors, 'countries' => $countries]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $countries = DB::table('countries')
            ->get();
        
        return view('actors.add',['countries' => $countries]);
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
        DB::table('actors')->insert([
            'name'=>$request->name,
            'lastname'=>$request->lastname,
            'idcountry'=>$request->idcountry,
            'idpicture'=>$request->idpicture,
            'birthdate'=>$request->birthdate,
        ]);

        return redirect()->route('actors');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function show(actor $actor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function edit(actor $actor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, actor $actor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function destroy(actor $actor)
    {
        //
    }
}
