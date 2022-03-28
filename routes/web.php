<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParticipantsController;

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


Route::get('participants/list', [ParticipantsController::class, 'index'])->name('participants.index');
Route::get('participants/create', [ParticipantsController::class, 'create'])->name('create');
Route::post('participants/store', [ParticipantsController::class, 'store'])->name('store');
Route::get('participants/edit/{id}', [ParticipantsController::class, 'edit'])->name('editPaticipant');
Route::post('participants/update/{id}', [ParticipantsController::class, 'update'])->name('updateParticipant');
Route::get('participants/destroy/{id}', [ParticipantsController::class, 'destroy'])->name('deleteParticipant');
Route::get('participants/export-pdf/{participant}', [ParticipantsController::class, 'pdf'])->name('print.pdf');
Route::get('participants/export-cf/{participant}', [ParticipantsController::class, 'cf'])->name('cf.pdf');