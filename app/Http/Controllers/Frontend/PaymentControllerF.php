<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentControllerF extends Controller
{
    public function userPayment(){

        $p_info = Booking::with(['orderUser'])->first();

        $bookings = Booking::where('user_id',auth()->user()->id)->get();
        // dd($bookings);

        // dd($bookings);
                        if($bookings ->count() != 0){
                            $sub_total=0;
                            foreach($bookings as $booking)
                            
                            {
                               
                                $sub_total +=  $booking->total;
                               
                            }
                            // dd($sub_total);
                    
                            // return view('frontend.partials.cart',compact('carts','sub_total'));
                            // return view('frontend.content.profile', compact('bookings','sub_total'));
                            return view('frontend.content.payment', compact('p_info','sub_total'));
                        }else{
                            $booking = [];
                            $sub_total = 0;
                            return view('frontend.content.payment', compact('p_info','sub_total'));
                        }
        // dd($p_info);
        return view('frontend.content.payment', compact('p_info'));
    }

    public function payPayment (Request $request)
    {

        $bookings = Booking::where('user_id',auth()->user()->id)->first();
        // dd($bookings);

      Payment::create([
        'booking_id'=>$bookings->id,
        'transaction_id'=>$request->input('t_id'),
        'phone_number'=>$request->input('t_phone'),
        'amount'=>$request->input('visit'),
        'user_id'=>auth()->user()->id,
        'payment_method'=>$request->input('payment_method')
        ]);

        return redirect()->route('homepage')->with('success', 'Payment successful,wait for the confirmation');
    }

}
