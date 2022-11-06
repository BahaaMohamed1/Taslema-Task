<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::paginate(10);
        return view('Dashboard.orders.index',compact('orders'));
    }

    public function orderDetails(Order $order)
    {
        return view('Dashboard.orders.order_details',compact('order'));
    }
    public function orderDelete(Order $order)
    {
        $order->delete();
        return back();
    }
    public function orderItemDelete(OrderItem $orderItem)
    {
        $orderItem->delete();
        return back();
    }
}
