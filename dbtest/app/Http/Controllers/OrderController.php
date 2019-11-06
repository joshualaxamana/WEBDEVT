<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index()
    {
        $orders = Order::all();
        return view('orders.index')->with('orders');
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request)
    {
        $order = new Order();

        $order->order_no = $request->order_no;
        $order->customer_name = $request->customer_name;
        $order->order_date = $request->order_date;
        $order->tin_no = $request->tin_no;

        $order->save();

        $request->session()->flash('msg', 'The order has been successfully created');

        return view('orders.create');
    }

    public function show(Order $order)
    {
        //
    }


    public function edit(Order $order)
    {
        //
    }


    public function update(Request $request, Order $order)
    {
        //
    }


    public function destroy(Order $order)
    {
        //
    }
}

