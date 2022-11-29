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

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', function() {
    // dd(file_get_contents(public_path('test.png')));
    Storage::disk('azure')->put('test.png', file_get_contents(public_path('test.png')));
    dd(Storage::url('test.png'));
});

Route::get('toto', 'App\Http\Controllers\TestingController@totoView');
Route::post('toto', 'App\Http\Controllers\TestingController@toto');