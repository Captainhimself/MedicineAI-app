<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment</title>
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
                    <a class="nav-link active text-light fw-bold" href="cashierDash.html"><i class="bi bi-house"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="sales.html"><i class="bi bi-coin"></i> Sales</a>
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
<!-- Main contents-->
<div class="container my-4">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold">Welcome Back!, Mohamed</h3>
            <p class="text-muted bi bi-geo-alt-fill"> Majula Pharmacy-Kigamboni</p>
        </div>
    </div>
    <!-- metrics-->
    <div class="row g-3 mb-4">
        <div class="col-md-3">
            <div class="metric-card">
                <h4> 200 </h4>
                <p class="text-muted small"> <i class="bi bi-shop"></i> Total sales</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="metric-card">
                <h4 class="text-danger"> 1</h4>
                <p class="text-muted small"> <i class="bi bi-calendar-x"></i>  Total Pending</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="metric-card">
                <h4 > 300,000 Tsh</h4>
                <p class="text-muted small"> <i class="bi bi-capsule"> </i> Total Expenses </p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="metric-card">
                <h4 class="text-success"> 3</h4>
                <p class="text-muted small"> <i class="bi bi-exclamation-triangle-fill"> </i> Total confirmed</p>
            </div>
        </div><!--metrics end-->

    </div>

    <!--pending-->
    <div class="card shadow-sm p-3 mb-4">
        <h5 class="fw-bold mb-3 ">Payment Pending Order</h5>
        <!-- Pending Request -->
        <div class="table-responsive">
            <table class="table table-hover table-borderless">
                <thead>
                <tr>
                    <th>Pharmacist Name</th>
                    <th>Order ID</th>
                    <th>Total</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody class="table-group-divider">
                <tr>
                    <td>
                        <span class="avatar"><i class="bi bi-person-circle"></i> Jeff</span>
                    </td>
                    <td>1</td>
                    <td>20,000 Tsh</td>
                    <td>31/10/2025 00:00 AM</td>
                    <td>
                        <span class="badge rounded-pill bg-danger">unpaid</span>
                    </td>
                    <td>
                        <button class="btn btn-outline-success bi bi-check2" data-bs-toggle="modal" data-bs-target="#confirmModal">
                        </button>
                    </td>
                </tr>
        </div>
        </tbody>
        </table>

    </div>
</div>


<!-- Dispense history-->
<div class="d-flex justify-content-between align-items-center mb-1">
    <div>
        <h5 class="fw-bold"> Recent sales</h5>
        <p class="text-muted"> View 5 last sales</p>
    </div>
</div>

<div class="card shadow-sm p-3">
    <div class="table-responsive">
        <table class="table table-hover table-borderless">
            <thead>
            <tr>
                <th>Order ID</th>
                <th>Dispenser</th>
                <th>Total</th>
                <th>Payment</th>
                <th>Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
            <tr>
                <td>
                    3
                </td>
                <td>
                    <span class="avatar"><i class="bi bi-person-circle"></i> Jeff</span>
                </td>
                <td>10,000 Tsh</td>
                <td>Cash</td>
                <td>4/11/2025 04:25 AM</td>
                <td>
                    <span class="badge rounded-pill bg-success">paid</span>
                </td>
                <td> <div ><button class="btn btn-sm btn-outline-secondary me-1"><i class="bi bi-eye"></i></button>
                        <button class="btn btn-sm btn-outline-secondary"><i class="bi bi-receipt"></i></button></div> </td>
            </tr>
            <tr>
                <td>
                    2
                </td>
                <td>
                    <span class="avatar"><i class="bi bi-person-circle"></i> Jeff</span>
                </td>
                <td>30,000 Tsh</td>
                <td>Mobile money</td>
                <td>4/11/2025 04:20 AM</td>
                <td>
                    <span class="badge rounded-pill bg-success">paid</span>
                </td>
                <td> <div ><button class="btn btn-sm btn-outline-secondary me-1" data-bs-toggle="modal" data-bs-target="#orderModal"><i class="bi bi-eye"></i></button>
                        <button class="btn btn-sm btn-outline-secondary"><i class="bi bi-receipt"></i></button></div> </td>
            </tr>
            <tr>
                <td>
                    1
                </td>
                <td>
                    <span class="avatar"><i class="bi bi-person-circle"></i> Jeff</span>
                </td>
                <td>20,000 Tsh</td>
                <td>Bank</td>
                <td>4/11/2025 04:10 AM</td>
                <td>
                    <span class="badge rounded-pill bg-success">paid</span>
                </td>
                <td> <div ><button class="btn btn-sm btn-outline-secondary me-1"><i class="bi bi-eye"></i></button>
                        <button class="btn btn-sm btn-outline-secondary"><i class="bi bi-receipt"></i></button></div> </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>


<!--confirm order modal-->
<div class="modal fade" id="confirmModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-3">
            <div class="confirm-header mb-3">
                <span>Confirm Order</span>
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

            <!-- Total -->
            <div class="d-flex justify-content-between fw-bold mb-3">
                <span>Total:</span>
                <span>TSh 20,000</span>
            </div>

            <!-- Payment Method -->
            <div class="mb-3">
                <label class="form-label small">Payment Method *</label>
                <select class="form-select">
                    <option>Cash</option>
                    <option>Mobile Money</option>
                    <option>Bank</option>
                </select>
            </div>

            <button class="btn btn-success mx-auto mb-2"><i class="bi bi-check2"></i> Complete Sale</button>
        </div>
    </div>
</div>
<!--end-->

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

</div><!--main contents end-->

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
