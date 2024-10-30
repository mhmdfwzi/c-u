<?php

namespace App\Http\Controllers\Frontend;

use App\Events\OrderCreated;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\ServiceProduct;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function createOrder($serviceProductId){
        
        $serviceProduct = ServiceProduct::findOrFail($serviceProductId);
        return view('frontend.pages.checkout',compact('serviceProduct'));
    }

    public function checkout(Request $request){
        $validateData = $request->validate([
            'customer_name'=>'required|string',
            'phone'=>'required|string',
            'address'=>'required|string',
            'email'=>'required|email',
            'service_product_id'=>'required|exists:services_products,id'
        ]);
        // dd($request->all());

        $order = Order::create($validateData);

        event(new OrderCreated($order));


        return redirect()->route('home')->with('toast_success','تم طلب الأوردر بنجاح');

        
    }
    
}