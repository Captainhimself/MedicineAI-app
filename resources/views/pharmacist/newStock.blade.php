<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stocking</title>
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
                    <a class="nav-link text-light " href="pharmDashboard.html"><i class="bi bi-house"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="dispenseDash.html"><i class="bi bi-shop"></i> Dispense</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light active fw-bold" href="inventory.html"><i class="bi bi-card-list"></i> Stock</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="reports.html"><i class="bi bi-bar-chart"></i> Reports</a>
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

<div class="container my4">
    <div class="d-flex justify-content-between align-items-center mb-2 mt-4">
        <div>
            <h5 class="fw-bold"> New Stock</h5>
            <p class="text-muted"> Manage Medicines In Your Pharmacy</p>
        </div>
    </div>

    <div class="justify-content-between  mt-3 mb-3">
        <!-- Search & Category -->
        <div class="d-flex">
            <input type="text" class="form-control me-2" placeholder="Search medicine...">
        </div>

        <div class="mt-4 mb-3">
            <div class="product-card">
                <div class="row g-2 align-items-center">
                    <div class="col-md-3">
                        <h6 class="mb-1">Metaceflin 100mg</h6>
                    </div>
                    <div class="col-md-2">
                        <input type="text"  class="form-control form-control-sm" placeholder="Form(syrup,tablets..)">
                    </div>
                    <div class="col-md-2">
                        <input type="number"  class="form-control form-control-sm" placeholder="Cost">
                    </div>
                    <div class="col-md-2">
                        <input type="number"  class="form-control form-control-sm" placeholder="Price">
                    </div>
                    <div class="col-md-1">
                        <input type="number" min="1" value="1"  class="form-control form-control-sm">
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-sm btn-success w-100">Add</button>
                    </div>
                </div>
            </div>

            <hr>

            <!-- Right: Cart -->
            <div class="mt-4">
                <div class="card shadow-sm p-3">
                    <h6 class="fw-bold mb-3"><i class="bi bi-cart"></i> Cart (1)</h6>

                    <!-- Cart Item -->
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <div>
                            <p class="mb-0 fw-semibold"> Metaceflin 100mg</p>
                            <small class="text-muted">TSh 1,000 × 1</small>
                        </div>
                        <div class="text-end">
                            <p class="mb-0 fw-bold">TSh 1,000</p>
                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                        </div>
                    </div>

                    <hr>

                    <!-- Total -->
                    <div class="d-flex justify-content-between fw-bold mb-3">
                        <span>Total:</span>
                        <span>TSh 1,000</span>
                    </div>

                    <!-- Buttons -->
                    <button class="btn btn-success w-100 mb-2"><i class="bi bi-receipt"></i> Add Medicine(s)</button>
                    <button class="btn btn-outline-secondary w-100">Clear Cart</button>
                </div>
            </div>

        </div>

</body>
</html>
