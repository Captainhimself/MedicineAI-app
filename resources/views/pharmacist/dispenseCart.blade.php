<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dispense Medicine</title>
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
                    <a class="nav-link text-light " href="pharmDashboard.html"><i class="bi bi-house"></i> Dashboard</a>
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
            <span class="badge text-bg-dark me-3">Pharmacist</span>
            <a class="nav-link text-light" href="logout.php">
                <i class="bi bi-box-arrow-right"></i> Logout
            </a>
        </div>
    </div>
</nav>

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

<!-- Content -->
<div class="container-fluid my-4">
    <div class="row">
        <!-- Left: Products -->
        <div class="col-md-8">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="fw-bold mb-0">New Dispense</h5>
            </div>

            <!-- Search & Category -->
            <div class="d-flex mb-3">
                <input type="text" class="form-control me-2" placeholder="Search medicine...">
            </div>

            <!-- Available Products -->
            <h6 class="fw-bold mb-3">Available Medicine</h6>
            <div class="product-card d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="mb-1">Paracetamol 100mg</h6>
                    <small class="text-muted bi bi-capsule"> Brand Name: Panadol</small><br>
                    <small class="text-muted bi bi-cash"> Price: 1,000 Tsh</small>
                </div>
                <div class="text-end">
                    <span class="badge bg-success mb-2">10 pcs</span>
                    <h6 class="fw-bold">TSh 1,000</h6>
                    <div class="quantity-control d-flex align-items-center justify-content-end">
                        <button class="btn btn-sm btn-outline-success me-2"><i class="bi bi-dash"></i></button>
                        <span class="fw-bold">1</span>
                        <button class="btn btn-sm btn-outline-success ms-2"><i class="bi bi-plus"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right: Cart -->
        <div class="col-md-4">
            <div class="card shadow-sm p-3">
                <h6 class="fw-bold mb-3"><i class="bi bi-cart"></i> Cart (1)</h6>

                <!-- Cart Item -->
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <div>
                        <p class="mb-0 fw-semibold"> Paracetamol 100m</p>
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
                <button class="btn btn-success w-100 mb-2"><i class="bi bi-receipt"></i> Send To Cashier</button>
                <button class="btn btn-outline-secondary w-100">Clear Cart</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/chatAI.js"></script>

</body>
</html>
