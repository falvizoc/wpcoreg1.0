<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SitemapController;
use App\Models\Comentario;
use App\Models\Post;

# Rutas principales
Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('sobre-nosotros', [HomeController::class, 'sobreNosotros'])->name('sobre-nosotros');
Route::get('servicios', [HomeController::class, 'servicios'])->name('servicios');
Route::get('proyectos', [HomeController::class, 'proyectos'])->name('proyectos');
Route::get('solicitar-cotizacion', [HomeController::class, 'contacto'])->name('solicitar-cotizacion');

Route::get('contacto', [HomeController::class, 'contacto'])->name('contacto');

# Rutas Blog
// Route::get('blog', [PostController::class, 'index'])->name('blog.index');
// Route::get('blog/{post}', [PostController::class, 'show'])->name('posts.show');
// Route::get('blog/categoria/{categoria}', [PostController::class, 'categoria'])->name('blog.posts.categoria');
// Route::get('blog/etiqueta/{etiqueta}', [PostController::class, 'etiqueta'])->name('posts.etiqueta');

Route::get('sitemap.xml', [SitemapController::class, 'sitemap']);