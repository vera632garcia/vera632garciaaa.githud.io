<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;

Route::resource('libro',LibroController::class)->middleware('auth');

Route::get('/', function () {
    return view('auth.login');
});
Auth::routes(['register'=>false,'reset'=>false]);

//Route::get('/home', [App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::get('/home',[LibroController::class,'index'])->name('home');
Route::group(['middleware'=>'auth'], function()
{
    Route::get('/',[LibroController::class,'index'])->name('home');
})

?>

