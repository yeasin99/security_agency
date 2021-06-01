<?php

namespace App\Http\Controllers\Frontend;
  
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Guard;
use Illuminate\Http\Request;

class CartController extends Controller
{
   public function cart(){
       return view('frontend.content.cart');
   }
   public function addToCart($id){

    $guard = Guard::find($id);

    $user_id = auth()->user()->id;



    $checkAlreadyExistGuard = Cart::where('security_id',$id)->where('user_id',$user_id)->first();




    if(!$checkAlreadyExistGuard){
        $cartData = [
            'security_id' =>$guard->id,
            'quantity' =>1,
            'user_id'=>$user_id
        ];
        Cart::create($cartData);
    }else{

            $oldQuantity = $checkAlreadyExistGuard->quantity;

            $checkAlreadyExistGuard->update([
                'quantity' =>$oldQuantity + 1
            ]);

    }

    return redirect()->back()->with('success','Add To cart Successful');
}

}
