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

Route::get('index',[EventController::class, 'index'])->name('index');

Route::get('eventdetails1/{titulo}',[EventController::class, 'eventdetails1'])->name('eventdetails');

Route::get('ticketpart1',[EventController::class, 'ticketpart1'])->name('ticketpart1');

Route::get('ticketpart2',[EventController::class, 'ticketpart2'])->name('ticketpart2');

Route::get('ticketpartpurchase',[EventController::class, 'ticketpartpurchase'])->name('ticketpartpurchase');

Route::POST('ticketstore',[EventController::class, 'ticketstore'])->name('ticketstore');

//Route::get('/events',[EventController::class, 'show']);

/*Route::get('/event/{id}', function ($id) {
    return "texto".$id;
});

Route::get('/events/{id}',[EventController::class, 'show']);
Route::get('/imc/{w}/{h}',[CalculatorIMCController::class, 'create']);*/