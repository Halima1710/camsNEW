<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Repair;
use App\Models\Category;
use Illuminate\Http\Request;

class ShowrepairingController extends Controller
{
    public function showrepairinglist()
    { $repair=Repair::orderBy('id','asc')->paginate(10);
        $categories = Category::all();
        return view('website.pages.showrepairinglist',compact('repair','categories'));
    }
}
