<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guard;
use App\Models\Category;

class ProductController extends Controller
{
    public function showProduct($id)
    {
       $guard=Guard::find($id);
    //    $categories=Category::all();
       return view('frontend.content.single-product',compact('guard'));
    }
    public function guardsUnderCategory($cid)
    {
       if($cid=='all')
       {
           $guards=Guard::all();
       }else
       {
           $guards=Guard::where('category_id',$cid)->get();
       }
       //get all products from product table where category id =$cid

        return view('frontend.content.product-under-category',compact('guards'));
    }

}
