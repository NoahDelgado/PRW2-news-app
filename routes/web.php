<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AuctionController;

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

Route::resource('articles', ArticleController::class);
Route::resource('articles.comments', CommentController::class)->only(['store']);
Route::resource('articles.auctions', AuctionController::class)->only(['store', 'create']);
Route::get('/', [ArticleController::class, 'topByViews'])->name('articles.topByViews');
