<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\EtiquetasController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\CkeditorController;
use App\Http\Controllers\Admin\ConsultasController;
use App\Http\Controllers\Admin\NotificacionesController;

Route::get('', [HomeController::class, 'index'])->middleware('can:admin.index')->name('admin.index');

# Categorias
Route::resource('categorias', CategoriaController::class)->names('admin.categorias');

# Etiquetas
Route::resource('etiquetas', EtiquetasController::class)->names('admin.etiquetas');

# Post
Route::resource('posts', PostController::class)->names('admin.posts');

# Consultas
Route::get('consultas', [ConsultasController::class, 'index'])->name('admin.consultas.index');
Route::get('consultas/show/{consulta}', [ConsultasController::class, 'show'])->name('admin.consultas.show');
Route::delete('consultas/destroy/{consulta}', [ConsultasController::class, 'destroy'])->name('admin.consultas.destroy');

# Usuarios
Route::resource('users', UserController::class)->only(['index','edit','update'])->names('admin.users');

# Roles
Route::resource('roles', RoleController::class)->names('admin.roles');

# Upload images Ckeditor
Route::get('ckeditor', [CkeditorController::class, 'index']);
Route::post('ckeditor/upload', [CkeditorController::class, 'upload'])->name('ckeditor.upload');

# Notificaciones
// Route::get(
//     'notifications/get',[NotificacionesController::class, 'getNotificationsData']
// )->name('notifications.get');

