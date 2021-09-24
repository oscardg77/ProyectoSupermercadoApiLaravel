<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\SupermercadoController;


Route::get('user',[SupermercadoController::class, 'index']);
route::get('/user/{id}', [SupermercadoController::class, 'show']);
route::post('/user', [SupermercadoController::class, 'store']);
route::put('/user/{id}', [SupermercadoController::class, 'update']);
route::delete('/user/{id}', [SupermercadoController::class, 'destroy']);

Route::get('order',[SupermercadoController::class, 'order']);
route::get('/order/{id}', [SupermercadoController::class, 'show']);
route::post('/order', [SupermercadoController::class, 'store']);
route::put('/order/{id}', [SupermercadoController::class, 'update']);
route::delete('/order/{id}', [SupermercadoController::class, 'destroy']);


Route::get('product',[SupermercadoController::class, 'product']);
route::get('/product/{id}', [SupermercadoController::class, 'show']);
route::post('/product', [SupermercadoController::class, 'store']);
route::put('/product/{id}', [SupermercadoController::class, 'update']);
route::delete('/product/{id}', [SupermercadoController::class, 'destroy']);


Route::get('category',[SupermercadoController::class, 'category']);
route::get('/category/{id}', [SupermercadoController::class, 'show']);
route::post('/category', [SupermercadoController::class, 'store']);
route::put('/category/{id}', [SupermercadoController::class, 'update']);
route::delete('/category/{id}', [SupermercadoController::class, 'destroy']);




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
