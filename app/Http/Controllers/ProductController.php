<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{

    public function list()
    {

    	$products=Products::paginate(5);//should return collection

    	return view('backend.layouts.product.list',compact('products'));
    }

    public function create(Request $request)
    {


        Products::create([
            'name'=>$request->product_name,
            'price'=>$request->product_price,
        ]);

//        insert into 'products'('column name') values('value');


        return redirect()->back()->with('message','Product Added Successfully');


    }

}
