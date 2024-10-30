<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Clients;
use App\Models\Order;
use App\Models\ServiceProduct;
use App\Models\Teamwork;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        $services = ServiceProduct::where('type','service')->count();
        $products = ServiceProduct::where('type','product')->count();
        $orders = Order::count();
        $clients = Clients::count();
        $teamwork = Teamwork::count();
        return view('backend.pages.dashboard',compact('services','products','orders','clients','teamwork'));
    }
}