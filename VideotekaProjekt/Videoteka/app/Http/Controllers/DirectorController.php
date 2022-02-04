<?php

namespace App\Http\Controllers;

use App\Models\director;
use Illuminate\Http\Request;
use DB;

class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $directors = DB::table('directors')
            ->get();
        $countries = DB::table('countries')
            ->get();

        return view('directors.index',['directors' => $directors, 'countries' => $countries]);
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
        
        return view('directors.add',['countries' => $countries]);
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
        DB::table('directors')->insert([
            'name'=>$request->name,
            'lastname'=>$request->lastname,
            'idcountry'=>$request->idcountry,
            'idpicture'=>$request->idpicture,
            'birthdate'=>$request->birthdate,
        ]);

        return redirect()->route('directors');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\director  $director
     * @return \Illuminate\Http\Response
     */
    public function show(director $director)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\director  $director
     * @return \Illuminate\Http\Response
     */
    public function edit(director $director)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\director  $director
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, director $director)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\director  $director
     * @return \Illuminate\Http\Response
     */
    public function destroy(director $director)
    {
        //
    }
}
