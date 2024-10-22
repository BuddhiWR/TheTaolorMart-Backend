<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    // Get all clients
    public function index()
    {
        return response()->json([
            'status' => 'success',
            'message' => 'Clients fetched successfully!',
            'data' => Client::all()
        ]);
    }

    // Create a new client
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:clients',
            'phone' => 'required|string|max:15',
        ]);

        $client = Client::create($request->all());
        return response()->json([
            'status' => 'success',
            'message' => 'Client created successfully!',
            'data' => $client
        ], 201);
    }

    // Get a single client by ID
    public function show($id)
    {
        $client = Client::find($id);
        if ($client) {
            return response()->json([
                'status' => 'success',
                'message' => 'Client fetched successfully!',
                'data' => $client
            ]);
        }
        return response()->json([
            'status' => 'error',
            'message' => 'Client not found',
        ], 404);
    }

    // Update an existing client
    public function update(Request $request, $id)
    {
        $client = Client::find($id);
        if (!$client) {
            return response()->json([
                'status' => 'error',
                'message' => 'Client not found',
            ], 404);
        }

        $client->update($request->all());
        return response()->json([
            'status' => 'success',
            'message' => 'Client updated successfully!',
            'data' => $client
        ]);
    }

    // Delete a client by ID
    public function destroy($id)
    {
        $client = Client::find($id);
        if (!$client) {
            return response()->json([
                'status' => 'error',
                'message' => 'Client not found',
            ], 404);
        }

        $client->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Client deleted successfully!'
        ], 200);
    }
}
