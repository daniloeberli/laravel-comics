<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/comics', function () {

    $data = [
        'comic' => config('comics')
    ];


    return view('comics', $data);
})->name('comics');



Route::get('/comics/{index}', function ($index) {

    $comic_total = config('comics');

    if($index > count($comic_total) - 1){
        abort(404);
    }

    $comic = $comic_total[$index];

    #dd($comic);

    return view('comic', compact('comic'));
})->name('comic')->where('index','[0-9]+');
