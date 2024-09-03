<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

// Rota através de controller
Route::get('/', [ProdutoController::class, 'index'])->name('produto.index');

Route::get('/produto/{id}', [ProdutoController::class, 'show'])->name('produto.show');

