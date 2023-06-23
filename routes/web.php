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
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'authenticate']);
Route::post('/logout', [UserController::class, 'logout']);

Route::get('knowledge', [TicketController::class, 'knowledgeView']);
Route::get('detail/{id}', [TicketController::class, 'detail']);

Route::middleware('auth')->group(function() {
    Route::put('ticket/store/{id}', [TicketController::class, 'store']);
    Route::get('ticket', function () {
        return view('pages.ticket');
    });
    Route::get('admin/ticket', [TicketController::class, 'adminTicket']);
    Route::get('admin/ticket/detail/{id}', [TicketController::class, 'detailAdminTicket']);
    Route::put('admin/ticket/update/{id}/{idAdmin}', [TicketController::class, 'updateAdminTicket']);
    Route::get('yourTicket/{id}', [TicketController::class, 'yourTicket']);
});

