<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FideleController;
use App\Http\Controllers\MembreController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VisiteurController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CotisationController;
use App\Http\Controllers\HistoriqueController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\ResponsableController;
use App\Http\Controllers\TypevisiteurController;

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
    return view('auth.login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware(['auth', 'verified'])->group( function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
    
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile.profile');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
   
});

require __DIR__.'/auth.php';

Route::get('deconnexion',[LogoutController::class, 'logout'])->name('deconnexion');
Route::get('historique',[HistoriqueController::class, 'create'])->name('historique.index');
Route::get('filter',[HistoriqueController::class, 'index'])->name('filter.date');

// visiteur
Route::prefix('visiteur')->name('visiteur.')->group(function () {
    Route::get('index',[VisiteurController::class, 'index'])->name('index');
    Route::get('create',[VisiteurController::class, 'create'])->name('create');
    Route::post('store',[VisiteurController::class, 'store'])->name('store');
    Route::get('show/{id}',[VisiteurController::class, 'show'])->name('show');
    Route::get('edit/{id}',[VisiteurController::class, 'edit'])->name('edit');
    Route::put('update/{id}',[VisiteurController::class, 'update'])->name('update');
    Route::delete('delete/{id}',[VisiteurController::class, 'destroy'])->name('delete');
});

//  type visiteur
Route::prefix('typevisiteur')->name('typevisiteur.')->group(function () {
    Route::get('index',[TypevisiteurController::class, 'index'])->name('index');
    Route::get('create',[TypevisiteurController::class, 'create'])->name('create');
    Route::post('store',[TypevisiteurController::class, 'store'])->name('store');
    Route::get('show/{id}',[TypevisiteurController::class, 'show'])->name('show');
    Route::get('edit/{id}',[TypevisiteurController::class, 'edit'])->name('edit');
    Route::put('update/{id}',[TypevisiteurController::class, 'update'])->name('update');
    Route::delete('delete/{id}',[TypevisiteurController::class, 'destroy'])->name('delete');
});

// responsable
Route::prefix('responsable')->name('responsable.')->group(function () {
    Route::get('index',[ResponsableController::class, 'index'])->name('index');
    Route::get('create',[ResponsableController::class, 'create'])->name('create');
    Route::post('store',[ResponsableController::class, 'store'])->name('store');
    Route::get('show/{id}',[ResponsableController::class, 'show'])->name('show');
    Route::get('edit/{id}',[ResponsableController::class, 'edit'])->name('edit');
    Route::put('update/{id}',[ResponsableController::class, 'update'])->name('update');
    Route::delete('delete/{id}',[ResponsableController::class, 'destroy'])->name('delete');
    
});

//fidele
Route::prefix('fidele')->name('fidele.')->group(function () {
    Route::get('index',[FideleController::class, 'index'])->name('index');
    Route::get('create',[FideleController::class, 'create'])->name('create');
    Route::post('store',[FideleController::class, 'store'])->name('store');
    Route::get('show/{id}',[FideleController::class, 'show'])->name('show');
    Route::get('edit/{id}',[FideleController::class, 'edit'])->name('edit');
    Route::put('update/{id}',[FideleController::class, 'update'])->name('update');
    Route::delete('delete/{id}',[FideleController::class, 'destroy'])->name('delete');

});

Route::prefix('membre')->name('membre.')->group(function () {
    Route::get('index',[MembreController::class, 'index'])->name('index');
    Route::get('create',[MembreController::class, 'create'])->name('create');
    Route::post('store',[MembreController::class, 'store'])->name('store');
     Route::get('show/{id}',[MembreController::class, 'show'])->name('show');
     Route::get('edit/{id}',[MembreController::class, 'edit'])->name('edit');
     Route::put('update/{id}',[MembreController::class, 'update'])->name('update');
     Route::delete('delete/{id}',[MembreController::class, 'destroy'])->name('delete');

});

// cotisation
Route::prefix('cotisation')->name('cotisation.')->group(function () {
    Route::get('index',[CotisationController::class, 'index'])->name('index');
    Route::get('create',[CotisationController::class, 'create'])->name('create');
    Route::post('store',[CotisationController::class, 'store'])->name('store');
     Route::get('show/{id}',[CotisationController::class, 'show'])->name('show');
     Route::get('edit/{id}',[CotisationController::class, 'edit'])->name('edit');
     Route::put('update/{id}',[CotisationController::class, 'update'])->name('update');
     Route::delete('delete/{id}',[CotisationController::class, 'destroy'])->name('delete');

});


