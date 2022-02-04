<?php

namespace App\Http\Controllers;

use App\Models\MovieActor;
use Illuminate\Http\Request;
use DB;

class MovieActorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $movieactors = DB::table('movie_actors')
            ->get();
        $movies = DB::table('movies')
            ->get();
        $actors = DB::table('actors')
            ->get();

        return view('movieactors.index',['movies' => $movies, 'actors' => $actors, 'movieactors' => $movieactors]);
    }


    public function indexUpit()
    {
        //
        $upit1 = DB::table('actors')
            ->select('actors.*',DB::raw('count(*) as brojac'))
            ->groupBy('actors.id')
            ->join('movie_actors','actors.id','=','movie_actors.idactor')
            ->orderByRaw('COUNT(*) DESC')
            ->take(5)
            ->get();



        $upit2 = DB::table('countries')
        ->select('countries.*',DB::raw('count(*) as brojac'))
        ->groupBy('countries.id')
        ->join('actors','actors.idcountry','=','countries.id')
        ->join('movie_actors','actors.id','=','movie_actors.idactor')
        ->orderByRaw('COUNT(*) DESC')
        ->take(3)
        ->get();


        $upit3 = DB::table('countries')
        ->select('countries.*',DB::raw('count(*) as brojac'))
        ->groupBy('countries.id')
        ->join('actors','actors.idcountry','=','countries.id')
        ->join('movie_actors','actors.id','=','movie_actors.idactor')
        ->join('movies','movies.id','=','movie_actors.idmovie')
        ->join('genres','genres.id','=','movies.idgenre')
        ->where('genres.name','=','Action')
        ->orderByRaw('COUNT(*) DESC')
        ->take(3)
        ->get();


        $from = '1999-12-01';
        $to = '2009-12-01';
        $upit4 = DB::table('movies')
        ->select('movies.*','genres.name as genrename')
        ->join('movie_actors','movies.id','=','movie_actors.idmovie')
        ->join('actors','actors.id','=','movie_actors.idactor')
        ->join('genres','genres.id','=','movies.idgenre')
        ->where('genres.name','=','Action')
        ->where('actors.name','=','Jason')
        ->where('actors.lastname','=','Statham')
        ->whereBetween('movies.releasedate',[$from, $to])
        ->get();

        $from = '1999-12-01';
        $to = '2022-12-01';
        $upit5 = DB::table('movies')
        ->select('movies.*')
        ->join('movie_actors','movies.id','=','movie_actors.idmovie')
        ->join('actors','actors.id','=','movie_actors.idactor')
        ->join('genres','genres.id','=','movies.idgenre')
        ->join('directors','directors.id','=','movies.iddirector')
        ->where('genres.name','=','Action')
        ->where('actors.name','=','Chris')
        ->where('actors.lastname','=','Hemsworth')
        ->where('directors.name','=','Sam')
        ->where('directors.lastname','=','Hargrave')
        ->whereBetween('movies.releasedate',[$from, $to])
        ->get();

        $from = '1999-12-01';
        $to = '2022-12-01';
        $upit6 = DB::table('movies')
        ->select('movies.*')
        ->join('movie_actors','movies.id','=','movie_actors.idmovie')
        ->join('actors','actors.id','=','movie_actors.idactor')
        ->join('genres','genres.id','=','movies.idgenre')
        ->join('directors','directors.id','=','movies.iddirector')
        ->join('countries','countries.id','=','directors.idcountry')
        ->where('genres.name','=','Drama')
        ->where('actors.name','=',"Jun'ichi")
        ->where('actors.lastname','=','Okada')
        ->where('countries.name','=','Japan')
        ->whereBetween('movies.releasedate',[$from, $to])
        ->get();

        $upit7 = DB::table('actors')
        ->select('actors.*','movies.name as moviename','directors.name as directorname', 'directors.lastname as directorlastname', 'countries.name as countryname')
        ->join('movie_actors','actors.id','=','movie_actors.idactor')
        ->join('movies','movies.id','=','movie_actors.idmovie')
        ->join('directors','directors.id','=','movies.iddirector')
        ->join('countries','countries.id','=','directors.idcountry')
        ->whereIn('countries.name',['United States of America','Denmark'])
        ->groupBy('actors.id')
        ->get();

        $upit8 = DB::table('actors') //bez grupiranja isti upit kao i 7
        ->select('actors.*','movies.name as moviename','directors.name as directorname', 'directors.lastname as directorlastname', 'countries.name as countryname')
        ->join('movie_actors','actors.id','=','movie_actors.idactor')
        ->join('movies','movies.id','=','movie_actors.idmovie')
        ->join('directors','directors.id','=','movies.iddirector')
        ->join('countries','countries.id','=','directors.idcountry')
        ->whereIn('countries.name',['United States of America','Denmark'])
        ->get();

        return view('movieactors.indexUpit',[
            'upit1' => $upit1,
            'upit2' => $upit2,
            'upit3' => $upit3,
            'upit4' => $upit4,
            'upit5' => $upit5,
            'upit6' => $upit6,
            'upit7' => $upit7,
            'upit8' => $upit8,
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $movies = DB::table('movies')
            ->get();
        $actors = DB::table('actors')
            ->get();

        return view('movieactors.add',['movies' => $movies, 'actors' => $actors]);
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
        DB::table('movie_actors')->insert([
            'role'=>$request->role,
            'idmovie'=>$request->idmovie,
            'idactor'=>$request->idactor,
        ]);

        return redirect()->route('movieactors');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MovieActor  $movieActor
     * @return \Illuminate\Http\Response
     */
    public function show(MovieActor $movieActor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MovieActor  $movieActor
     * @return \Illuminate\Http\Response
     */
    public function edit(MovieActor $movieActor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MovieActor  $movieActor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MovieActor $movieActor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MovieActor  $movieActor
     * @return \Illuminate\Http\Response
     */
    public function destroy(MovieActor $movieActor)
    {
        //
    }
}
