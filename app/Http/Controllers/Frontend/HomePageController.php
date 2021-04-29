<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Guard;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function homepage()
    {
        $guard=Guard::all();
        // $categories=Category::all();
        return view('frontend.content.guardview',compact('guard'));
    }
}

