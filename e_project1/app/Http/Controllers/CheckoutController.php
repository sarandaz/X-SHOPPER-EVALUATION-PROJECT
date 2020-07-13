<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout(){
    	return view('checkout');

    	
    	Cart::instance('default')->destroy();
    	session()->forget('coupon');

   		 return redirect()->route('confirmation.index')->with('success_message',
   		 	'Thank you! Your payment has been successfully accepted');
    }


 


}
