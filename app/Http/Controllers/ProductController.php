<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    // public function home(){
    //     return redirect()->route('home');
    // }

    public function create(Request $request){
        $request->validate([
            'name'=>'required|max:24',
            'email'=>'required|email|',
            'phone'=>'required|max:11',
            'description'=>'required',
        ]);
        $c = Product::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'description' => $request->description,
        ]);

        if($c){
            return redirect()->route('show');
        }
    }

    public function show(){
        $products=Product::all();
        return view('crud.show', compact('products'));
    }
    public function edit($id){
        $products=Product::find($id);
        return view('crud.edit', compact('products'));
    }
    public function update(Request $request, $id){
        $request->validate([
            'name'=>'required|max:24',
            'email'=>'required|email|',
            'phone'=>'required|max:11',
            'description'=>'required',
        ]);

        $products=Product::find($id);
            $products->name = $request->name;
            $products->email = $request->email;
            $products->phone = $request->phone;
            $products->description = $request->description;
        $products->save();
        return redirect()->route('show');
    }

    public function productDelete($id){
        $products = Product::find($id);
        $products->delete($id);
        return back();
    }
}
