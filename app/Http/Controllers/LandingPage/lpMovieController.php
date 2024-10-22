<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\movie;

class lpMovieController extends Controller
{
    public function index() {
        $movie = movie::all();
        return view('_layouts.index', [
            'movie' => $movie,
        ]);
    }
}
