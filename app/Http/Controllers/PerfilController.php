<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PerfilController extends Controller
{

    public function index()
    {
        $usuario = Auth::user();
        return view('perfil', ["usuario" => $usuario]);
    }

    public function update(Request $request, $id)
    {
        DB::update("UPDATE usuarios SET nombre = \"{$request->post('nombre')}\", apellido = \"{$request->post('apellido')}\" WHERE usuarios.id = {$id}");
        $usuario = Auth::user();
        return view('perfil',["usuario" => $usuario]);
    }
    public function show($id)
    {
        $usuario = Auth::user();
        return view('perfil', ["usuario" => $usuario, "estado" => "mostrar"]);
    }

    public function edit($id)
    {
        $usuario = Auth::user();
        return view('perfil', ["usuario" => $usuario, "estado" => "editar"]);
    }


}
