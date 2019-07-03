<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plate;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $plates = Plate::all();
        return view('wunderman')->with('plates', $plates);
    }
}
