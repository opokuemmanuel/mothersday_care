<?php

namespace App\Http\Controllers;

use App\Category;
use App\product;
use Illuminate\Http\Request;
use Image;

class categoryController extends Controller
{
    public function index ()
    {
        return view('category');
    }


    public function addCat(Request $request)
    {

            $image2      = $request->file('photo1');

            $filename1    = $image2->getClientOriginalName();

            Image::make($image2)->resize(200,200)->save(public_path('/post/'.$filename1));


            $datam = Category::where('category_name', $request->category)->get();
            if (sizeof($datam)  == 1) {
                return back()->with('error', 'Category already exist');
            }else
            {

                $product= new category();

                $product->category_name = $request->category;

                $product->image = $filename1;

                $yourdat =  $product->save();

                if ($yourdat) {

                    return back()->with('success', 'Category Added');
                }


            }


    }

    public function viewCat ()
    {
        $arre['pro'] = category::all();
        return view('viewCategory')->with($arre);
    }

    public function ShowEdit($id=null)
    {

        $arr = Category::where('id',$id)->first();

        return view('editCategory')->with(compact('arr'));

    }

    public function updateCategory(Request $request)
    {
        $image2      = $request->file('photo1');

        $filename1    = $image2->getClientOriginalName();

        Image::make($image2)->resize(200,200)->save(public_path('/post/'.$filename1));

        $product=  Category::find($request->id);

        $product->category_name = $request->category_name;

        $product->image = $filename1;

        $yourdat =  $product->save();


       // dd($input);
        $arr['pro'] = Category::all();
        return view('viewCategory')->with($arr)->with('successMsg','Category Updated successfully');
    }

    public function deleteCategory($id=null)
    {
        Category::where('id',$id)->delete();
        $arr['pro'] = Category::all();
        return view('viewCategory')->with($arr)->with('successMsg','Category Deleted successfully');

    }
}
