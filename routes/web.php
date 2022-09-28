<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Posts;
use App\Http\Livewire\Revistas;
use App\Http\Livewire\Atributos;
use App\Http\Livewire\Etiquetas;

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

Route::get('posts', Posts::class);
Route::get('revistas', Revistas::class);
Route::get('atributos', Atributos::class);
Route::get('etiquetas', Etiquetas::class);
//Route Hooks - Do not delete//
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
