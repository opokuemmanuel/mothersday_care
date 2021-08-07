<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\category;

Route::get('/', function () {
    return view('homepage');
});


////// All routes on payment////////////////////
Route::get('/payment', 'paymentController@payment')->name('payment');

////// All routes on admin////////////////////
Route::get('/admin', 'adminController@admin')->name('admin');

////// All routes on product////////////////////
Route::get('/productcategory', 'productController@product')->name('procat');
Route::post('/addproduct', 'productController@addproduct')->name('addproduct');
Route::get('/viewProduct', 'productController@viewProduct')->name('viewProduct');
Route::get('/deletePost/{id}', 'productController@deleteProduct');
Route::get('/editPost/{id}', 'productController@ShowEdit');
Route::post('/editProduct', 'productController@updateProduct')->name('EditProduct');


////////////// All routes on category //////////////////////////////////
Route::get('/category', 'categoryController@index')->name('cat');
Route::post('/addCategory', 'categoryController@addCat')->name('category');
//Route::get('/viewCategory', 'categoryController@viewCat')->name('viewCategory');

Route::get('/viewCategory', function () {

    $arre['pro'] = Category::all();
    return view('viewCategory')->with($arre);

})->name('viewCategory');




Route::get('/DeletePost/{id}', 'categoryController@deleteCategory');
Route::get('/EditPost/{id}', 'categoryController@ShowEdit');
Route::post('/editCategory', 'categoryController@updateCategory')->name('editCategory');


Route::get('/', 'homepageController@viewCat');



////////////////////All routes on stock///////////////////////////////////////
Route::get('/stock', 'stockController@product')->name('viewStock');
Route::get('/notification', 'notificationController@product')->name('viewNoti');
