<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function admin()
    {
        $admin=Admin::all();
        return view("backend.content.admin", compact("admin"));
    }

    public function create(Request $request)
    {
       Admin::create([
           'name'=>$request->name,
           'address'=>$request->address
       ]);
       return redirect()->back()->with('success','Admin created suucesfully.');
    }

    // delete method
    public function delete($id){
        $admin=admin::find($id);
        $admin->delete();
        return redirect()->back()->with('success','Admin deleted sucessfully.');
    }
}

