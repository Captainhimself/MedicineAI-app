<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reports</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet"  href="css/main.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                    <a class="nav-link text-light " href="inventory.html"><i class="bi bi-card-list"></i> Stock</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light active fw-bold" href="reports.html"><i class="bi bi-bar-chart"></i> Reports</a>
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
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold">Reports & Analytics</h3>
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
        <!--end-->
    </div>

    <!--charts-->
    <div class="row justify-content-between align-items-center mb-3">
        <!--1st Pie chart-->
        <div class="col-md-3">
            <div class="card shadow-sm p-3">
                <h6 class="fw-bold mb-3">Dispense Trends</h6>
                <canvas id="dispenseChart" height="200"></canvas>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm p-3">
                <h6 class="fw-bold mb-3">Medicines Trends</h6>
                <canvas id="MedicineChart" height="200"></canvas>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm p-3">
                <h6 class="fw-bold mb-3">Inventory</h6>
                <canvas id="InventoryTrend" height="200"></canvas>
            </div>
        </div>
    </div>

    <!--dispense history-->
    <div class="card mb-3 mt-3">
        <div class="card-title mt-3 mx-auto"> <h5>Dispense History</h5> </div>
        <div class="card shadow-sm p-3">
            <div class="table-responsive">
                <table class="table table-hover table-borderless">
                    <thead>
                    <tr>
                        <th>Medicine</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody class="table-group-divider">
                    <tr>
                        <td>
                            Paracetamol 100mg
                        </td>
                        <td>2,000 Tsh</td>
                        <td>10</td>
                        <td>20,000 Tsh</td>
                        <td>
                            <span class="badge rounded-pill bg-danger">unpaid</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Malafin
                        </td>
                        <td>1,500 Tsh</td>
                        <td>3</td>
                        <td>4,500 Tsh</td>
                        <td>
                            <span class="badge rounded-pill bg-success">paid</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Flucunazol 150mg
                        </td>
                        <td>3,000 Tsh</td>
                        <td>5</td>
                        <td>15,000 Tsh</td>
                        <td>
                            <span class="badge rounded-pill bg-success">paid</span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <!--inventory history -->
    <div class="card">
        <div class="card-title mt-3 mx-auto"> <h5>Inventory History</h5> </div>
        <div class="card shadow-sm p-3">
            <div class="table-responsive">
                <table class="table table-hover table-borderless">
                    <thead>
                    <tr>
                        <th>Medicine</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody class="table-group-divider">
                    <tr>
                        <td>
                            Paracetamol 100mg
                        </td>
                        <td>2,000 Tsh</td>
                        <td>10</td>
                        <td>20,000 Tsh</td>
                        <td>
                            <span class="badge rounded-pill bg-danger">unpaid</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Malafin
                        </td>
                        <td>1,500 Tsh</td>
                        <td>3</td>
                        <td>4,500 Tsh</td>
                        <td>
                            <span class="badge rounded-pill bg-success">paid</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Flucunazol 150mg
                        </td>
                        <td>3,000 Tsh</td>
                        <td>5</td>
                        <td>15,000 Tsh</td>
                        <td>
                            <span class="badge rounded-pill bg-success">paid</span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>


    <!--end -->
</div>
<script src="js/charts.js"></script>
</body>
</html>
