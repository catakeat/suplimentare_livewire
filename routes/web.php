<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserLogin;
use App\Livewire\TabelMesaje;

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

Route::redirect('/','login');

Route::middleware('auth')->group(function(){
Route::get('calendar', [App\Http\Controllers\CalendarController::class,'index'])->name('calendar');
Route::view('calendar-show','pages.calendarshow')->name('calendar-show');
//Route::get('echipa',[App\Http\Controllers\EchipaController::class,'showEntitati'])->name('echipa');
Route::get('show-users',App\Livewire\ShowUsers::class)->name("show-users");
Route::get('pe_zile',[App\Http\Controllers\PeZileController::class,'index'])->name('pe_zile');
//Route::get('mesaje-primite',[App\Http\Controllers\MesajeController::class,'primite'])->name('mesaje-primite');
//Route::get('mesaje-trimise',[App\Http\Controllers\MesajeController::class,'trimise'])->name('mesaje-trimise');
Route::post('/adaugaconvocare',[App\Http\Controllers\ConvocatorController::class,'adaugaConvocare'])->name('adaugaconvocare');
/*Route::get("mesaje-primite", App\Livewire\MesajePrimite::class)->name("mesaje-primite");*/
Route::get("mesaje-trimise1", App\Livewire\MesajeTrimise::class)->name("mesaje-trimise1");

Route::get('mesaje-trimise',[App\Http\Controllers\MesajeController::class,'trimise'])->name('mesaje-trimise');
Route::get('mesaje-primite',[App\Http\Controllers\MesajeController::class,'primite'])->name('mesaje-primite');
Route::get("datatables",[App\Http\Controllers\MesajeController::class,'dataTables'])->name('datatables');
});
Route::get('logout', [App\Http\Controllers\LogoutController::class, 'userLogout'])->name('logout');
Route::post("login",[UserLogin::class,'ADLogin'])->name('add_login');
Route::get("login", function(){
  return view('pages.login');
})->name('login');
