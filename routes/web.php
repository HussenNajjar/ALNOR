<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ENG;
use App\Http\Controllers\Controllers;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// جبلي الدوال الذي داخل هذا ال class جبلي دالة create
Route::get('/AL_NOUR/CREATE', [ENG::class, 'create']);
Route::get('/AL_NOUR/admin', [ENG::class, 'admin']);

Route::post('/AL_NOUR/insert', [ENG::class, 'insert'])->name('AL_NOUR.insert');

Route::get('/AL_NOUR/edit/{id}', [ENG::class, 'edit'])->name('AL_NOUR.edit');

Route::post('/AL_NOUR/update/{id}', [ENG::class, 'update'])->name('AL_NOUR.update');

Route::get('/AL_NOUR/delete/{id}', [ENG::class, 'delete'])->name('AL_NOUR.delete');


///العودة على صفحة  عرض  المواعيد
Route::get('/AL_NOUR/show', [ENG::class, 'index'])->name('show');
Route::get('/admin_hero', [ENG::class, 'hussen'])->name('admin_hero');


Route::get('/dashboard', function () {

    return view('index');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/dashboard1', function () {

    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::resource('/',PostController::class);
Route::get('post/create',[PostController::class,'create']);
Route::post('post/store',[PostController::class,'store'])->name('post.store');
Route::post('show/post',[PostController::class,'show'])->name('show.post');

Route::get('showpost',function()
{
    return view('post/showpost');
});