<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plate;
use App\Order;
use App\User;
use Illuminate\Support\Facades\Auth;

class WundermanController extends Controller
{
    public function __construct() {
        //
    }

public function index()
{
    $plates = Plate::all();
    return view('wunderman')->with('plates', $plates);
}

public function order(Request $request)
{
    $order = new Order([
        'plate_id' => $request->input('plate_id'),
        'variation' => $request->input('variation'),
        'user_id' => $request->user()->id,
        'location' => $request->input('location'),
        'time' => $request ->input('time'),
    ]);
    $order->save();
    $user =  User::find(Auth::User()->id);
    $user->order_id = $order->id;
    $user->save();
    return redirect(route('welcome'));
}
 public function admin()
 {
    $orders = Order::all();

    return view('dashboard-admin')->with('orders', $orders);
 }
}