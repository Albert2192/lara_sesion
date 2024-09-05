<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;

class productosController extends Controller
{
    //
    public function index()
    {
        $productos = Producto::all();
        return response()->json($productos);
    }
    public function storage(Request $request)
    {
        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->save();
        return response()->json($producto);
    }
    public function show($id)
    {
        $producto = Producto::find($id);
        return response()->json($producto);
    }
    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->save();
        return response()->json($producto);
    }
    public function updatePartial(Request $request, $id)
    {
        $producto = Producto::find($id);
        $validaciones = [
            'nombre' => 'string',
            'precio' => 'numeric'
        ];

        if ($request->nombre) {
            $producto->nombre = $request->nombre;
        }
        if ($request->precio) {
            $producto->precio = $request->precio;
        }
        $producto->save();
        return response()->json($producto);
    }
    public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto->delete();
        $data = [
            "status" => "ok",
            "mesaje" => "Eliminado correctamente."
        ];
        return response()->json($data);
    }
}
