<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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
    // return view('welcome');
    // return view('landing.index');
    // return view('layouts.raw_backend');
    // return view('backend.post');
    return redirect('/admin/posting');
});

Route::get('/post/{contoh}',[PostController::class,'post_detail'])->name('post.detail');

// BE
// POSTING
Route::get('/admin/posting',[PostController::class,'backend_posting'])->name('page.posting.backend');
Route::post('/admin/add-posting',[PostController::class,'backend_add_posting'])->name('add.posting.backend');
Route::post('/admin/remove-posting',[PostController::class,'backend_remove_posting'])->name('remove.posting.backend');
Route::get('/admin/list-posting',[PostController::class,'backend_list_posting'])->name('page_list.posting.backend');

Route::post('/cek',[PostController::class,'cek'])->name('cek');

// KATEGORI
Route::get('/admin/kategori',[PostController::class,'backend_kategori'])->name('page.kategori.backend');
Route::post('/admin/add-kategori',[PostController::class,'backend_add_kategori'])->name('add.kategori.backend');
Route::post('/admin/remove-kategori',[PostController::class,'backend_remove_kategori'])->name('remove.kategori.backend');
// SUMBER
Route::get('/admin/sumber',[PostController::class,'backend_sumber'])->name('page.sumber.backend');
Route::post('/admin/add-sumber',[PostController::class,'backend_add_sumber'])->name('add.sumber.backend');
Route::post('/admin/remove-sumber',[PostController::class,'backend_remove_sumber'])->name('remove.sumber.backend');
// PENULIS
Route::get('/admin/penulis',[PostController::class,'backend_penulis'])->name('page.penulis.backend');
Route::post('/admin/add-penulis',[PostController::class,'backend_add_penulis'])->name('add.penulis.backend');
Route::post('/admin/remove-penulis',[PostController::class,'backend_remove_penulis'])->name('remove.penulis.backend');
// JENIS
Route::get('/admin/jenis',[PostController::class,'backend_jenis'])->name('page.jenis.backend');
Route::post('/admin/add-jenis',[PostController::class,'backend_add_jenis'])->name('add.jenis.backend');
Route::post('/admin/remove-jenis',[PostController::class,'backend_remove_jenis'])->name('remove.jenis.backend');