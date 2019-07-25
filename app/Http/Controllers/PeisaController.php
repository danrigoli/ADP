<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plate;
use App\Order;
use App\Virtualticket;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class PeisaController extends Controller
{
    public function __construct() {
        //
    }

public function index()
{
    $plates = Plate::all(); 
    return view('peisa')->with('plates', $plates);
}

public function order(Request $request)
{
    if (Auth::User()->order_id != null) {
        $order = Order::where('id', '=', Auth::User()->order_id)->get();
        $user =  User::find(Auth::User()->id);
        $user->order_id = null;
        $user->save();
        $order[0]->delete();
    }
    $order = new Order([
        'plate_id' => $request->input('plate_id'),
        'variation' => $request->input('variation'),
        'upgrade' => $request->input('upgrade'),
        'user_id' => Auth::User()->id,
        'time' => $request ->input('time'),
        'observation' => $request->input('observation')
    ]);
    $order->save();
    $user =  User::find(Auth::User()->id);
    $user->order_id = $order->id;
    $user->save();
    return redirect(route('home'));
}
 public function admin()
  {   
    $orders = Order::all(); 
    $dayorders = Order::whereDate('created_at', '>=', today())->get();
    $tickets = Virtualticket::all();
    $daytickets = Virtualticket::whereDate('created_at', '>=', today())->get();
    return view('dashboard-admin')->with('orders', $orders)->with('dayorders', $dayorders)->with('tickets', $tickets)->with('daytickets', $daytickets);
 }

 public function generateTicket()
 {
     return view('ticketgenerator');
 }

 public function createTicket(Request $request)
 {
    $ticket = new VirtualTicket([
        'name' => $request->input('name'),
        'tnumber' => $request->input('number')
    ]);
    $ticket->save();
    return redirect(route('home'));
 }
}