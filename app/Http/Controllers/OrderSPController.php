<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderSPController extends Controller
{
    public function index()
    {
        return view('order_sp.index');
    }

    public function result(Request $request)
    {
        $customerName = $request->input('customer_name');
        $data = DB::select('CALL get_order_summary(?)', [$customerName]);

        return view('order_sp.result', compact('data', 'customerName'));
    }
}
