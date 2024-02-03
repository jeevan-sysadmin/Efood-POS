<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function viewOrder($tableNumber)
    {
        // Retrieve the order details for the specified table
        $table = Table::where('number', $tableNumber)->first();
        $order = $table->order;

        return view('orders.view', compact('order'));
    }
    // Inside your controller method that handles order placement
    public function placeOrder(Request $request)
    {
        // Your order placement logic here

        // Assuming you have a TableOrder model, update the table status
        $tableOrder = new TableOrder();
        $tableOrder->table_id = $tableId; // Replace with the actual table ID
        $tableOrder->order_id = $orderId; // Replace with the actual order ID
        $tableOrder->save();

        // You may want to update the table status in the tables array as well
        // For example, if $tables is an array, find the relevant table and update its status
        // $tables[$index]['order'] = $tableOrder;

        return response()->json(['success' => true, 'message' => 'Order placed successfully']);
    }

}