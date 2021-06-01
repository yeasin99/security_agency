<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guard;
use App\Models\Category;

class GuardController extends Controller
{
   public function guard()
   {   
       $title='Guard details';
       $guard=Guard::paginate(2);
       $category=Category::all();
       return view ("backend.content.guard",compact('category','guard','title'));
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
    Guard::create([
        'name'=>$request->name,
        'address'=>$request->address,
        'contact'=>$request->contact,
        'nid'=>$request->nid,
        'email'=>$request->email,
        'age'=>$request->age,
        'experience'=>$request->experience,
        'salary'=>$request->salary,
        'category_id'=>$request->category_id,
        'image'=>$file_name
    ]);
    return redirect()->back()->with('success','Guard Created Successfully.');
}



    // delete method
    public function delete($id){
        $guard=guard::find($id);
        $guard->delete();
        return redirect()->back()->with('success','Guard deleted successfully.');
    }


    // edit method
    public function editGuard($id)
    {
       //get all data of for this id
        $guard=Guard::find($id);
        $categories=Category::all();
        //pass data to a view
        return view('backend.content.guard.edit',compact('guard','categories'));
    }

    public function updateGuard(Request $request,$id)
    {
        // dd($request->all());
        Guard::find($id)->update([
           'name'=>$request->guard_name,
           'address'=>$request->guard_address,
           'contact'=>$request->guard_contact,
           'nid'=>$request->guard_nid,
           'email'=>$request->guard_email,
           'age'=>$request->guard_age,
           'salary'=>$request->guard_salary,
           'category_id'=>$request->category_id,
        ]);
        return redirect()->route('guard')->with('success','Guard Updated Successfully.');
    }


    // search
    public function search(Request $request)
    {
        $categories=Category::all();
        $search=$request->search;
        if($search){
            $guard=Guard::where('name','like','%'.$search.'%')->paginate();
                            // ->orWhere('price','like','%'.$search.'%')->paginate(5);
        }else
        {

            $guard=Guard::paginate(5);
        }

        // where(name=%search%)
        $title="Search result";
        // $category=Category::all();
        return view('backend.content.guard',compact('title','guard','search','categories'));
    }
}
