<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderItemRequest;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderItemController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrderItem $orderItem
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderItem $orderItem)
    {
        return view('Dashboard.Orders.edit_order_item',compact('orderItem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\OrderItemRequest $request
     * @param  \App\Models\OrderItem $orderItem
     * @return \Illuminate\Http\Response
     */
    public function update(OrderItemRequest $request, OrderItem $orderItem)
    {
        $orderItem->quantity=$request->quantity;
        $orderItem->save();

        return redirect('dashboard/orders/'.$orderItem->order_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrderItem $orderItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderItem $orderItem)
    {
        $orderItem->delete();

        return back();
    }
}
