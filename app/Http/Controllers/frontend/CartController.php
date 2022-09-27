<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addtocart(Request $request)
    {
       //dd($request->all());
       $product_id = $request->input('product_id');      
       if (Auth::check()) {
           $prod_check = Product::where('id', $product_id)->first();
           //dd($prod_check);
           if ($prod_check) {
               if (Cart::where('product_id', $product_id)->where('user_id', Auth::id())->exists()) {
                   //dd($prod_check);
                   return response()->json(['status' => $prod_check->name . " Already Added to Cart"]);
               } 
                else{
           $cart = new Cart();
           $cart->user_id = Auth::id();       
           $cart->product_id = $request->input('product_id');       
           $cart->save();
           //dd($cart);
           return response()->json(['status' => $prod_check->name . " Added to Cart"]);
       }
   }
}
       else{
           return redirect('/login');
       }    
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
