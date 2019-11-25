<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{

    public function list()
    {

    	$products=Products::with('category')->paginate(5);//should return collection
        $categories=Category::where('status','active')->get();
    	return view('backend.layouts.product.list',compact('products','categories'));
    }

    public function create(Request $request)
    {

//        dd($request->all());

        Products::create([
            'name'=>$request->product_name,
            'category_id'=>$request->category_id,
            'price'=>$request->product_price,
        ]);

//        insert into 'products'('column name') values('value');


        return redirect()->back()->with('message','Product Added Successfully');


    }

}
