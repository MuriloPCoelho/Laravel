<?php

	use App\Http\Controllers\Series;
	use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/series', [Series::class, 'index']);