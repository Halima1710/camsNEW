<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Design;
use App\Models\Category;
use Illuminate\Http\Request;

class DesignshowController extends Controller
{
    public function showdesign()
    {
      $designs=Design::all();
      $categories = Category::all();
    //   dd($categories);
      return view('website.pages.designshow',compact('designs','categories'));
    }
}
