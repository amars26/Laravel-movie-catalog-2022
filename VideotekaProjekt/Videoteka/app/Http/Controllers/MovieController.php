<?php

namespace App\Http\Controllers;

use App\Models\movie;
use Illuminate\Http\Request;
use DB;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $movies = DB::table('movies')
            ->get();
        $countries = DB::table('countries')
            ->get();
        $directors = DB::table('directors')
            ->get();
        $genres = DB::table('genres')
            ->get();

        return view('movies.index',['movies' => $movies, 'countries' => $countries, 'directors' => $directors, 'genres' => $genres]);
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
         $directors = DB::table('directors')
            ->get();
        $genres = DB::table('genres')
            ->get();
        
        return view('movies.add',['countries' => $countries, 'directors' => $directors, 'genres' => $genres]);
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
        DB::table('movies')->insert([
            'name'=>$request->name,
            'iddirector'=>$request->iddirector,
            'idcountry'=>$request->idcountry,
            'idpicture'=>$request->idpicture,
            'releasedate'=>$request->releasedate,
            'idgenre'=>$request->idgenre,
        ]);

        return redirect()->route('movies');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
        $id = $request->id;
        $movies = DB::table('movies')
        ->where('id',$id)
        ->get();
        $countries = DB::table('countries')
            ->get();
         $directors = DB::table('directors')
            ->get();
        $genres = DB::table('genres')
            ->get();
        
        return view('movies.edit',['countries' => $countries, 'directors' => $directors, 'genres' => $genres, 'movies' => $movies]);
        

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //

        $id = $request->id;
        $update_query = DB::table('movies')
        ->where('id',$id)
        ->update([

            'name' => $request->name,
            'releasedate'=> $request->releasedate,
            'idpicture'=> $request->idpicture,
            'idcountry' => $request->idcountry,
            'idgenre' => $request->idgenre,
            'iddirector' => $request->iddirector,
        ]);
        return redirect()->route('movies');
    }

    public function delete(Request $request){
        $id = $request->id;
        Movie::destroy($id);
        return redirect()->route('movies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(movie $movie)
    {
        //
    }
}
