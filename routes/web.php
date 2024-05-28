<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserLogin;
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

Route::get('calendar', [App\Http\Controllers\CalendarController::class,'index'])->name('calendar');
Route::view('calendar-show','pages.calendarshow')->name('calendar-show');
//Route::get('echipa',[App\Http\Controllers\EchipaController::class,'showEntitati'])->name('echipa');
Route::get('show-users',App\Livewire\ShowUsers::class)->name("show-users");
Route::get('pe_zile',[App\Http\Controllers\PeZileController::class,'index'])->name('pe_zile');
Route::get('mesaje-primite',[App\Http\Controllers\MesajeController::class,'primite'])->name('mesaje-primite');
Route::get('mesaje-trimise',[App\Http\Controllers\MesajeController::class,'trimise'])->name('mesaje-trimise');
Route::get('/convocator/{id}',[App\Http\Controllers\ConvocatorController::class,'convoaca'])->name('convocator');
Route::get('logout',[App\Http\Controllers\LogoutController::class,'userLogout'])->name('logout');
Route::post("login",[UserLogin::class,'ADLogin'])->name('add_login');
Route::get("login", function(){
  return view('pages.login');
})->name('login');
