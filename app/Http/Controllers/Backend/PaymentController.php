<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment()
    {   
        $title='Payment';
        return view ("backend.content.payment",compact('title'));
    } 
}