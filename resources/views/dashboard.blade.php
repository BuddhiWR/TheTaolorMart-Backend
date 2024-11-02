<x-app-layout>
    <!-- Header with logo and title -->
    <x-slot name="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand d-flex align-items-center" href="#">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" >
                    <span >Dashboard</span>
                    <h1 >Welcome to The Tailor Mart Dashboard</h1> 
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
            </div>
        </nav>
    </x-slot>

    <!-- Sidebar and Main Content Area -->
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar Navigation -->
            <aside class="col-md-3 col-lg-2 bg-dark p-3">
                <nav class="navbar-dark">
                <ul class="nav flex-column">
                        <li class="nav-item"><a href="{{ route('dashboard') }}" class="nav-link text-white">Dashboard</a></li>
                        <li class="nav-item"><a href="{{ route('orders.index') }}" class="nav-link text-white">Manage Orders</a></li>
                        <li class="nav-item"><a href="{{ route('clients.index') }}" class="nav-link text-white">Manage Clients</a></li>
                        <li class="nav-item"><a href="{{ route('tailors.index') }}" class="nav-link text-white">Manage Tailors</a></li>
                        <li class="nav-item"><a href="{{ route('inventory.index') }}" class="nav-link text-white">Inventory</a></li>
                        <li class="nav-item"><a href="{{ route('appointments.index') }}" class="nav-link text-white">Appointments</a></li>
                        <li class="nav-item"><a href="{{ route('finance.index') }}" class="nav-link text-white">Finance</a></li>
                        <li class="nav-item"><a href="{{ route('reports.index') }}" class="nav-link text-white">Reports</a></li>
                        <li class="nav-item"><a href="{{ route('authentication.index') }}" class="nav-link text-white">Authentication</a></li>
                        <li class="nav-item"><a href="{{ route('modifications.index') }}" class="nav-link text-white">Modification</a></li>
                        <li class="nav-item"><a href="{{ route('delivery.index') }}" class="nav-link text-white">Delivery</a></li>
                        <li class="nav-item"><a href="{{ route('feedback.index') }}" class="nav-link text-white">Feedback</a></li>
                    </ul>
                </nav>
            </aside>

            <!-- Main Content Area -->
            <main class="col-md-9 col-lg-10 p-4">
                <div class="container">
                    
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- Link to custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</x-app-layout>
