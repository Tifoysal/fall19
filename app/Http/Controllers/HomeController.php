<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome()
    {

    	return view('backend.layouts.home');
    }

	public function about()
	{
		return view('backend.layouts.about');
	}
}
