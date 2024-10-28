<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    // Get all orders
    public function index()
    {
        // Sample response for testing purposes
        // You can replace this with actual data fetching logic later
        return response()->json([
            'status' => 'success',
            'message' => 'Orders fetched successfully!',
            'data' => Order::all() // Fetch all orders from the 'orders' table
        ]);
    }

    // Create a new order
    public function store(Request $request)
    {
        $request->validate([
            'Name' => 'required|string|max:255',
            'Description' => 'required|string',
        ]);

        $order = Order::create($request->all());
        return response()->json([
            'status' => 'success',
            'message' => 'Order created successfully!',
            'data' => $order
        ], 201);
    }

    // Get a single order by ID
    public function show($id)
    {
        $order = Order::find($id);
        if ($order) {
            return response()->json([
                'status' => 'success',
                'message' => 'Order fetched successfully!',
                'data' => $order
            ]);
        }
        return response()->json([
            'status' => 'error',
            'message' => 'Order not found',
        ], 404);
    }

    // Update an existing order
    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        if (!$order) {
            return response()->json([
                'status' => 'error',
                'message' => 'Order not found',
            ], 404);
        }

        $order->update($request->all());
        return response()->json([
            'status' => 'success',
            'message' => 'Order updated successfully!',
            'data' => $order
        ]);
    }

    // Delete an order by ID
    public function destroy($id)
    {
        $order = Order::find($id);
        if (!$order) {
            return response()->json([
                'status' => 'error',
                'message' => 'Order not found',
            ], 404);
        }

        $order->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Order deleted successfully!'
        ], 200);
    }
}
