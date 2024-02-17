<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductsController extends Controller
{
    //

    function insertData(Request $data){
        $data->validate(
            [
                'productName'=> 'alpha:ascii',
                'productPrice'=> 'numeric',
                'productDescription'=> 'required',
                'productImage'=> 'required',
            ]
        );


        $path = $data->file('productImage')->store('public');
        $imageName = Str::after($path, 'public/');


        DB::table('products')->insert([
            'productName' => $data->productName,
            'productPrice' => $data->productPrice,
            'productDescription' => $data->productDescription,
            'productImage' => $imageName,
            
        ]);


        return view("insert")->with('successMessage','Products Added Successfully!');
    }






    function view(){
        $products = DB::table('products')->get();
 
        return view('view', ['products' => $products]);
    }



    function deleteProducts(Request $data, $id){
        DB::table('products')->where('id',$id)->delete();
        return redirect('view')->with('productDelete','Product Deleted Successfully!');
    }



    function updatePage($id){
        $product = DB::table('products')->where('id',$id)->get();
 
        return view('update', ['product' => $product]);
        // return $product[0]->productName;
    }

    function updateProducts(Request $data, $id){

        $path = $data->file('productImage')->store('public');
        $imageName = Str::after($path, 'public/');


       DB::table('products')
              ->where('id', $id)
              ->update([
                'productName' => $data->productName,
                'productPrice' => $data->productPrice,
                'productDescription' => $data->productDescription,
                'productImage' => $imageName,
                
            ]);


        return redirect('view')->with('productUpdate','Product Updated Successfully!');
    }



    
}
