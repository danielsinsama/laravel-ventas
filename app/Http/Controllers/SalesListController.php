<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesListController extends Controller
{
    //
    public function salesList(Request $req){

        return view('saleslist.list');

    }
}
