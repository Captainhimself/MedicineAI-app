<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <style>
        body {
            background: #f5f7fa;
            font-family: "Segoe UI", sans-serif;
        }
        .page-title {
            font-size: 26px;
            font-weight: 600;
        }
        .user-card {
            border-radius: 16px;
            transition: 0.2s ease;
        }
        .user-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
        }
        .avatar {
            width: 65px;
            height: 65px;
            border-radius: 50%;
            object-fit: cover;
        }
        .add-btn {
            border-radius: 12px !important;
        }
    </style>
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
                    <a class="nav-link  text-light " href="adminDashboard"><i class="bi bi-house"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="inventory.html"><i class="bi bi-shop"></i> Inventory</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light active fw-bold" href="users.html"><i class="bi bi-card-list"></i> Users</a>
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


<div class="container py-4">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="page-title"><i class="bi bi-people"></i> User Management</h2>
        <button class="btn btn-primary add-btn d-flex align-items-center" data-bs-toggle = "modal" data-bs-target="#addUserModal">
            <i class="bi bi-person-plus me-2"></i> Add User
        </button>
    </div>

    <!-- Metrics Row -->
    <div class="row g-3 mb-4">
        <div class="col-md-3">
            <div class="metric-card">
                <h4> 3 </h4>
                <p class="text-muted small"> <i class="bi bi-shop"></i> Total users</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="metric-card">
                <h4> 1</h4>
                <p class="text-muted small"> <i class="bi bi-calendar-x"></i>  Cashiers</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="metric-card">
                <h4 > 1</h4>
                <p class="text-muted small"> <i class="bi bi-capsule"> </i> Administrators </p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="metric-card">
                <h4 > 1</h4>
                <p class="text-muted small"> <i class="bi bi-exclamation-triangle-fill"> </i> Pharmacist </p>
            </div>
        </div>
    </div>
    <!--end-->

    <!-- SEARCH BAR -->
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body p-3">
            <div class="input-group">
                <span class="input-group-text bg-white"><i class="bi bi-search"></i></span>
                <input type="text" class="form-control" placeholder="Search users..." />
            </div>
        </div>
    </div>

    <!-- USER LIST WITH STATUS -->
    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <h5 class="mb-3 fw-semibold">Users List</h5>

            <table class="table align-middle">
                <thead>
                <tr>
                    <th>User</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="d-flex align-items-center">
                        <img  src="Assets/user.png" class="avatar me-3 bi bi-person" />
                        <div>
                            <strong>John Doe</strong><br>
                            <small class="text-muted">john.doe@mail.com</small>
                        </div>
                    </td>
                    <td>Administrator</td>
                    <td><span class="badge bg-success">Online</span></td>
                    <td>
                        <button class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></button>
                        <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>

                <tr>
                    <td class="d-flex align-items-center">
                        <img src="Assets/user.png" class="avatar me-3" />
                        <div>
                            <strong>Sarah Wilson</strong><br>
                            <small class="text-muted">sarah.pharm@mail.com</small>
                        </div>
                    </td>
                    <td>Pharmacist</td>
                    <td><span class="badge bg-secondary">Offline</span></td>
                    <td>
                        <button class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></button>
                        <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>

                <tr>
                    <td class="d-flex align-items-center">
                        <img src="Assets/user.png" class="avatar me-3" />
                        <div>
                            <strong>Michael Kim</strong><br>
                            <small class="text-muted">michael.cashier@mail.com</small>
                        </div>
                    </td>
                    <td>Cashier</td>
                    <td><span class="badge bg-success">Online</span></td>
                    <td>
                        <button class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></button>
                        <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>


</div>
</div>

<!-- Add User Modal -->
<div class="modal fade" id="addUserModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title">Add New User</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="addUserForm">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="JohnDoe" />
                        <label class="form-label">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" />
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="+255 698 700 700" />
                        <label for="floatingInput">Phone Number</label>
                    </div>
                    <div class="form-floating mb-2">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected>Role</option>
                            <option value="1">Superuser</option>
                            <option value="2">Cashier</option>
                            <option value="3">Admin</option>
                        </select>
                        <label for="floatingSelect">Select system role</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" />
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-success">Save User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

