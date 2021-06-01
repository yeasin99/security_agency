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
        $payment=Payment::where('status','Pending')->get();
        // dd($payment);
        
        return view ("backend.content.payment",compact('title','payment'));
    } 


    public function statusUpdate($id)
    {
      $booking = Booking::find($id);

      $booking->update([

        'status'=>'Paid',
      ]);

      
      $payment = Payment::where('booking_id',$id)->first();
      // dd( $payment);

      $payment->update([

        'status'=>'Paid',
      ]);

        return redirect()->back();
    }

    public function statusCancel($id)
    {
      $booking = Booking::find($id);

      $booking->update([

        'status'=>'Canceled',
      ]);

      
      $payment = Payment::where('booking_id',$id)->first();
      // dd( $payment);

      $payment->update([

        'status'=>'Canceled',
      ]);

        return redirect()->back();
    }
}
