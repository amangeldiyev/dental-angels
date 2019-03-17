<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class HomeController extends Controller
{
    public function services() {
        $categories = Category::with('services')->get();
        
        return view('services')->with('categories', $categories);
    }
}
