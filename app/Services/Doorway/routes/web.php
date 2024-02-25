<?php
use App\Services\Doorway\Http\Controllers\ViewController;
/*
|--------------------------------------------------------------------------
| Service - Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for this service.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['prefix' => 'doorway'], function() {

    // The controllers live in src/Services/Doorway/Http/Controllers
    // Route::get('/', 'UserController@index');

    // Route::get('/', function() {
    //     dd("Okay");
    //     return view('doorway::welcome');
    // });
    Route::get('/dashboard', [ViewController::class, 'dashboard']);
    Route::get('/visitors', [ViewController::class, 'visitors']);
});
