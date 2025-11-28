<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dispensing</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet"  href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/chats.css">
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
                    <a class="nav-link text-light active fw-bold" href="dispenseDash.html"><i class="bi bi-shop"></i> Dispense</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="inventory.html"><i class="bi bi-card-list"></i> Stock</a>
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
            <span class="badge rounded-pill text-bg-dark me-3">Pharmacist</span>
            <a class="nav-link text-light" href="logout.php">
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
            <h4 class="fw-bold">Dispense Report</h4>
            <p class="text-muted"> Browse history and Pharmacy activities</p>
        </div>
        <a href="dispense.html" class="btn btn-success"><i class="bi bi-cart"></i> Dispense</a>
    </div>
    <div class="row  align-items-center justify-content-center mb-4">
        <!-- metrics-->
        <div class="row g-3 mb-4 justify-content-between">
            <div class="col-md-3">
                <div class="metric-card">
                    <h4> 20 </h4>
                    <p class="text-muted small"> <i class="bi bi-capsule"></i> Total Dispense</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="metric-card">
                    <h4 > 100,000 Tsh</h4>
                    <p class="text-muted small"> <i class="bi bi-cash-coin"></i>  Total Amount</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="metric-card">
                    <h4 class="text-danger"> 2</h4>
                    <p class="text-muted small"> <i class="bi bi-clock"> </i> Total Pending </p>
                </div>
            </div>
            <!--metrics end-->

            <!-- Sales -->
            <div class="card shadow-sm p-3 mt-3">
                <h5 class="fw-bold mb-3">Recent Dispense
                    <span class="badge rounded-pill bg-primary"></span>
                </h5>

                <div class="user-item d-flex justify-content-between align-items-center">
                    <div>
                        <p class="mb-1 fw-semibold">#Order ID: 1</p>
                        <small class="text-muted bi bi-person-circle"> Dispensed by: Jeff</small><br>
                        <small class="text-muted bi bi-bag"> Quantity: 2</small><br>
                        <small class="text-muted bi bi-clock"> Date: 06/11/2025 12:23 PM</small>
                    </div>
                    <div class="text-end">
                        <h6 class="badge rounded-pill bg-success"> Mobile Money
                        </h6>
                        <h6 class="fw-bold me-2"> 20,000 Tsh</h6>
                        <button class="btn btn-sm btn-outline-secondary me-1" data-bs-toggle="modal" data-bs-target="#orderModal"><i class="bi bi-eye"></i> </button>

                    </div>
                </div>

            </div>
            <!-- Chat Popup -->
            <div id="aiAssistant" class="card shadow-lg">
                <div class="ai-header">
                    <span>Pharmacy AI Assistant</span>
                    <button id="closeAI"><i class="bi bi-x-lg"></i></button>
                </div>

                <div class="card-body" id="chatBody">
                    <div class="text-center text-muted small mb-3">
                        👋 Habari! Niko hapa kukusaidia kutambua dawa sahihi kulingana na dalili za mgonjwa.
                    </div>
                </div>

                <div class="ai-footer">
                    <form id="aiForm" class="d-flex">
                        <input type="text" id="userMessage" class="form-control me-2" placeholder="Mfano: mgonjwa ana homa na kikohozi..." required>
                        <button class="btn btn-success" type="submit"><i class="bi bi-send-fill"></i></button>
                    </form>
                </div>
            </div>

            <!-- Floating Button -->
            <button id="toggleAI">
                <i class="bi bi-chat-dots-fill"></i>
            </button>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/chatAI.js"></script>


</body>
</html>
