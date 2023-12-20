<?php

namespace App\Http\Controllers;

use App\Models\TVShow;
use Illuminate\Http\Request;

class TVShowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tvshow.index', [
            'tvshows' => TVShow::orderBy('release_date', 'desc')->get()
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tvshow.create');
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

        if($request->tvshow_pic) {
            $filename = time().'.'.$request->tvshow_pic->extension();
            $request->tvshow_pic->move(public_path('uploads/tvshow_pic'), $filename);
            $fields['tvshow_pic'] = $filename;
        }

        if ($request->hasFile('tvshow_pic')) {
            $file = $request->file('tvshow_pic');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('uploads/tvshow_pic'), $filename);
            $attributes['tvshow_pic'] = $filename;
        }

        TVShow::create($attributes);

        return redirect('/tvshows')->with('success', "The TV Show '{$attributes['title']}' has been added.");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TVShow $tvshow)
    {
        return view('tvshow.edit', [
            'tvshow' => $tvshow
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TVShow $tvshow)
    {
        $attributes = $request->validate([
            'title' => ['required', 'string'],
            'genres' => ['required', 'string'],
            'release_date' => ['required', 'date'],
            'summary' => ['required', 'string'],
        ]);

        $tvshow->update($attributes);

        return redirect('/tvshows')->with('success', "The TV Show '{$attributes['title']}' has been updated.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TVShow $tvshow)
    {
        $tvshow->delete();

        return redirect('/tvshows')->with('success', 'TV Show has been removed from the list.');
    }
}
