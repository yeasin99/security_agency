<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guard;

class GuardController extends Controller
{
   public function guard()
   {   
       $title='Guard details';
       $guard=Guard::all();
       return view ("backend.content.guard",compact('guard','title'));
   }
   
   
   public function create(Request $request){
    $file_name='';


    //step:1 check req has file


    if($request->hasfile('image'))
    {


        //file is valid?

        $file=$request->file('image');
        if($file->isvalid());
        {
            //genarate unique file name


            $file_name=date('Ymdhms').'.'.$file->getClientOriginalExtension();


            //store image local directory

            $file->storeAs('photo',$file_name);
        }
    }
    guard::create([
        'name'=>$request->name,
        'address'=>$request->address,
        'contact'=>$request->contact,

        'nid'=>$request->nid,
        'email'=>$request->email,
        'age'=>$request->age,
        'image'=>$file_name,
    ]);
    return redirect()->back()->with('success','Product Created Successfully.');
}



   // delete method
      public function delete($id){
       $client=client::find($id);
       $client->delete();
       return redirect()->back()->with('success','Guard deleted successfully.');
   }
   
}
