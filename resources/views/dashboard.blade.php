@vite('public/css/_apexcharts.css')


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Include the compiled CSS -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>


<body>
<x-app-layout>

    <!-- Header with logo and title -->
    <x-slot name="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand d-flex align-items-center" href="#">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-10 me-2">
                    <span class="text-white">Dashboard</span>
                    <h1 class="text-white">Welcome to The Tailor Mart Dashboard</h1> 
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
                    <!-- Welcome Card -->
                    <div class="card mb-4">
                        <div class="d-flex align-items-start row">
                            <div class="col-sm-7">
                                <div class="card-body">
                                    <h5 class="card-title text-primary mb-3">Congratulations {{ Auth::user()->name }} 🎉</h5>
                                    <p class="mb-6">You have achieved 72% more sales today.<br>Check your new badge in your profile.</p>
                                    <a href="#" class="btn btn-sm btn-outline-primary">View Badges</a>
                                </div>
                            </div>
                            <div class="col-sm-5 text-center">
                                <img src="{{asset('assets/img/illustrations/man-with-laptop.png')}}" height="175" alt="View Badge User">
                            </div>
                        </div>
                    </div>

                    <!-- Statistics Row -->
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="d-flex align-items-start justify-content-between mb-4">
                                        <img src="{{asset('assets/img/icons/unicons/chart-success.png')}}" alt="chart success" class="rounded">
                                        <p class="mb-1">Profit</p>
                                        <h4 class="card-title">$12,628</h4>
                                        <small class="text-success"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="d-flex align-items-start justify-content-between mb-4">
                                        <img src="{{asset('assets/img/icons/unicons/wallet-info.png')}}" alt="wallet info" class="rounded">
                                        <p class="mb-1">Sales</p>
                                        <h4 class="card-title">$4,679</h4>
                                        <small class="text-success"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Revenue and Order Statistics Row -->
                    <div class="row">
                        <div class="col-lg-8 mb-4">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Total Revenue</h5>
                                    <div id="totalRevenueChart"></div>
                                </div>
                                <div class="card-body">
                                    <button class="btn btn-outline-primary">View Annual Report</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5>Order Statistics</h5>
                                    <ul class="list-unstyled">
                                        <li class="d-flex align-items-center">
                                            <span>Electronics</span>
                                            <span class="ms-auto">82.5k</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span>Fashion</span>
                                            <span class="ms-auto">23.8k</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span>Decor</span>
                                            <span class="ms-auto">849k</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Transactions -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <h5>Transactions</h5>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        <li class="d-flex align-items-center">
                                            <span>Paypal</span>
                                            <span class="ms-auto">+82.6 USD</span>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <span>Wallet</span>
                                            <span class="ms-auto">+270.69 USD</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</x-app-layout>

</body>
</html>
