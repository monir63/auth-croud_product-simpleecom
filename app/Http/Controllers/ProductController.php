<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;

class ProductController extends Controller
{
    function product(){
        return view('backend.addproduct');
    }

    function addproduct(Request $request){

        if($request->hasFile('image')){
        $upload_image=$request->file('image');
        $ext=Str::slug($request->name).'.'. $upload_image->getClientOriginalExtension();
        $destinationPath = public_path('product/image/');
        $upload_image->move($destinationPath,$ext);
        // Image::make($upload_image)->save(public_path('product/image/'.$ext));

        $product= new Product();
        $product->name=$request->name;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->image=$ext;
        $product->save();

        return back();
    }
    }

    function allproduct(){
            return view('backend.viewproduct',[
                'products'=>Product::paginate(10),
                'count'=>Product::count(),

            ]);
    }
}
