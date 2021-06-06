<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;

class ProfileController extends Controller
{
    public function showProfile()
    {
        return view('frontend.content.profile');
    }
    public function showBookings()
    {
        $bookings = Booking::where('user_id',auth()->user()->id)->where('status','Pending')->get();
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
                            return view('frontend.content.booking', compact('bookings','sub_total'));
                        }else{
                            $booking = [];
                            $sub_total = 0;
                            return view('frontend.content.booking', compact('bookings','sub_total'));
                        }
        // $guard = Booking::where('user_id',auth()->user()->id)->get();
        // return view('frontend.content.profile', compact('guard'));
    }
}
