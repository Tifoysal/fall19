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


    public function view($id)
    {
        $product=Products::find($id);
        // Products::where('id',$id)->first();
//        dd($product);
        return view('backend.layouts.product.view',compact('product'));


    }

    public function update(Request $request,$id)
    {
       Products::where('id',$id)->update([
          'name'=>$request->name,
          'price'=>$request->price,
       ]);

       return redirect()->route('product.list')->with('message','Product Updated Successfully');
    }

    public function delete($id)
    {
        Products::find($id)->delete();
        return redirect()->route('product.list')->with('message','Product deleted Successfully');

    }

}
