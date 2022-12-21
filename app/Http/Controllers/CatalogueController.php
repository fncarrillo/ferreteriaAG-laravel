<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatalogueController extends Controller
{

    public function index(){
        $categorias = DB::select("SELECT * FROM categorias;");
        return view('catalogue',["categorias" => $categorias]);
    }

    public function show($id){
        $articulos = DB::select("SELECT `id_producto`, `nombre`,`ruta_img`,`medida1`,`medida2`,`precio_lista` FROM `productos` WHERE `id_categoria`={$id}");
        $categorias = DB::select("SELECT * FROM categorias;");
        return view('catalogue',["categorias" => $categorias, "articulos" => $articulos]);
    }

}
