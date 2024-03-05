<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\clientesController;
use App\Http\Controllers\contasController;

Route::prefix('clientes') -> group(function(){
    Route::get('/', [clientesController::class, 'index']) ->name('clientes.index');
    Route::get('/create', [clientesController::class, 'create']) ->name('clientes.create');
    Route::post('/store', [clientesController::class, 'store']) ->name('clientes.store');
    Route::get('/{id}/edit', [clientesController::class, 'edit'])->where('id','[0-9]+') ->name('clientes.edit');
    Route::put('/{id}', [clientesController::class, 'update'])->where('id','[0-9]+') ->name('clientes.update');
    Route::delete('/{id}', [clientesController::class, 'destroy'])->where('id','[0-9]+') ->name('clientes.destroy');
});

Route::get('/', [homeController::class, 'index'])->name('home.index');

Route::prefix('contas') -> group(function(){
    Route::get('/', [contasController::class, 'index']) ->name('contas.index');
    Route::get('/create', [contasController::class, 'create']) ->name('contas.create');
    Route::post('/store', [contasController::class, 'store']) ->name('contas.store');
    Route::get('/{id}/edit', [contasController::class, 'edit'])->where('id','[0-9]+') ->name('contas.edit');
    Route::put('/{id}', [contasController::class, 'update'])->where('id','[0-9]+') ->name('contas.update');
    Route::delete('/{id}', [contasController::class, 'destroy'])->where('id','[0-9]+') ->name('contas.destroy');
});