<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('movie.index', [
            'movies' => Movie::orderBy('release_date', 'desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('movie.create');
    }

      /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'title' => ['required', 'string'],
            'genres' => ['required', 'string'],
            'release_date' => ['required', 'date'],
            'summary' => ['required', 'string'],
        ]);

        if($request->movie_pic) {
            $filename = time().'.'.$request->movie_pic->extension();
            $request->movie_pic->move(public_path('uploads/movie_pic'), $filename);
            $fields['movie_pic'] = $filename;
        }

        if ($request->hasFile('movie_pic')) {
            $file = $request->file('movie_pic');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('uploads/movie_pic'), $filename);
            $attributes['movie_pic'] = $filename;
        }

        Movie::create($attributes);

        return redirect('/movies')->with('success', "The Movie '{$attributes['title']}' has been added.");
    }

     /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        return view('movie.edit', [
            'movie' => $movie
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Movie $movie)
    {
        $attributes = $request->validate([
            'title' => ['required', 'string'],
            'genres' => ['required', 'string'],
            'release_date' => ['required', 'date'],
            'summary' => ['required', 'string'],
        ]);

        $movie->update($attributes);

        return redirect('/movies')->with('success', "The Movie '{$attributes['title']}' has been updated.");
    }

     /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();

        return redirect('/movies')->with('success', 'Movie has been removed from the list.');
    }
}
