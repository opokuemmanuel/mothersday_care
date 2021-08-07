<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;

class notificationController extends Controller
{
    public function product ()
    {
        $arre['pro'] = product::where('quantity','<','5')->get();

        return view('Notification')->with($arre);
    }
}
