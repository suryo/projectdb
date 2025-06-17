<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderInsertController extends Controller
{
    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required',
            'product' => 'required',
            'quantity' => 'required|integer',
            'price' => 'required|numeric'
        ]);

        $result = DB::select(
            'CALL insert_order(?, ?, ?, ?)',
            [
                $request->customer_name,
                $request->product,
                $request->quantity,
                $request->price
            ]
        );

        return back()->with('success', 'Order created with ID: ' . $result[0]->inserted_id);
    }
}
