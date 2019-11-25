<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list()
    {
//        dd("category");
        $categories=Category::paginate(5);
return view('backend.layouts.category.list',compact('categories'));

    }

}
