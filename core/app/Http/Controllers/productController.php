<?php

namespace App\Http\Controllers;

use App\category;
use App\Post;
use App\product;
use Illuminate\Http\Request;

use Image;

class productController extends Controller
{
    public function product ()
    {
        $arre['pro'] = Category::all();
        return view('product')->with($arre);
    }

    public function viewProduct ()
    {
        $arre['pro'] = product::all();
        return view('viewProduct')->with($arre);
    }

    public function ShowEdit($id=null)
    {

        $arr = product::where('id',$id)->first();

        return view('showEditProduct')->with(compact('arr'));

    }

    public function deleteProduct($id=null)
    {
        product::where('id',$id)->delete();
        $arre['pro'] = product::all();
        return view('viewProduct')->with($arre)->with('successMsg','Product Deleted successfully');

    }

    public function updateProduct(Request $request)
    {
        $image       = $request->file('photo');
        $image1      = $request->file('photo1');
        $image2      = $request->file('photo2');
        $image3      = $request->file('photo3');

        $filename    = $image->getClientOriginalName();
        $filename1    = $image1->getClientOriginalName();
        $filename2    = $image2->getClientOriginalName();
        $filename3    = $image3->getClientOriginalName();

        //Fullsize
        //  $image->move(public_path().'/full/',$filename);


        Image::make($image)->resize(200,200)->save(public_path('/post/'.$filename));
        Image::make($image1)->resize(200,200)->save(public_path('/post/'.$filename1));
        Image::make($image2)->resize(200,200)->save(public_path('/post/'.$filename2));
        Image::make($image3)->resize(200,200)->save(public_path('/post/'.$filename3));


        $product = product::find($request->id);
        $product->product_name = $request->product;
        $product->category_name = $request->category;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->image1 = $filename;
        $product->image2 = $filename1;
        $product->image3 = $filename2;
        $product->image4 = $filename3;
        $product->save();

        $arre['pro'] = product::all();
        return view('viewProduct')->with($arre)->with('success', 'Product Updated');
    }

    public function addproduct(Request $request)
    {


        $image       = $request->file('photo');
        $image1      = $request->file('photo1');
        $image2      = $request->file('photo2');
        $image3      = $request->file('photo3');

        $filename    = $image->getClientOriginalName();
        $filename1    = $image1->getClientOriginalName();
        $filename2    = $image2->getClientOriginalName();
        $filename3    = $image3->getClientOriginalName();

        Image::make($image)->resize(200,200)->save(public_path('/post/'.$filename));
        Image::make($image1)->resize(200,200)->save(public_path('/post/'.$filename1));
        Image::make($image2)->resize(200,200)->save(public_path('/post/'.$filename2));
        Image::make($image3)->resize(200,200)->save(public_path('/post/'.$filename3));


        $product= new Product();
        $product->product_name = $request->product;
        $product->category_name = $request->category;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->image1 = $filename;
        $product->image2 = $filename1;
        $product->image3 = $filename2;
        $product->image4 = $filename3;
        $product->save();

        return back()->with('success', 'Your product saved with image!!!');

    }




}
