<?php

namespace App\Http\Controllers;

use App\category;
use Illuminate\Http\Request;

class paymentController extends Controller
{
    public function payment ()
    {
        $arre['pro'] = Category::all();
        return view('payment')->with($arre);

    }
}
