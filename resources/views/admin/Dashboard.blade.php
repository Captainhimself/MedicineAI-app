<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home-Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
                    <a class="nav-link active text-light fw-bold" href="adminDashboard"><i class="bi bi-house"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="inventory.html"><i class="bi bi-shop"></i> Inventory</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{route('user')}}"><i class="bi bi-card-list"></i> Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="branch.html"><i class="bi bi-house"></i> Branches</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="reports.html"><i class="bi bi-bar-chart"></i> Reports</a>
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
<!--modals-->
<!-- View Modal -->
<div class="modal fade" id="viewModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg rounded-3">

            <div class="modal-header bg-success text-white">
                <h5 class="modal-title">
                    <i class="bi bi-person-circle me-2"></i>User Details
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body text-center bg-light">

                <!-- User Name + Role Badge -->
                <h5 class="fw-bold mb-1">
                    Captainlnd
                    <span class="badge bg-success float-end" style="font-size: 0.75rem;">
            superuser
          </span>
                </h5>

                <hr>

                <!-- User Details -->
                <div class="mt-3">
                    <p class="mb-2">
                        <i class="bi bi-envelope me-1 text-success"></i>
                        <strong>Email:</strong> captain@mail.com
                    </p>

                    <p class="mb-2">
                        <i class="bi bi-telephone me-1 text-success"></i>
                        <strong>Phone:</strong> 0697707070
                    </p>

                    <p class="mb-2">
                        <i class="bi bi-diagram-3-fill me-1 text-success"></i>
                        <strong>Branch:</strong> Tegeta
                    </p>
                </div>

            </div>

            <div class="modal-footer bg-white">
                <button class="btn btn-success w-100" data-bs-dismiss="modal">
                    <i class="bi bi-check-circle"></i> Close
                </button>
            </div>

        </div>
    </div>
</div>

<!--end-->
<!---->
<!-- Edit User Modal -->
<div class="modal fade" id="editUserModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 shadow-lg rounded-3">

            <div class="modal-header bg-success text-white">
                <h5 class="modal-title">
                    <i class="bi bi-pencil-square me-2"></i>Edit User Details
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <form method="POST" action="update_user.php">
                <input type="hidden" name="user_id" id="editUserId">

                <div class="modal-body bg-light">

                    <div class="row g-3">

                        <!-- Full Name -->
                        <div class="col-md-6">
                            <label class="form-label">Full Name</label>
                            <div class="input-group">
                <span class="input-group-text bg-success text-white">
                  <i class="bi bi-person"></i>
                </span>
                                <input type="text" id="editName" name="name" class="form-control" required>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="col-md-6">
                            <label class="form-label">Email</label>
                            <div class="input-group">
                <span class="input-group-text bg-success text-white">
                  <i class="bi bi-envelope"></i>
                </span>
                                <input type="email" id="editEmail" name="email" class="form-control" required>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="col-md-6">
                            <label class="form-label">Phone Number</label>
                            <div class="input-group">
                <span class="input-group-text bg-success text-white">
                  <i class="bi bi-telephone"></i>
                </span>
                                <input type="text" id="editPhone" name="phone" class="form-control" required>
                            </div>
                        </div>

                        <!-- Role -->
                        <div class="col-md-6">
                            <label class="form-label">Role</label>
                            <div class="input-group">
                <span class="input-group-text bg-success text-white">
                  <i class="bi bi-person-badge"></i>
                </span>
                                <select id="editRole" name="role" class="form-select" required>
                                    <option value="admin">Admin</option>
                                    <option value="pharmacist">Pharmacist</option>
                                    <option value="superuser">Superuser</option>
                                    <option value="cashier">Cashier</option>
                                </select>
                            </div>
                        </div>

                        <!-- Branch -->
                        <div class="col-md-12">
                            <label class="form-label">Branch</label>
                            <div class="input-group">
                <span class="input-group-text bg-success text-white">
                  <i class="bi bi-diagram-3"></i>
                </span>
                                <select id="editBranch" name="branch" class="form-select" required>
                                    <option value="Tegeta">Tegeta</option>
                                    <option value="Mwenge">Mwenge</option>
                                    <option value="Kariakoo">Kariakoo</option>
                                    <option value="Mbezi">Mbezi</option>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="modal-footer bg-white">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        <i class="bi bi-x-circle me-1"></i>Cancel
                    </button>
                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-save2 me-1"></i>Update User
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>

<!---->

<!--main content-->
<div class="container my-4">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold">Welcome Back!</h3>
            <p class="text-muted bi bi-arrow-repeat"> Pharmacy management</p>
        </div>
    </div>

    <!-- Metrics Row -->
    <div class="row g-3 mb-4">
        <div class="col-md-3">
            <div class="metric-card">
                <h4>{{ number_format($totalSales) }} Tsh</h4>
                <p class="text-muted small"> <i class="bi bi-shop"></i> Total sales</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="metric-card">
                <h4>{{ number_format($totalCost) }} Tsh</h4>
                <p class="text-muted small"> <i class="bi bi-calendar-x"></i>  Total cost</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="metric-card">
                <h4>{{ number_format($totalProfit) }} Tsh</h4>
                <p class="text-muted small"> <i class="bi bi-capsule"> </i> Total profit </p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="metric-card">
                <h4 > {{number_format($totalExpenses)}}</h4>
                <p class="text-muted small"> <i class="bi bi-exclamation-triangle-fill"> </i> Total expenses </p>
            </div>
        </div>
    </div>
    <!--end-->
    <!--user table-->
    <div class="d-flex align-items-center">
        <div>
            <h4 class="fw-bold">Users</h4>
            <p class="text-muted"> Quick manage user</p>
        </div>
    </div>
    <div>
        <!--table-->
        <div class="card shadow-sm p-3">
            <div id="medicineTable">
                <div class="table-responsive">
                    <table class="table table-hover table-borderless">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Branch</th>
                            <th>Role</th>
                            <th>Contact </th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody class="table-group-divider">

                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->branch ?? '—' }}</td>
                                <td>{{ ucfirst($user->role) }}</td>
                                <td>{{ $user->phone ?? 'N/A' }}</td>

                                <td>
                                    @if ($user->is_online == true)
                                        <span class="badge rounded-pill bg-success">online</span>
                                    @else
                                        <span class="badge rounded-pill bg-danger">offline</span>
                                    @endif
                                </td>

                                <td>
                                    <button class="btn btn-sm btn-outline-secondary me-1"
                                            data-bs-toggle="modal"
                                            data-bs-target="#viewModal">
                                        <i class="bi bi-eye"></i>
                                    </button>

                                    <button class="btn btn-sm btn-outline-secondary me-1"
                                            data-bs-toggle="modal"
                                            data-bs-target="#editUserModal">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>

                                    <button class="btn btn-sm btn-outline-danger me-1"
                                            data-bs-toggle="modal"
                                            data-bs-target="#deleteStockModal">
                                        <i class="bi bi-trash-fill"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--end-->

    </div>
    <!--end-->
    <!----><!----><!----><!----><!---->

</div>
<!--end-->
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"> </script>
<script src="js/modal.js"></script>



</body>
</html>
