<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;

class OrderController extends Controller
{
    public function order()
    {
        $title='Admin';
        $booking=Booking::all();
        return view("backend.content.order", compact('booking','title'));
    }
}
