<?php

namespace App\Http\Controllers;

use App\Events\UserLog;
use App\Models\MovieRequest;
use Illuminate\Http\Request;

class MovieRequestController extends Controller
{
    public function create()
    {
        return view('movie.request');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'title' => ['required', 'string'],
            'year_released' => ['required', 'numeric'],
        ]);

        $user = auth()->user();
        $log_entry = "{$user->name} has requested for '{$attributes['title']}' ({$attributes['year_released']})";
        $type = 'Movie';

        UserLog::dispatch($log_entry, $type); //calling the UserLog event with dispatch method and passed the $log_entry as parameter

        MovieRequest::create($attributes);

        return redirect('/movies')->with('success', 'Request is being processed.');
    }
}
