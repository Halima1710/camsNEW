<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Furniture;
use App\Models\Category;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $furnitures=Furniture::latest()->take(8)->get();
        $categories = Category::all();
        return view('website.pages.home',compact('furnitures','categories'));
    }
   
 

    
}
