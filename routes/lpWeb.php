<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPage\lpMovieController;

Route::get('/', [lpMovieController::class, 'index'])->name('lp.movie');

