<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index(){
        $orders = Order::all();
        return view('backend.pages.orders.index',compact('orders'));
        
    }
    public function create(){
        
    }

    public function store(Request $request){
        
    }

    public function edit($id){
        
    }
    public function update(Request $request , $id){
        
    }
    public function destroy($id){
        
    }
}