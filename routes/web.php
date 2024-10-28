<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\TailorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\OrderListController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ModificationController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\FeedbackController;




use App\Http\Controllers\Auth\AuthenticatedSessionController;

use Illuminate\Auth\Middleware\Authenticate;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
Route::get('/tailors', [TailorController::class, 'index'])->name('tailors.index');

Route::get('/inventory', [InventoryController::class, 'index'])->name('inventory.index');
Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments.index');
Route::get('/help', [HelpController::class, 'index'])->name('help');


Route::get('/terms', [PageController::class, 'terms'])->name('terms');
Route::view('/terms', 'pages.terms')->name('terms');

Route::get('/privacy', [PageController::class, 'privacy'])->name('privacy');
Route::view('/privacy', 'pages.privacy')->name('privacy');

Route::get('/order-list', [OrderListController::class, 'index'])->name('order-list.index');
Route::get('/finance', [FinanceController::class, 'index'])->name('finance.index');
Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');
Route::get('/authentication', [AuthenticationController::class, 'index'])->name('authentication.index');
Route::get('/modifications', [ModificationController::class, 'index'])->name('modifications.index');
Route::get('/delivery', [DeliveryController::class, 'index'])->name('delivery.index');
Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback.index');





require __DIR__.'/auth.php';
