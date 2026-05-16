<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - <?php echo APP_NAME; ?></title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar Navigation -->
        <?php include '../includes/sidebar.php'; ?>

        <!-- Page Content -->
        <div id="page-content-wrapper" class="w-100">
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn btn-primary" id="menu-toggle"><i class="bi bi-list"></i> Toggle Menu</button>
                    <div class="ms-auto">
                        <span class="me-3">Welcome, Admin</span>
                        <a href="logout.php" class="btn btn-sm btn-outline-danger">Logout</a>
                    </div>
                </div>
            </nav>

            <div class="container-fluid p-4">
                <h1 class="mt-4">Admin Dashboard</h1>
                <p>Overview of Computer Store Inventory & Sales</p>
                
                <div class="row mt-4">
                    <div class="col-md-3">
                        <div class="card text-white bg-primary mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Total Sales Today</h5>
                                <h2>$2,450.00</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-white bg-success mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Products in Stock</h5>
                                <h2>1,204</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-white bg-warning mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Low Stock Alerts</h5>
                                <h2>12</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card text-white bg-info mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Active Customers</h5>
                                <h2>340</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity / Shortcut Links -->
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="card mb-4">
                            <div class="card-header"><i class="bi bi-cart"></i> Recent Sales</div>
                            <div class="card-body">
                                <p class="text-muted">Dynamic list of recent sales will populate here via AJAX.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-4">
                            <div class="card-header"><i class="bi bi-exclamation-triangle"></i> Action Items</div>
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Restock 'Logitech MX Master 3'
                                        <span class="badge bg-danger rounded-pill">Urgent</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Supplier Payment Due (Tech Wholesalers)
                                        <span class="badge bg-warning rounded-pill">2 days</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/main.js"></script>
</body>
</html>
