<?php

use App\Http\controllers\gunnyController;
use App\Http\controllers\varianController;
use App\Http\controllers\CobaController;
use App\Http\controllers\homeController;
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
/*
Route::get('/', function () {
    return view('welcome');
});
Route::get('/coba', function () {
    return view('coba');
});
Route::get('/coba/{no}', [CobaController::class, 'coba']);
Route::get('/test', [CobaController::class, 'index']);
Route::get('/test/{ke}', [CobaController::class, 'urutan']);
*/

//Route::get('', [CobaController::class, 'index']);
//Route::get('/produks', [CobaController::class, 'index']);
//Route::get('/produks/create', [CobaController::class, 'create']);
//Route::post('/produks/store', [CobaController::class, 'store']);
//Route::get('/produks/{id}', [CobaController::class, 'show']);
//Route::get('/produks/{id}/edit', [CobaController::class, 'edit']);
//Route::put('/produks/{id}', [CobaController::class, 'update']);
//Route::delete('/produks/{id}', [CobaController::class, 'destroy']);


Route::resources([
    'produks' => CobaController::class,
    'home' => homeController::class,
    'varian' => varianController::class,
    'gunny' => gunnyController::class,
    ]);