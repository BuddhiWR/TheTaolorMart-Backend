<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tailor;

class TailorController extends Controller
{
    // Get all tailors
    public function index()
    {
        return response()->json([
            'status' => 'success',
            'message' => 'Tailors fetched successfully!',
            'data' => Tailor::all()
        ]);
    }

    // Create a new tailor
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'expertise' => 'required|string|max:255',
        ]);

        $tailor = Tailor::create($request->all());
        return response()->json([
            'status' => 'success',
            'message' => 'Tailor created successfully!',
            'data' => $tailor
        ], 201);
    }

    // Get a single tailor by ID
    public function show($id)
    {
        $tailor = Tailor::find($id);
        if ($tailor) {
            return response()->json([
                'status' => 'success',
                'message' => 'Tailor fetched successfully!',
                'data' => $tailor
            ]);
        }
        return response()->json([
            'status' => 'error',
            'message' => 'Tailor not found',
        ], 404);
    }

    // Update an existing tailor
    public function update(Request $request, $id)
    {
        $tailor = Tailor::find($id);
        if (!$tailor) {
            return response()->json([
                'status' => 'error',
                'message' => 'Tailor not found',
            ], 404);
        }

        $tailor->update($request->all());
        return response()->json([
            'status' => 'success',
            'message' => 'Tailor updated successfully!',
            'data' => $tailor
        ]);
    }

    // Delete a tailor by ID
    public function destroy($id)
    {
        $tailor = Tailor::find($id);
        if (!$tailor) {
            return response()->json([
                'status' => 'error',
                'message' => 'Tailor not found',
            ], 404);
        }

        $tailor->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Tailor deleted successfully!'
        ], 200);
    }
}
