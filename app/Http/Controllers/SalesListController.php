<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SalesListController extends Controller
{
    //
    public function salesList(Request $req){

        $sales_array=[];

        $sales = DB::table('sales')->select('id','total','created_at')->get();
        foreach ($sales as $sale) {
            $list= DB::table('sold_products')
            ->join('sales', 'sales.id', '=', 'sold_products.saleId')
            ->join('products','products.id','=','sold_products.productId')         
            ->select( 'sold_products.productId', 'sold_products.quantity', 'products.nombre','products.descripcion','products.precioventa','products.precioventa')
            ->where('saleId','=',$sale->id)
            ->get();
            $sales_array[] = ["saleId"=>$sale->id,"total"=>$sale->total,"fecha"=>$sale->created_at,"list"=>$list];
        }

        // return $sales_array;
        return view('saleslist.list')->with('sales_array',$sales_array);


    }
}
