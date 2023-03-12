<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PpdbController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PpdbController::class, 'tampilan_awal']);

Route::get('/ppdb', [PpdbController::class, 'beranda']);
Route::get('/ppdb/daftar', [PpdbController::class, 'daftar']);
Route::post('/ppdb/daftar', [PpdbController::class, 'store']);
Route::get('/ppdb/pengumuman', [PpdbController::class, 'pengumuman']);
Route::get('/ppdb/student/{student}', [PpdbController::class, 'show']);
Route::put('/admin/student/{student}', [AdminController::class, 'updateStudent']);

Route::get('/admin/login', [AdminController::class, 'login']);
Route::post('/admin/login', [AdminController::class, 'loginValidation']);
Route::get('/admin/logout', [AdminController::class, 'logout'])->middleware('auth');
Route::get('/admin/index', [AdminController::class, 'index'])->middleware('auth');
Route::get('/admin/recruitment', [AdminController::class, 'recruitment'])->middleware('auth');
Route::delete('/admin/recruitment/{recruitment:tahun_ajaran}', [AdminController::class, 'destroy'])->middleware('auth');
Route::get('/admin/recruitment/create', [AdminController::class, 'createRecruitment'])->middleware('auth');
Route::post('/admin/recruitment/create', [AdminController::class, 'storeRecruitment'])->middleware('auth');
Route::get('/admin/recruitment/{recruitment:tahun_ajaran}/edit', [AdminController::class, 'editRecruitment'])->middleware('auth');
Route::put('/admin/recruitment/{id}', [AdminController::class, 'updateRecruitment'])->middleware('auth');

Route::get('/admin/blog', [BlogController::class, 'tampil_blog'])->name('tampil_blog');
Route::get('/admin/blog/tambah', [BlogController::class, 'tambah_blog'])->name('tambah_blog');
Route::post('/admin/blog/simpan', [BlogController::class, 'simpan_blog'])->name('simpan_blog');
Route::get('/admin/blog/{blog:id}/edit', [BlogController::class, 'edit_blog'])->middleware('auth');
Route::post('/admin/blog/{id}', [BlogController::class, 'update_blog'])->name('update_blog')->middleware('auth');
Route::delete('/admin/blog/{blog:id}', [BlogController::class, 'hapus_blog'])->middleware('auth');

Route::get('/admin/user', [UserController::class, 'tampil_user'])->name('tampil_user')->middleware('auth');
Route::get('/admin/user/tambah', [UserController::class, 'tambah_user'])->name('tambah_user');
Route::post('/admin/user/simpan', [UserController::class, 'simpan_user'])->name('simpan_user');
Route::get('/admin/user/{user:id}/edit', [UserController::class, 'edit_user'])->middleware('auth');
Route::post('/admin/user/{id}', [UserController::class, 'update_user'])->name('update_user')->middleware('auth');
Route::delete('/admin/user/{user:id}', [UserController::class, 'hapus_user'])->middleware('auth');



