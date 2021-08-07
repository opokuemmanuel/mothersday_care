<?php

namespace App\Http\Controllers;

use App\category;
use App\product;
use Illuminate\Http\Request;

class homepageController extends Controller
{
    public function viewCat ()
    {
        $arre['pro'] = category::all();
        $arr['pros'] = product::all();
        return view('homepage')->with($arre)->with($arr);
    }
}
