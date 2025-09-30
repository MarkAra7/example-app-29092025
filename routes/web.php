<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/static-form', function () {
    return view('static_form');
});

Route::post('/submit-static-form', function (Request $request) {
    \Log::debug($request);
    return "Form data: " . $request['name'];
});




Route::get('/posts', [PostController::class, 'index']);


Route::get('/posts/create', [PostController::class, 'create']);

Route::post('/posts/store', [PostController::class, 'store']);

Route::get('/posts/{id}', [PostController::class, 'show']);

Route::get('/posts/{id}/edit', [PostController::class, 'edit']);
Route::put('/posts/{id}', [PostController::class, 'update']);

Route::get('/posts/delete/{id}', [PostController::class, 'delete']);
