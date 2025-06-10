<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        echo "Displaying all orders";
        $isitableorder = DB::select('SELECT * FROM orders');
        // dd($isitableorder);
        return view('index',compact('isitableorder'));
    }

    public function summary()
    {
        $summary = DB::select('SELECT * FROM order_summary');
        //dd($summary);
        return view('summary', ['summary' => $summary]);
    }
}
