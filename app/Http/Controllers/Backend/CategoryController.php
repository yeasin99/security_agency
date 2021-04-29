<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    public function category()
    {
        // $title='Admin';
        $category=Category::all();
        return view("backend.content.category",compact('category'));
    }
    public function create(Request $request)
    {
       Category::create([
           'name'=>$request->name,
           'details'=>$request->details
       ]);
       return redirect()->back()->with('success','Category created successfully.');
    }

    // delete method
    public function delete($id){
        $category=Category::find($id);
        $category->delete();
        return redirect()->back()->with('success','Category deleted successfully.');
    }
    
    // edit method
    public function editCategory($id)
    {
       //get all data of for this id
       $category=Category::find($id);
       $categories=Category::all();
        //pass data to a view
        return view('backend.content.guard.cedit',compact('category','categories'));
    }
   // update category
    public function updateCategory(Request $request,$id)
    {
        // dd($request->all());
        Category::find($id)->update([
           'name'=>$request->name,
           'details'=>$request->details,
        ]);
        return redirect()->route('category')->with('success','Category Updated Successfully.');
    }
}
