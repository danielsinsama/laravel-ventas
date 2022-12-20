<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Classes\Cart;

class SalesController extends Controller
{
    //
    public function sell(Request $req){
        $carrito =  $req->session()->get('carrito');
        if(!$carrito){
            $carrito= new Cart();
        }
        $items = $carrito->items;
        $total = $carrito->total;
        return view('sale.sell')->with('items',$items)->with('total',$total);
    }

    public function addToCart(Request $req){
        $entrada = $req->all(); #traerme lo del formulario
        $idProducto = $entrada['idProducto']; #id del producto
        $carrito = $req->session()->get('carrito'); # traerme carrito de la sesion
        if(!$carrito){
            $carrito = new Cart();
        }
        $carrito->addToCart($idProducto);
        session(['carrito'=>$carrito]);
        return redirect('sell');
        // return response()->json($carrito);
    }

    public function removeItemCart($id){
        $carrito = session('carrito'); # traerme carrito de la sesion
        $carrito->removeToCart($id);
        session(['carrito'=>$carrito]);
        return redirect('sell');
    }
}

