<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController; 
use App\Http\Controllers\TestController;
use App\Models\Test;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', [PagesController::class, 'aboutus']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('tests', function() {
    $data = App\Models\Test::all();

    return view('tests')->with ('tests',$data);
});

Route::post('/saveTest',[TestController::class, 'store']);