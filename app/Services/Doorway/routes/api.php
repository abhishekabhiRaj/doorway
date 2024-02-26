<?php
use App\Services\Doorway\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| Service - API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for this service.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Prefix: /api/doorway
Route::group(['prefix' => 'doorway'], function() {

    // Controllers live in src/Services/Doorway/Http/Controllers

    Route::get('/', function() {
        return response()->json(['path' => '/api/doorway']);
    });
    //
    Route::post('/create-gate-pass', [ApiController::class, 'create_gate_pass']);
    Route::get('/visit-list', [ApiController::class, 'visit_list']);
    Route::post('/approve-visit', [ApiController::class, 'approve_visit']);

    // Route::middleware('auth:api')->get('/user', function (Request $request) {
    //     return $request->user();
    // });
});
