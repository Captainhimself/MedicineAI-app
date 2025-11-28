<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stocking</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet"  href="css/main.css">
</head>
<body class="bg-success-subtle">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-success text-white shadow-sm">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand text-fold text-white" href="#">MedicineAI</a>
        <div class="nav-item align-items-center ms-3 text-light">
            <span class="badge rounded-pill bg-danger position-relative"> VIP</span>
            <small class="text-light me-1"> 256 Days</small>
        </div>

        <!-- Navbar toggler for mobile -->
        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link active text-light " href="pharmDashboard.html"><i class="bi bi-house"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light " href="dispenseDash.html"><i class="bi bi-shop"></i> Dispense</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light active fw-bold" href="inventory.html"><i class="bi bi-card-list"></i> Stock</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light " href="reports.html"><i class="bi bi-bar-chart"></i> Reports</a>
                </li>
            </ul>

            <!-- Right section -->
            <a class="nav-link position-relative me-3" href="#"><i class="bi bi-bell"></i>
                <span class="position-absolute top-2 start-100 translate-middle badge rounded-pill bg-danger">1</span>
            </a>

            <span class="navbar-text me-2 text-light"><i class="bi bi-person-circle"></i> Jeff</span>
            <span class="badge text-bg-dark me-3">Pharmacist</span>
            <a class="nav-link text-light" href="logout.php">
                <i class="bi bi-box-arrow-right"></i> Logout
            </a>
        </div>
    </div>
</nav>

<div class="container my-4">
    <div class="d-flex justify-content-between align-items-center">
        <div>
            <h4 class="fw-bold">Inventory</h4>
            <p class="text-muted"> Manage Stock At your Pharmacy</p>
        </div>
        <a href="stocking.html" class="btn btn-success bi bi-plus-circle"> Add Stock</a>
    </div>
    <div class="row  align-items-center justify-content-center mb-4">
        <!-- metrics-->
        <div class="row g-3 mb-4 justify-content-between">
            <div class="col-md-3">
                <div class="metric-card">
                    <h4> 100 </h4>
                    <p class="text-muted small"> <i class="bi bi-capsule"></i> Total Medicines</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="metric-card">
                    <h4 > 100,000 Tsh</h4>
                    <p class="text-muted small"> <i class="bi bi-cash"></i>  Total Cost</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="metric-card">
                    <h4 class="text-danger"> 2</h4>
                    <p class="text-muted small"> <i class="bi bi-exclamation-triangle-fill"> </i> Low stock </p>
                </div>
            </div>
            <!--metrics end-->

            <!-- Sales -->
            <div class="card shadow-sm p-3 mt-3">
                <h5 class="fw-bold mb-3">Recent Stock
                    <span class="badge rounded-pill bg-primary"></span>
                </h5>

                <div class="user-item d-flex justify-content-between align-items-center">
                    <div>
                        <p class="mb-1 fw-semibold"> Metaceflin 100mg</p>
                        <small class="text-muted bi bi-person-circle">  Form: Tablets</small><br>
                        <small class="text-muted bi bi-bag"> Cost: 1,000 Tsh</small><br>
                        <small class="text-muted bi bi-clock"> Quantity: 100</small><br>
                        <small class="text-muted bi bi-clock"> Date: 06/11/2025 12:23 PM</small>
                    </div>
                    <div class="text-end">
                        <h6 class="badge rounded-pill bg-success"> Intime
                        </h6>
                        <h6 class="fw-bold me-2"> 2,000 Tsh</h6>
                        <button class="btn btn-sm btn-outline-secondary me-1" ><i class="bi bi-pencil-square"></i> </button>
                        <button class="btn btn-sm btn-outline-danger me-1" ><i class="bi bi-trash-fill"></i> </button>

                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
