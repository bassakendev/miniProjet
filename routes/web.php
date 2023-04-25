<?php


use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\FilmController;

use App\Http\Controllers\MonBeatmakerUsers;
use App\Http\Controllers\NewUsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;


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




// Route::get('users/action', function () {
//     return redirect('action');
// })->name('action');


// Route::get('articles/{n}', function ($n) {
//     return view('articles', ['numero' => $n]);
// })->where('n', '[0-9]+')->name('pipi');

// Route::get('connexion', [ConnexionController::class, 'create']);

// Route::post('connexion', [ConnexionController::class, 'store']);

// Route::resource('senregistrer', MonBeatmakerUsers::class);

// Route::view('acceuil', 'acceuil');

// Route::view('apropos', 'apropos');

// Route::view('contacts', 'contacts');

// Route::view('postes', 'postes');

// Route::view('profil', 'profil');

Route::resource('films', FilmController::class);

Route::controller(FilmController::class)->group(function () {
    Route::delete('films/force/{film}', 'forceDestroy')->name('films.force.destroy');
    Route::put('films/restore/{film}', 'restore')->name('films.restore');
    Route::get('category/{slug}/films', 'index')->name('films.category');
});


// Route::post('users', [UsersController::class, 'store']);


// Route::get('factures/{n}', [facturecontroller::class, 'show'])->where('n', '[0-9]+');



// Route::get('/', [WelcomeController::class, 'index'])->name('home');
