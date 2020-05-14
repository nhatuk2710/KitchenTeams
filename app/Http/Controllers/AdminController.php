<?php

namespace App\Http\Controllers;

use App\Product;
use App\Ship;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home(){
        $ship = Ship::all();
        $product = Product::all();
        return view('dashboard',['ship'=>$ship,'product'=>$product]);
    }

    public function shopping($id, Request $request ){
        $product = Product::find($id);
        $cart =$request->session()->get("cart");
        $request->validate([
            'qty'=> 'required | string',
        ]);
        if($cart==null){
            $cart=[];
        }
        foreach ($cart as $p){
            if($p->id == $product->id){
                $p->cart_qty =$p->cart_qty+$request->get("qty");
                session(["cart"=>$cart]);
                return redirect()->to("/home");
            }
        }
        $product->cart_qty=$request->get("qty");
        $cart[]=$product;
        session(["cart"=>$cart]);
        return redirect()->to("/home");
    }

    public function product(){
        return view('Product.tableProduct');
    }

    public function productCreate(Request $request){
        $request->validate([
            "product_name"=>'required|string|unique:product',
            "product_desc"=>'required|string',
//            "price"=>"required|int",
            "qty"=>"required|int",
//            "ship_id"=>"required|int",
        ]);
        try {
            Product::create([
                "product_name"=>$request->get("product_name"),
                "product_desc"=>$request->get("product_desc"),
//                "price"=>$request->get("price"),
                "qty"=>$request->get("qty"),
//                "ship_id"=>$request->get("ship_id"),
            ]);
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("home");
    }


    public function ship(){
        $ship = Ship::all();
        return view('Ship.tableShip',['ship'=>$ship]);
    }

    public function shipCreate(Request $request){
        $request->validate([
            "ship_name"=>'required|string|unique:ship'
        ]);
        try {
            Ship::create([
                "ship_name"=>$request->get("ship_name"),
            ]);
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("home");
    }

}
