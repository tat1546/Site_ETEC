<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('principal');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::view('/administracao', 'administracao')->name('administracao');
Route::view('/principal', 'principal')->name('principal');
Route::view('/contabilidade', 'contabilidade')->name('contabilidade');
Route::view('/sistemas', 'sistemas')->name('sistemas');
Route::view('/logistica', 'logistica')->name('logistica');
Route::view('/humanos', 'humanos')->name('humanos');
Route::view('/juridicos', 'juridicos')->name('juridicos');

Route::view('/historia', 'historia')->name('historia');
Route::view('/infraestrutura', 'infraestrutura')->name('infraestrutura');

Route::view('/oportunidades', 'oportunidades')->name('oportunidades');
Route::view('/vestibulinho', 'vestibulinho')->name('vestibulinho');

Route::view('/apm', 'apm')->name('apm');
Route::view('/cursos', 'cursos')->name('cursos');
Route::view('/direcao', 'direcao')->name('direcao');
Route::view('/contato', 'contato')->name('contato');
require __DIR__.'/auth.php';
