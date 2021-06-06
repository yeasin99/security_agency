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
      $bookings = Booking::where('status','pending')->get();
      // dd(
      // $booking);

      foreach($bookings as $booking){
      $booking->update([

        'status'=>'Paid',
      ]);

    }
      $payment = Payment::where('booking_id',$id)->latest();
      // dd( $payment);

      $payment->update([

        'status'=>'Paid',
      ]);

        return redirect()->back();
    }

    public function statusCancel($id)
    {
      $bookings = Booking::where('status','pending')->get();

      foreach($bookings as $booking){
      $booking->update([

        'status'=>'Canceled',
      ]);
      }

      
      $payment = Payment::where('booking_id',$id)->latest();
      // dd( $payment);

      $payment->update([

        'status'=>'Canceled',
      ]);

        return redirect()->back();
    }
}
