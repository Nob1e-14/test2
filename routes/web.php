<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CakeController;
use App\Http\Controllers\TypeController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

//----->Pasteles

Route::get('/cake', [CakeController::class, 'alta'])->name('regcake');
Route::POST('/newcake', [CakeController::class, 'guardar'])->name('newcake');
Route::get('/modcake', [CakeController::class, 'modificar'])->name('modcake');
Route::POST('/modcake2', [CakeController::class, 'modificar2'])->name('modcake2');
Route::get('/delcake', [CakeController::class, 'eliminar'])->name('delcake');
Route::get('/tabcake', [CakeController::class, 'tabla'])->name('tabcake');


Route::get('descake/{id_p}',[CakeController::class,'descake'])->name('descake');
Route::get('actcake/{id_p}',[CakeController::class,'actcake'])->name('actcake');
//----->>>REGISTRO

Route::get('/type', function () {
    return view('registrotipo');
})->name('regtype');
Route::POST('/newtype', [TypeController::class, 'guardar'])->name('newtype');
Route::get('/modtype', [TypeController::class, 'modificar'])->name('modtype');
Route::POST('/modtype2', [TypeController::class, 'modificar2'])->name('modtype2');
Route::get('/deltype', [TypeController::class, 'eliminar'])->name('deltype');
Route::get('/tabtype', [TypeController::class, 'tabla'])->name('tabtype');


Route::get('destype/{id_t}',[TypeController::class,'destype'])->name('destype');
Route::get('actype/{id_t}',[TypeController::class,'actype'])->name('actype');
