<?php
use App\Http\Controllers\PostController;
use App\Http\Controllers\Showcontroller;
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

Route::get('/',[Showcontroller::class,'showpost'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



// crud route
Route::get('/admin',[PostController::class,'index'])->middleware('auth');

Route::get('/create',function(){
return view('create');
})->middleware('auth');

Route::post('/post',[PostController::class,'store'])->middleware('auth');
Route::delete('/delete/{id}',[PostController::class,'destroy'])->middleware('auth');
Route::get('/edit/{id}',[PostController::class,'edit'])->middleware('auth');

Route::delete('/deleteimage/{id}',[PostController::class,'deleteimage'])->middleware('auth');
Route::delete('/deletecover/{id}',[PostController::class,'deletecover'])->middleware('auth');

Route::put('/update/{id}',[PostController::class,'update'])->middleware('auth');

