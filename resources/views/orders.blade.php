<!-- resources/views/orders/orders.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Add your CSS here -->
</head>
<body>
    <div class="container">
        <h1>Order Management</h1>

        <!-- Form to Create New Order -->
        <form action="{{ route('orders.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="Name">Order Name</label>
                <input type="text" name="Name" id="Name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Description">Description</label>
                <textarea name="Description" id="Description" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Order</button>
        </form>

        <hr>

        <!-- List of Orders -->
        <h2>Order List</h2>
        @if($orders->isEmpty())
            <p>No orders found.</p>
        @else
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->Name }}</td>
                            <td>{{ $order->Description }}</td>
                            <td>
                                <!-- Edit and Delete Actions -->
                                <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</body>
</html>
