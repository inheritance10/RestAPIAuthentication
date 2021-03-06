<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::apiResource('products', ProductController::class);
Route::get('/products/search/{name}',[ProductController::class,'search']);


/*Route::post('products',function (){
     $product = Product::insert([
         [
             'name' => 'product two',
             'slug' => 'product-two',
             'description' => 'This is product two',
             'price' => '59.99'
         ],
         [
             'name' => 'product three',
             'slug' => 'product-three',
             'description' => 'This is product three',
             'price' => '59.99'
         ],
         [
             'name' => 'product four',
             'slug' => 'product-four',
             'description' => 'This is product four',
             'price' => '59.99'
         ],
         [
             'name' => 'product five',
             'slug' => 'product-five',
             'description' => 'This is product five',
             'price' => '59.99'
         ],
         [
             'name' => 'product six',
             'slug' => 'product-six',
             'description' => 'This is product six',
             'price' => '59.99'
         ],
         [
             'name' => 'product seven',
             'slug' => 'product-seven',
             'description' => 'This is product seven',
             'price' => '59.99'
         ],
         [
             'name' => 'product eight',
             'slug' => 'product-eight',
             'description' => 'This is product eight',
             'price' => '59.99'
         ]
     ]);

     if($product){
         return 'api test kayd?? ba??ar??l??';
     }
     return 'api test kayd?? ba??ar??s??z';
});


Route::put('products/{id}',function ($id){



   if(Product::find($id) == null){
       return 'G??ncellencek kay??t veri taban??nda bulunamad??';
   }else{
       $products = Product::find($id);
       $products->update([
           'name' => 'product three updated',
           'slug' => 'product-three',
           'description' => 'This is product three updated',
           'price' => '85.99'
       ]);

       if($products){
           return 'Api test record update successfully';
       }

       return 'Api test record update unsuccessfully';
   }
});

Route::delete('products/{id}' ,function ($id){
   if(Product::find($id) == null){
       return 'The record to be deleted does not already exist in the database';
   }else{
       $products = Product::find($id);

       if($products->delete()){
           return 'Api test record delete successfully';
       }

       return 'Api test record delete unsuccessfully';
   }
});*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
