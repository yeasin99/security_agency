<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function payment()
    {   
        $title='Payment';
        $payment=Payment::all();
        // dd($payment);
        
        return view ("backend.content.payment",compact('title','payment'));
    } 


    public function statusUpdate($id)
    {
      $booking = Booking::find($id);

      $booking->update([

        'status'=>'Paid',
      ]);

        return redirect()->back();
    }
}
