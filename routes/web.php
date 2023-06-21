<?php

use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('pages.landing');
});
Route::get('knowledge', [TicketController::class, 'knowledgeView']);
Route::get('detail/{id}', [TicketController::class, 'detail']);
Route::get('login', function () {
    return view('pages.login');
});
Route::get('ticket', function () {
    return view('pages.ticket');
});
Route::put('ticket/store', [TicketController::class, 'store']);