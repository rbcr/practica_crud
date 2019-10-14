<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductosController extends Controller
{
    public function index(){
        $productos = Producto::All();
        return View('productos.listado', ['productos' => $productos]);
    }

    public function agregar(){
        return View('productos.agregar', []);
    }

    public function add(){
        try{
            $nombre = $_POST['nombre'];
            $precio = $_POST['precio'];
            $costo = $_POST['costo'];

            $producto = new Producto();
            $producto->nombre = $nombre;
            $producto->costo = (double)$costo;
            $producto->precio = (double)$precio;
            $producto->save();
            $response = ['status' => true, 'message' => "Se ha guardado satisfactoriamente el producto"];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => "Error: " . $exception->getMessage()];
        }
        return json_encode($response);
    }

    public function editar($id){
        $producto = Producto::where('id', $id)->get();
        if($producto->count()){
            $producto = $producto->first();
            return View('productos.editar', ['producto' => $producto]);
        } else
            return redirect('productos');
    }

    public function update(){
        try{
            $id = (int)$_POST['id'];
            $producto = Producto::where('id', $id)->get();
            if($producto->count()){
                $nombre = $_POST['nombre'];
                $precio = $_POST['precio'];
                $costo = $_POST['costo'];
                $producto = $producto->first();
                $producto->nombre = $nombre;
                $producto->costo = (double)$costo;
                $producto->precio = (double)$precio;
                $producto->save();
                $response = ['status' => true, 'message' => "Se ha actualizado satisfactoriamente el producto"];
            } else
                $response = ['status' => false, 'message' => 'Lo sentimos, no se ha encontrado el producto'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => "Error: " . $exception->getMessage()];
        }
        return json_encode($response);
    }

    public function drop(){
        try{
            $id = (int)$_POST['id'];
            $producto = Producto::where('id', $id)->get();
            if($producto->count()){
                $producto = $producto->first();
                $producto->delete();
                $response = ['status' => true, 'message' => "Se ha eliminado satisfactoriamente el producto"];
            } else
                $response = ['status' => false, 'message' => 'Lo sentimos, no se ha encontrado el producto'];
        } catch (\Exception $exception){
            $response = ['status' => false, 'message' => "Error: " . $exception->getMessage()];
        }
        return json_encode($response);
    }
}
