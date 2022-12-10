<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ShortLinkController;


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
    return view('welcome');
});

Route::get('/post', [PostController::class,'index'])->name('post');

Route::get('generate-shorten-link', [ShortLinkController::class,'index']);  
Route::post('generate-shorten-link', [ShortLinkController::class,'store'])->name('generate.shorten.link.post');       
Route::get('{code}', [ShortLinkController::class,'shortenLink'])->name('shorten.link');  


Route::get('create/invoice', [PdfController::class,'test']);


