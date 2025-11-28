<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Branches</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .metric-card { background:#f8f9fa; border-radius:12px; padding:20px; text-align:center; transition:0.3s; }
        .metric-card:hover { background:#fff; box-shadow:0 6px 18px rgba(0,0,0,0.1); transform:translateY(-3px); }
        .branch-item { border:1px solid #e9ecef; border-radius:12px; padding:15px; margin-bottom:10px; transition:0.3s; }
        .branch-item:hover { box-shadow:0 4px 12px rgba(0,0,0,0.08); }
    </style>
</head>
<body class="bg-success-subtle">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-success text-white shadow-sm">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand text-fold text-white" href="adminDashboard.html">MedicineAI</a>
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
                    <a class="nav-link text-light " href="adminDashboard.html"><i class="bi bi-house"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="inventory.html"><i class="bi bi-shop"></i> Inventory</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="users.html"><i class="bi bi-card-list"></i> Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light active  fw-bold" href="branch.html"><i class="bi bi-house"></i> Branches</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="report.html"><i class="bi bi-bar-chart"></i> Reports</a>
                </li>
            </ul>

            <!-- Right section -->
            <a class="nav-link position-relative me-3" href="#"><i class="bi bi-bell"></i>
                <span class="position-absolute top-2 start-100 translate-middle badge rounded-pill bg-danger">1</span>
            </a>

            <span class="navbar-text me-2 text-light"><i class="bi bi-person-circle"></i> Captainlnd</span>
            <span class="badge text-bg-danger me-3">superuser</span>
            <a class="nav-link text-light" href="logout.php">
                <i class="bi bi-box-arrow-right"></i> Logout
            </a>
        </div>
    </div>
</nav>
<!--end-->
<div class="container my-4">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold">Branches</h3>
            <p class="text-muted">Manage your branches</p>
        </div>
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addBranchModal">
            <i class="bi bi-plus-circle"></i> Add Location
        </button>
    </div>
    <!-- Metrics -->
    <div class="row g-3 mb-4">
        <div class="col-md-4">
            <div class="metric-card">
                <h4>1</h4>
                <p class="text-muted small">Total Branches</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="metric-card">
                <h4>2,000,000 TSH</h4>
                <p class="text-muted small">Total Sales</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="metric-card">
                <h4>400,000 TSH</h4>
                <p class="text-muted small">Total Cost</p>
            </div>
        </div>
    </div>

    <!--end-->
    <!--branch-->
    <!-- Branch List -->
    <div class="card shadow-sm p-3">
        <h5 class="fw-bold mb-3">Available Branches</h5>
        <p class="text-muted small">Your active locations</p>

        <div class="branch-item d-flex justify-content-between align-items-center">
            <div>
                <p class="mb-1 fw-semibold"> Majula Pharmacy</p>
                <small class="text-muted"><i class="bi bi-people"></i> Total staff: 2</small><br>
                <small class="text-muted"><i class="bi bi-geo-alt"></i> Location: kigamboni</small><br>
            </div>
            <div class="text-end mt-2">
                <button class="btn btn-sm btn-outline-primary"
                        data-bs-toggle="modal"
                        data-bs-target="#editBranchModal">
                    <i class="bi bi-pencil" ></i>
                </button>
                <button class="btn btn-sm btn-outline-danger"
                        data-bs-toggle="modal"
                        data-bs-target="#deleteBranchModal"
                >
                    <i class="bi bi-trash"></i>
                </button>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <!--end-->
</div>
<!--modals-->

<!-- Add Branch Modal -->
<div class="modal fade" id="addBranchModal" tabindex="-1" aria-labelledby="addBranchModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <form method="POST" action="">
                <div class="modal-header bg-success">
                    <h5 class="modal-title fw-bold" id="addBranchModalLabel"> <i class="bi bi-geo-alt"></i> Add New Branch</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-success-subtle">

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="branch_name" required>
                        <label for="floatingInput" class="form-label">Branch Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="location" required>
                        <label for="location" class="form-label">Location</label>
                    </div>
                    <!-- selection -->
                    <div class="form-floating mb-2">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected>cashier</option>
                            <option value="1">mohamed</option>
                        </select>
                        <label for="floatingSelect">Select Cashier</label>
                    </div>

                    <div class="form-floating mb-3 mt-3">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected>Pharmacist</option>
                            <option value="1">Jeff</option>
                        </select>
                        <label for="floatingSelect">Select Pharmacist</label>
                    </div>
                    <!--end-->

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">Save Branch</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--edit branch-->
<div class="modal fade" id="editBranchModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="">
                <input type="hidden" name="action" value="edit">
                <input type="hidden" name="branch_id" id="editBranchId">

                <div class="modal-header">
                    <h5 class="modal-title">Edit Branch</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="branch_name" id="form-floating" required>
                        <label for="editBranchName" class="form-label">Branch Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="location" id="form-floating" required>
                        <label for="editLocation" class="form-label">Location</label>
                    </div>
                    <!-- selection -->
                    <div class="form-floating mb-2">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected>cashier</option>
                            <option value="1">mohamed</option>
                        </select>
                        <label for="floatingSelect">Select Cashier</label>
                    </div>

                    <div class="form-floating mb-3 mt-3">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected>Pharmacist</option>
                            <option value="1">Jeff</option>
                        </select>
                        <label for="floatingSelect">Select Pharmacist</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--delete branch-->
<div class="modal fade" id="deleteBranchModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="">
                <input type="hidden" name="action" value="delete">
                <input type="hidden" name="branch_id" id="deleteBranchId">

                <div class="modal-header">
                    <h5 class="modal-title">Delete Branch</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete <strong id="deleteBranchName"></strong>?</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--end-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Edit modal
    var editModal = document.getElementById('editBranchModal');
    editModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        document.getElementById('editBranchId').value = button.getAttribute('data-id');
        document.getElementById('editBranchName').value = button.getAttribute('data-name');
        document.getElementById('editLocation').value = button.getAttribute('data-location');
    });

    // Delete modal
    var deleteModal = document.getElementById('deleteBranchModal');
    deleteModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        document.getElementById('deleteBranchId').value = button.getAttribute('data-id');
        document.getElementById('deleteBranchName').innerText = button.getAttribute('data-name');
    });
</script>

</body>
</html>
