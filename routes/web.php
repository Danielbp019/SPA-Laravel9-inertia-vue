<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

/* Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
}); */

Route::view('/', 'index');
/* Es básicamente lo mismo de la ruta de arriba solo que se desvía de una vista en vue a una en blade (se puede dejar con la ruta original y nada cambia) y todos los enlaces y informaciones para la version de laravel o la de php están en la vista index.*/

/* Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
 */

 Route::get('dashboard', [App\Http\Controllers\PageController::class, 'dashboard'])
 ->middleware('auth:sanctum')
 ->name('dashboard');

 Route::resource('notes', App\Http\Controllers\NoteController::class)
 ->middleware('auth:sanctum');