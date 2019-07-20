<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function getAllMovies(){
        $movies = Movie::all('id', 'title', 'director', 'dateRelease', 'bioskop_id');
        return response()->json([
            'code' => 200,
            'message' => "OK",
            'data' => $movies
        ]); 
    }

    public function createMovie(Request $request){
        Movie::create([
            'bioskop_id'=>$request->bioskop_id->name,
            'title'=>$request->title,
            'director'=>$request->director,
            'dateRelease'=>$request->dateRelease,
        ]);

        return response()->json([
            'code' => 201,
            'message' => 'Success Create Movie'
        ]);
    }
}

