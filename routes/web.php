<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NotesController;
use App\Http\Controllers\HomeController;

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

Auth::routes();


Route::get('/home', [HomeController::class,'index'])->name('home');
Route::get('/notes/index', [NotesController::class,'index'])->name('notes.index');
Route::get('/notes/note/{id}',  [NotesController::class,'note'])->name('notes.note');
Route::get('/notes/delete/{id}', [NotesController::class,'delete'])->name('notes.delete');
Route::get('/notes/edit/{id}', [NotesController::class,'edit'])->name('notes.edit');
Route::get('/notes/add', [NotesController::class,'add'])->name('notes.add');
Route::post('/notes/save', [NotesController::class,'save'])->name('notes.save');
