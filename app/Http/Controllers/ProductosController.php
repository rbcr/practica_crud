<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductosController extends Controller
{
    public function index(){
        return View('productos.listado', []);
    }

    public function agregar(){

    }

    public function add(){

    }

    public function editar($id){

    }

    public function update(){

    }

    public function drop(){

    }
}
