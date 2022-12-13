<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class SalesController extends Controller
{
    //
    public function sell(){
        return view('sale.sell');
    }
    public function search(Request $req){
        $entrada = $req->all();
        $idProducto = $entrada['idProducto'];
        $producto = Product::find($idProducto);
        return $producto;
    }
}
