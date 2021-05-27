<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function payment()
    {   
        $title='Payment';
        $payment=Payment::all();
        return view ("backend.content.payment",compact('title','payment'));
    } 


    public function create(Request $request)
    {
       Payment::create([
            'user_id'=>auth()->user()->id,
            'phone_number'=>$request->phone_number,
        'payment_method'=>$request->payment_method,
            'transaction_id'=>$request->transaction_id,
            'amount'=>$request->amount

        ]);

        return redirect()->back();
    }
}
