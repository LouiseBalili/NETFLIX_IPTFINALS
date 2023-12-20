<?php

namespace App\Http\Controllers;

use App\Events\UserLog;
use App\Models\TVShowRequest;
use Illuminate\Http\Request;

class TVShowRequestController extends Controller
{
    public function create()
    {
        return view('tvshow.request');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'title' => ['required', 'string'],
            'year_released' => ['required', 'numeric'],
        ]);

        $user = auth()->user();
        $log_entry = "{$user->name} has requested for '{$attributes['title']}' ({$attributes['year_released']})";
        $type = 'TV Show';

        UserLog::dispatch($log_entry, $type); //calling the UserLog event with dispatch method and passed the $log_entry as parameter

        TVShowRequest::create($attributes);

        return redirect('/tvshows')->with('success', 'Request is being processed.');
    }
}
