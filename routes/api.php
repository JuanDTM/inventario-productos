<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
//auth:
Route::middleware(['api/productos'])->group(function(){
    Route::get('/productos', [ProductoController::class, 'ListarProductos']);
    Route::get('/producto/{id}', [ProductoController::class, 'listarProductoId']);
    Route::post('/crear-producto',[ProductoController::class, 'crearProducto']);
    Route::post('/actualizar-producto', [ProductoController::class, 'actualizarProducto']);
    Route::delete('/eliminar-producto', [ProductoController::class, 'eliminarProducto']);
    
});

