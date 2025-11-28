<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pharmacy</title>
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
                    <a class="nav-link active text-light fw-bold" href="pharmDashboard"><i class="bi bi-house"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="dispenseDash.html"><i class="bi bi-shop"></i> Dispense</a>
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
<!--modals-->
<!-- Edit Stock Modal -->
<div class="modal fade" id="editStockModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg rounded-3">
            <form method="POST" action="update_stock.php">
                <input type="hidden" name="action" value="edit">
                <input type="hidden" name="branch_id" id="editBranchId">
                <input type="hidden" name="stock_id" id="editStockId">

                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title"><i class="bi bi-pencil-square me-2"></i>Edit Stock</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body bg-light">
                    <div class="mb-3">
                        <label for="editMedicineName" class="form-label">Medicine Name</label>
                        <input type="text" class="form-control shadow-sm" name="medicine_name" id="editMedicineName" required readonly>
                    </div>

                    <div class="mb-3">
                        <label for="editQty" class="form-label">Quantity</label>
                        <input type="number" class="form-control shadow-sm" name="quantity" id="editQty" required min="1">
                    </div>

                    <div class="mb-3">
                        <label for="editPrice" class="form-label">Price</label>
                        <input type="number" class="form-control shadow-sm" name="price" id="editPrice" required step="0.01" min="0">
                    </div>

                    <div class="mb-3">
                        <label for="editExpiry" class="form-label">Expiry Date</label>
                        <input type="date" class="form-control shadow-sm" name="expiry_date" id="editExpiry" required>
                    </div>
                </div>

                <div class="modal-footer bg-white">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        <i class="bi bi-x-circle me-1"></i>Cancel
                    </button>
                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-check-circle me-1"></i>Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>



<!-- Delete Stock Modal -->
<div class="modal fade" id="deleteStockModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg rounded-3">
            <form method="POST" action="delete_stock.php">
                <input type="hidden" name="action" value="delete">
                <input type="hidden" name="stock_id" id="deleteStockId">

                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title"><i class="bi bi-trash-fill me-2"></i>Delete Stock</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body bg-light">
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <i class="bi bi-exclamation-triangle-fill me-2 fs-5"></i>
                        <div>
                            Are you sure you want to delete this medicine?
                            <br><strong id="deleteMedicineName" class="text-dark"></strong>
                        </div>
                    </div>
                    <p class="text-muted small mb-0">This action cannot be undone. Please confirm before proceeding.</p>
                </div>

                <div class="modal-footer bg-white">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        <i class="bi bi-x-circle me-1"></i>Cancel
                    </button>
                    <button type="submit" class="btn btn-danger">
                        <i class="bi bi-trash3 me-1"></i>Delete
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- JavaScript for Delete Modal -->


<!--end-->

<div class="container my-4">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold">Welcome Back!</h3>
            <p class="text-muted bi bi-geo-alt-fill"> Majula Pharmacy-Kigamboni</p>
        </div>
    </div>

    <!-- Metrics Row -->
    <div class="row g-3 mb-4">
        <div class="col-md-3">
            <div class="metric-card">
                <h4> 200 </h4>
                <p class="text-muted small"> <i class="bi bi-shop"></i> Total Dispense</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="metric-card">
                <h4 class="text-danger"> 1</h4>
                <p class="text-muted small"> <i class="bi bi-calendar-x"></i>  Total Unpaid</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="metric-card">
                <h4 > 500 </h4>
                <p class="text-muted small"> <i class="bi bi-capsule"> </i> Total Medicines </p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="metric-card">
                <h4 class="text-danger"> 2</h4>
                <p class="text-muted small"> <i class="bi bi-exclamation-triangle-fill"> </i> Expiring Medicines </p>
            </div>
        </div>
    </div>

    <!-- Dispense history-->
    <div class="d-flex justify-content-between align-items-center mb-2">
        <div>
            <h5 class="fw-bold"> Available Medicine</h5>
            <p class="text-muted"> View and manage available medicine</p>
        </div>
        <a href="dispense.html" class="btn btn-success"> <i class="bi bi=plud"></i> Dispense</a>
    </div>

    <div class="d-flex mb-3">
        <input type="text" id="searchInput" class="form-control me-2" placeholder="Search medicine by name..." >
    </div>

    <div class="card shadow-sm p-3">
        <div id="medicineTable">
            <div class="table-responsive">
                <table class="table table-hover table-borderless">
                    <thead>
                    <tr>
                        <th>Medicine</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Expire Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody class="table-group-divider">
                    <tr>
                        <td>
                            Paracetamol 100mg
                        </td>
                        <td>2,000 Tsh</td>
                        <td>10</td>
                        <td>10/12/2025</td>
                        <td>
                            <span class="badge rounded-pill bg-danger">Expiring Soon</span>
                        </td>
                        <td> <a class="btn btn-sm btn-outline-success me-1" href="inventory.html"> <i class="bi bi-eye"></i> </a>
                            <button class="btn btn-sm btn-outline-secondary me-1" ><i class="bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#editStockModal"></i> </button>
                            <button class="btn btn-sm btn-outline-danger me-1" ><i class="bi bi-trash-fill" data-bs-toggle="modal" data-bs-target="#deleteStockModal"></i> </button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Malafin 100mg
                        </td>
                        <td>1,500 Tsh</td>
                        <td>3</td>
                        <td>10/2/2025</td>
                        <td>
                            <span class="badge rounded-pill bg-danger">Expired</span>
                        </td>
                        <td><a class="btn btn-sm btn-outline-success me-1" href="inventory.html"> <i class="bi bi-eye"></i> </a>
                            <button class="btn btn-sm btn-outline-secondary me-1" ><i class="bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#editStockModal"></i> </button>
                            <button class="btn btn-sm btn-outline-danger me-1" data-bs-toggle="modal" data-bs-target="#deleteStockModal"><i class="bi bi-trash-fill" ></i> </button></td>
                    </tr>
                    <tr>
                        <td>
                            Flucunazol 150mg
                        </td>
                        <td>3,000 Tsh</td>
                        <td>5</td>
                        <td>10/1/2026</td>
                        <td>
                            <span class="badge rounded-pill bg-success">Intime</span>
                        </td>
                        <td><a class="btn btn-sm btn-outline-success me-1" href="inventory.html"> <i class="bi bi-eye"></i> </a>
                            <button class="btn btn-sm btn-outline-secondary me-1" ><i class="bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#editStockModal"></i> </button>
                            <button class="btn btn-sm btn-outline-danger me-1" ><i class="bi bi-trash-fill" data-bs-toggle="modal" data-bs-target="#deleteStockModal"></i> </button></td>
                    </tr>
                    </tbody>
                </table>
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
    <!-- chat end-->

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
</script>
<script src="js/search.js"></script>
<script src="js/chatAI.js"></script>
<script src="js/modal.js"></script>

</body>
</html>
