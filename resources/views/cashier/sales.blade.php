<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sales</title>
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
                    <a class="nav-link text-light " href="cashierDash.html"><i class="bi bi-house"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light active fw-bold" href="sales.html"><i class="bi bi-coin"></i> Sales</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="expenseDash.html"><i class="bi bi-box-arrow-up-left"></i> Expenses</a>
                </li>
            </ul>

            <!-- Right section -->
            <span class="navbar-text me-2 text-light"><i class="bi bi-person-circle"></i> Mohamed</span>
            <span class="badge text-bg-dark me-3">cashier</span>
            <a class="nav-link text-light" href="#">
                <i class="bi bi-box-arrow-right"></i> Logout
            </a>
        </div>
    </div>
</nav>

<!--Order Modal-->

<div class="modal fade" id="orderModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-3">
            <div class="mb-3 confirm-header">
                <span>Order Details</span>
                <button type="button" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i></button>
            </div>

            <div class="d-flex justify-content-between mb-2">
                <div>
                    <p class="mb-0 fw-semibold">Paracetamol 100mg</p>
                    <small class="text-muted">TSh 1,000 × 20</small>
                </div>
                <div class="text-end">
                    <p class="mb-0 fw-bold">TSh 20,000</p>
                </div>
            </div>

            <hr>
            <div class="d-flex justify-content-between mb-2">
                <div>
                    <p class="mb-0 fw-semibold">metacaflin 100mg</p>
                    <small class="text-muted">TSh 2,000 × 20</small>
                </div>
                <div class="text-end">
                    <p class="mb-0 fw-bold">TSh 40,000</p>
                </div>
            </div>

            <hr>

            <!-- Total -->
            <div class="d-flex justify-content-between fw-bold mb-3">
                <span>Total:</span>
                <span>TSh 60,000</span>
            </div>

            <hr>

            <!-- Payment Method -->
            <div class="d-flex justify-content-between mb-2">
                <div>
                    <p class="mb-0 fw-semibold">Payment Method</p>
                    <small class="text-muted"> Cashier: Mohammed</small>
                </div>
                <div class="text-end mb-3">
                    <span class="badge bg-success rounded-pill">Mobile money</span>
                </div>
            </div>

        </div>
    </div>
</div>

<!--end-->

<div class="container my-4">
    <div class="d-flex justify-content-between align-items-center">
        <div>
            <h4 class="fw-bold">Sales Report</h4>
            <p class="text-muted"> Browse history and Pharmacy activities</p>
        </div>
        <!-- Filter Form -->
        <form method="GET">
            <label for="interval" class="form-label fw-bold">Filter</label><select name="interval" id="interval" class="form-select">
                <option value="day">Today</option>
                <option value="week">This Week</option>
                <option value="month" >This Month</option>
                <option value="year">This Year</option>
            </select>
        </form>
    </div>
    <div class="row  align-items-center justify-content-center mb-4">
        <!-- metrics-->
        <div class="row g-3 mb-4">
            <div class="col-md-3">
                <div class="metric-card">
                    <h4> 20 </h4>
                    <p class="text-muted small"> <i class="bi bi-capsule"></i> Total Sold Items</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="metric-card">
                    <h4 > 500,000 Tsh</h4>
                    <p class="text-muted small"> <i class="bi bi-cash-coin"></i>  Total Sales</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="metric-card">
                    <h4 > 300,000 Tsh</h4>
                    <p class="text-muted small"> <i class="bi bi-cash"> </i> Total Cash </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="metric-card">
                    <h4> 2</h4>
                    <p class="text-muted small"> <i class="bi bi-wallet"> </i> Total Cashless</p>
                </div>
            </div><!--metrics end-->

            <!-- Sales -->
            <div class="card shadow-sm p-3 mt-3">
                <h5 class="fw-bold mb-3">Recent Sales
                    <span class="badge rounded-pill bg-primary"></span>
                </h5>

                <div class="user-item d-flex justify-content-between align-items-center">
                    <div>
                        <p class="mb-1 fw-semibold">#Order ID: 1</p>
                        <small class="text-muted bi bi-person-circle"> Cashier Name: Mohammed</small><br>
                        <small class="text-muted bi bi-bag"> Quantity: 12</small><br>
                        <small class="text-muted bi bi-clock"> Date: 06/11/2025 12:23 PM</small>
                    </div>
                    <div class="text-end">
                        <h6 class="badge rounded-pill bg-success"> Mobile Money
                        </h6>
                        <h6 class="fw-bold me-2"> 20,000 Tsh</h6>
                        <button class="btn btn-sm btn-outline-secondary me-1" data-bs-toggle="modal" data-bs-target="#orderModal"><i class="bi bi-eye"></i></button>
                        <button class="btn btn-sm btn-outline-secondary"><i class="bi bi-receipt"></i></button>
                    </div>
                </div>

            </div>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
