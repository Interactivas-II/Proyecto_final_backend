<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CalculatorIMCController;



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

Route::get('/', [EventController::class, 'index']);

Route::get('index',[EventController::class, 'index']);

Route::get('event-details-1', function () {
    return view('event-detail-1');
});

Route::get('ticket-part-1', function () {
    return view('ticket-part-1');
});

Route::get('ticket-part-2', function () {
    return view('ticket-part-2');
});

Route::get('ticket-purchase', function () {
    return view('ticket-purchase');
});

Route::get('/events',[EventController::class, 'show']);

/*Route::get('/event/{id}', function ($id) {
    return "texto".$id;
});

Route::get('/events/{id}',[EventController::class, 'show']);
Route::get('/imc/{w}/{h}',[CalculatorIMCController::class, 'create']);*/