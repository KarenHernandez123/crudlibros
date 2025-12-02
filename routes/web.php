<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;

Route::resource('/', LibroController::class)->parameters([
    '' => 'libro'
])->names([
    'index' => 'libros.index',
    'create' => 'libros.create',
    'store' => 'libros.store',
    'edit' => 'libros.edit',
    'update' => 'libros.update',
    'destroy' => 'libros.destroy',
]);