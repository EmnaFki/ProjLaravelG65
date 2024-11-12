<?php


use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/shop')->group(function () {

    Route::get('/', [ArticleController::class, 'index'])->name('shop.index');

    Route::get('/{slug}-{article}', [ArticleController::class, 'show'])
        ->where([
            'article' => '[0-9]+',
            'slug' => '[a-zA-Z0-9\-]+'
        ])->name('shop.show');
});
