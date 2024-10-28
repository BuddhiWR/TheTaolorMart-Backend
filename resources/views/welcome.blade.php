<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailoring Management System - The Tailor Mart</title>

    <!-- css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('css/welcome.css') }}"> -->
    <!-- font link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

</head>
<body>
    <!-- bootstrap js link -->
    <link rel="stylesheet" href= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">

    <!-- Logo and Header Section -->
    <div class="container my-5">
        <div class="text-center">
            <img src="{{ asset('images/logo.png') }}" alt="Tailor Mart Logo" class="my-3" style="width: 100px; height: auto;">
            <h1 class="text-primary">The Tailor Mart</h1>
            <p class="text-muted">ONLINE TAILORING MANAGEMENT SYSTEM</p>
            <!-- <p class="text-warning">Due to the heavy workload, orders may be processed with a slight delay!</p> -->
        </div>

        <!-- Navigation Bar -->

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('orders.index') }}">Manage Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('clients.index') }}">Manage Clients</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('tailors.index') }}">Manage Tailors</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('inventory.index') }}">Manage Inventory</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('appointments.index') }}">Appointment Schedule</a>
        </li>
        
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

        <!-- Main Actions -->
        <div class="d-flex justify-content-center my-4">
            <a href="{{ route('login') }}" class="btn btn-warning mx-2">Login</a>
        </div>

        <!-- Help and Language Selection -->
        <divr class="text-center my-4">
            <p class="mb-1">Need Help?</p>
            <a href="{{ route('help') }}" class="btn btn-outline-info mx-2">Contact Support</a>
            <div class="dropdown d-inline">
                
                    
                </div>
            </div>
        </div>

         <!-- Footer Section -->
         <footer class="bg-light text-center text-lg-start mt-5">
            <div class="container p-4">
                <div class="row">
                    <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                        <h5 class="text-uppercase">The Tailor Mart</h5>
                        <p>
                            Tailoring services that fit your style. For inquiries, please reach out to us!
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Useful Links</h5>
                        <ul class="list-unstyled mb-0">
                            <li><a href="{{ route('terms') }}" class="text-dark">Terms of Service</a></li>
                            <li><a href="{{ route('privacy') }}" class="text-dark">Privacy Policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Follow Us</h5>
                        <a href="#" class="text-dark me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-dark me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-dark"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>

            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.1);">
                © {{ date('Y') }} The Tailor Mart. All Rights Reserved.
            </div>
        </footer>
    </div>
</body>
</html>
