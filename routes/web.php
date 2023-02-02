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

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\EtudiantController ;

Route::get('/', [EtudiantController::class, 'index'])->name('index');
Route::get('index', [EtudiantController::class, 'index'])->name('index');
Route::get('etudiant/{etudiant}', [EtudiantController::class, 'show'])->name('show');
Route::get('etudiant-create', [EtudiantController::class, 'create'])->name('create');
Route::post('etudiant-create', [EtudiantController::class, 'store'])->name('store');
Route::get('etudiant-edit/{etudiant}', [EtudiantController::class, 'edit'])->name('edit');
Route::put('etudiant-edit/{etudiant}', [EtudiantController::class, 'update']);
Route::delete('etudiant-edit/{etudiant}', [EtudiantController::class, 'destroy']);
