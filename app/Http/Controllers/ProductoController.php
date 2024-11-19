<?php

namespace App\Http\Controllers;

use App\Http\Requests\Pedidos\ProductoRequest;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function ListarProductos(){

        $productos = Producto::all();
        return response()->json([
            'data' => $productos,
            'status' => 200
        ], 200);
    }

    public function listarProductoId($id){
        $producto = Producto::find($id);
        return response()->json([
            'data' => $producto,
            'status' => 200
        ], 200);
    }

    public function crearProducto(ProductoRequest $request){
        
        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = number_format($request->precio, 2, '.', '');
        $producto->stock = $request->stock;
        $producto->save();

        return response()->json([
            'data' => $producto,
            'status' => 200
        ], 200);
    }

    public function actualizarProducto(ProductoRequest $request, $id){

        $producto = Producto::find($id);

        if(!$producto){
            return response()->json([
                'data' => $producto,
                'status' => 404
            ], 404);  
        }
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = number_format($request->precio, 2, '.', '');
        $producto->stock = $request->stock;
        $producto->save();

        return response()->json([
            'data' => $producto,
            'status' => 200
        ], 200);
    }

    public function eliminarProducto($id){
        $producto = Producto::find($id);

        if(!$producto){
            return response()->json([
                'error' => 'Producto no encontrado'
            ], 404);
        }
        $producto->delete();
    }
}
