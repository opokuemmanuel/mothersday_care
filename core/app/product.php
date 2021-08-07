<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = ['product_name','category_name','description','quantity','price','image1','image2','image3','image4'];



}
