<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MemoController;
use App\Http\Controllers\EventController;

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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(PostController::class)->middleware(['auth'])->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/group', 'group')->name('group');
    Route::get('/you', 'you')->name('you');
    Route::get('/me', 'me')->name('me');
    Route::get('/graph', 'graph')->name('graph');
    Route::get('/posts/{post}', [PostController::class ,'show'])->name('show');
    Route::get('/create', [PostController::class ,'create'])->name('create');
    Route::post('/posts', 'store')->name('store');
    Route::get('/posts/delete-user-form')->name('delete-user-form');
    Route::put('/posts/{post}', 'update')->name('update');
    Route::delete('/posts/{post}', 'delete')->name('delete');
    Route::get('/posts/{post}/edit', 'edit')->name('edit');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/calendar', function () {
    return view('posts/calendar');
});

Route::get('/diary', function () {
    return view('posts/diary');
});

Route::controller(MemoController::class)->middleware(['auth'])->group(function(){
    Route::get('/memo', [MemoController::class, 'memo'])->name('memo');
    Route::get('/submit/{memo}', [MemoController::class, 'submit'])->name('submit');
});

Route::get('/calendar', [EventController::class, 'show'])->name("show");
Route::post('/calendar/create', [EventController::class, 'create'])->name("create"); // 予定の新規追加
Route::post('/calendar/get',  [EventController::class, 'get'])->name("get"); // DBに登録した予定を取得
Route::put('/calendar/update', [EventController::class, 'update'])->name("update"); // 予定の更新
Route::delete('/calendar/delete', [EventController::class, 'delete'])->name("delete"); // 予定の削除

require __DIR__.'/auth.php';
