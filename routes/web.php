<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);

Route::get('/events/create', [EventController::class, 'create']);

Route::get('/events/{id}', [EventController::class, 'show']);

Route::post('/events', [EventController::class, 'store']);

Route::get('/produtos/{id?}', function ($id) {
    return view('product',['id' => $id]);
});

Route::get('/teste', [EventController::class, 'teste']);

Route::get('/sobre', [EventController::class,'sobre']);

   