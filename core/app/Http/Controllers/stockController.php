<?php

namespace App\Http\Controllers;

use App\category;
use App\product;
use Illuminate\Http\Request;

class stockController extends Controller
{
    public function product ()
    {
        $arre['pro'] = product::all();
        $arr['pros'] = product::where('id','>','0')->sum('quantity');

        return view('stock')->with($arre)->with($arr);
    }
}
