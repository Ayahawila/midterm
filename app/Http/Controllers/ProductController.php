<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class TicketController extends Controller
{
    public function open(Request $request){
      $product=new Product;
      $product->Name=$request->Name;
      $product->Price=$request->Price;
      $product->Quantity=$request->Quantity;
      $product->message=$request->message;
      $product->created_at=now();
      $product->updated_at=now();
      $product->save();
      return redirect('');
    }
    public function show(){
        $product=Product::get();
        return view('my_products',compact('products'));
    }
    public function showInf($id){
        $products=Product::where('id','=',$id)->get();
        return view('show_product',compact('products'));
    }
    public function Delete(){
       DB :: table('products')
    }
    public function Edit(){
        DB :: table('products')
    }
    



}
