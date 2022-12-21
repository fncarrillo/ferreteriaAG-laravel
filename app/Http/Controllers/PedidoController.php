<?php

namespace App\Http\Controllers;

use Darryldecode\Cart\CartCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PedidoController extends Controller
{
    public function pedido(Request $request){
        $cartCollection = "";
        $cartCollection = \Cart::getContent();

        $usuario = Auth::user();
        $id = $usuario->id;

        DB::insert( 'INSERT INTO `pedidos` (`id`,`fecha_emision`) VALUES ('.$id.',CURRENT_DATE);');

        DB::transaction( function () use ( $cartCollection ){
            $registro = DB::select('SELECT MAX(`id_pedido`) AS nro_pedido FROM `pedidos`;');
            $registro = $registro[0]->{'nro_pedido'};
            $pedido = (is_null($registro) || empty($registro)) ? 0 : $registro;

            foreach($cartCollection as $articulo){
                DB::insert( 'INSERT INTO `productos_pedidos` (`id_producto`, `id_pedido`, `precio_venta`) VALUES ('.$articulo->id.','.$pedido.','.$articulo->price.');');
            }
        });
        \Cart::clear();
        return redirect()->route('cart.index');
    }


}
