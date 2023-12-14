<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Actors;
use App\Models\Movies;


class Api extends Controller
{
    public function index()
    {
        // fatch all data from movies table with actor name and image
        $movies = Movies::with('actors')->get();
        return response()->json($movies);
    }

    public function store(Request $request)
    {   
        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'genre' => 'required',
            'director' => 'required',
            'year' => 'required',
            'actor_id' => 'required',
        ]);
        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }
        else{
            $movies = new Movies;
            $movies->title = $request->title;
            $movies->genre = $request->genre;
            $movies->director = $request->director;
            $movies->year = $request->year;
            $movies->actor_id = $request->actor_id;
            $movies->save();
            return response()->json($movies);
        }
    }
}
