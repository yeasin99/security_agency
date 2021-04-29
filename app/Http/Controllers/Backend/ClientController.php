<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Client;


class ClientController extends Controller
{
    public function client(){
        $title='Client Details';
        $client=Client::all();
        return view ("backend.content.client",compact('client','title'));
    }



    public function create(Request $request)
    {
       Client::create([
           'name'=>$request->name,
           'address'=>$request->address,
           'contact'=>$request->contact,
           'nid'=>$request->nid,
           'email'=>$request->email
          

       ]);
       return redirect()->back()->with('success','Client created successfully.');
    }



    // delete method
    public function delete($id){
        $client=client::find($id);
        $client->delete();
        return redirect()->back()->with('success','Client deleted successfully.');
    }


    // edit method
    public function editClient($id)
    {
       //get all data of for this id
        $client=Client::find($id);
        $categories=Category::all();
        //pass data to a view
        return view('backend.content.guard.clientedit',compact('client','categories'));
    }

    public function updateClient(Request $request,$id)
    {
        // dd($request->all());
        Client::find($id)->update([
           'name'=>$request->name,
           'address'=>$request->address,
           'contact'=>$request->contact,
           'nid'=>$request->nid,
           'email'=>$request->email,
         
        ]);
        return redirect()->route('client')->with('success','Client Updated Successfully.');
    }



}
