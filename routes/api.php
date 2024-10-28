<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\TailorController;

// Routes for Orders
Route::get('/orders', [OrderController::class, 'index'])->withoutMiddleware(['auth:api']);// Get all orders
Route::post('/orders', [OrderController::class, 'store']);         // Create a new order
Route::get('/orders/{id}', [OrderController::class, 'show']);      // Get a specific order by ID
Route::put('/orders/{id}', [OrderController::class, 'update']);    // Update an order by ID
Route::delete('/orders/{id}', [OrderController::class, 'destroy']); // Delete an order by ID

// Routes for Clients
Route::get('/clients', [ClientController::class, 'index']);        // Get all clients
Route::post('/clients', [ClientController::class, 'store']);       // Create a new client
Route::get('/clients/{id}', [ClientController::class, 'show']);    // Get a specific client by ID
Route::put('/clients/{id}', [ClientController::class, 'update']);  // Update a client by ID
Route::delete('/clients/{id}', [ClientController::class, 'destroy']); // Delete a client by ID

// Routes for Tailors
Route::get('/tailors', [TailorController::class, 'index']);        // Get all tailors
Route::post('/tailors', [TailorController::class, 'store']);       // Create a new tailor
Route::get('/tailors/{id}', [TailorController::class, 'show']);    // Get a specific tailor by ID
Route::put('/tailors/{id}', [TailorController::class, 'update']);  // Update a tailor by ID
Route::delete('/tailors/{id}', [TailorController::class, 'destroy']); // Delete a tailor by ID


