<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ejemplo',[AdminController::class, 'index'])->name('ejemplo');
Route::post('/guardarUsuario',[AdminController::class, 'guardarUsuario'])->name('guarda.usuario');
Route::get('/eliminarUsuario/{id}',[AdminController::class, 'eliminarUsuario'])->name('eliminar.usuario');

Route::get('/editarUsuario/{id}',[AdminController::class, 'editarUsuario'])->name('editar.usuario');
Route::post('/actualizarUsuario/{id}',[AdminController::class, 'actualizarUsuario'])->name('actualizar.usuario');{}