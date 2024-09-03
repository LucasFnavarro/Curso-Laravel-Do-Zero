<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect()->route('admin.clientes');
});

Route::name('admin.')->group(function () {
    Route::get('admin/dashboard', function () {
        return "dashboard";
    })->name('dashboard');

    Route::get('admin/users', function () {
        return "users";
    })->name('users');

    Route::get('admin/clientes', function () {
        return "clientes";
    })->name('clientes');
});


// rota = /admin/dashboard, /admin/users/, /admin/clientes,
// Route::prefix('admin')->group(function () {
//     Route::get('dashboard', function () {
//         return "dashboard";
//     })->name('admin.dashboard');

//     Route::get('users', function () {
//         return "users";
//     })->name('admin.users');

//     Route::get('clientes', function () {
//         return "clientes";
//     })->name('admin.clientes');
// });

