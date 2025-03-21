<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles for the dashboard */
        body {
            background-color: #f4f7fc;
        }
        .navbar {
            background-color: #474bc2;
        }
        .navbar-brand {
            color: #fff;
        }
        .navbar-nav .nav-link {
            color: #fff;
        }
        .navbar-nav .nav-link:hover {
            color: #ddd;
        }
        .content {
            margin: 0 auto;
            padding: 20px;
            width: 90%;
        }
        .content h1 {
            font-size: 2rem;
            color: #474bc2;
        }
        .btn {
            margin-top: 20px;
        }
        .table th, .table td {
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- Navbar for Admin -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin Dashboard</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Settings</a>
                    </li>
                    <li class="nav-item">
                        <!-- Logout Form -->
                    <form action="{{ route('admin.logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="nav-link" style="background: none; border: none; color: white;">Logout</button>
                    </form>

                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content Area -->
    <div class="content">
        <h1>HR Accounts Management</h1>
        <p>This section allows you to manage the HR accounts and their subscription details.</p>

        <!-- HR Accounts Table -->
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Account Name</th>
                        <th>Company Name</th>
                        <th>Subscription Package</th>
                        <th>Number of Devices</th>
                        <th>Max Interns</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Data rows for HR accounts will be dynamically populated -->
                    <tr>
                        <td>1</td>
                        <td>HR Admin 1</td>
                        <td>Company A</td>
                        <td>Free</td>
                        <td>1 Device</td>
                        <td>10 Interns</td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>
                            <a href="#" class="btn btn-primary btn-sm">View</a>
                            <a href="#" class="btn btn-warning btn-sm">Edit</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>HR Admin 2</td>
                        <td>Company B</td>
                        <td>Standard</td>
                        <td>5 Devices</td>
                        <td>50 Interns</td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>
                            <a href="#" class="btn btn-primary btn-sm">View</a>
                            <a href="#" class="btn btn-warning btn-sm">Edit</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>HR Admin 3</td>
                        <td>Company C</td>
                        <td>Premium</td>
                        <td>10 Devices</td>
                        <td>Unlimited Interns</td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>
                            <a href="#" class="btn btn-primary btn-sm">View</a>
                            <a href="#" class="btn btn-warning btn-sm">Edit</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS and other required scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
