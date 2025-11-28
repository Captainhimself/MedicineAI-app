<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <style>
        .card { box-shadow:0 5px 15px rgba(0,0,0,0.08); }
        .report-box { transition:0.2s; }
        .report-box:hover { transform: translateY(-3px); }
        .table thead { background:#e9ecef; }
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
                    <a class="nav-link text-light " href="adminDashboard"><i class="bi bi-house"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="inventory.html"><i class="bi bi-shop"></i> Inventory</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="users.html"><i class="bi bi-card-list"></i> Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="branch.html"><i class="bi bi-house"></i> Branches</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light active  fw-bold" href="report.html"><i class="bi bi-bar-chart"></i> Reports</a>
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
    <h3 class="mb-4">Reports Dashboard</h3>

    <!-- Filters -->
    <div class="card p-3 mb-4">
        <h5 class="mb-3"><i class="bi bi-funnel"></i> Filter Reports</h5>
        <div class="row g-3">
            <div class="col-md-4">
                <label class="form-label">Select Branch</label>
                <select id="branchFilter" class="form-select">
                    <option value="all">All Branches</option>
                    <option value="main">Main Branch</option>
                    <option value="city">City Branch</option>
                    <option value="west">West-End Branch</option>
                </select>
            </div>
            <div class="col-md-4">
                <label class="form-label">From Date</label>
                <input type="date" id="fromDate" class="form-control">
            </div>
            <div class="col-md-4">
                <label class="form-label">To Date</label>
                <input type="date" id="toDate" class="form-control">
            </div>
            <div class="col-12 text-end">
                <button class="btn btn-primary mt-2" onclick="applyFilters()"><i class="bi bi-search"></i> Apply Filter</button>
            </div>
        </div>
    </div>

    <!-- Stats -->
    <div class="row g-3 mb-4">
        <div class="col-md-3">
            <div class="metric-card">
                <h4> 2,000,000 Tsh </h4>
                <p class="text-muted small"> <i class="bi bi-shop"></i> Total sales</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="metric-card">
                <h4> 500,000 Tsh</h4>
                <p class="text-muted small"> <i class="bi bi-calendar-x"></i>  Total cost</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="metric-card">
                <h4 > 1,500,000 Tsh</h4>
                <p class="text-muted small"> <i class="bi bi-capsule"> </i> Total profit </p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="metric-card">
                <h4 > 300,000 Tsh</h4>
                <p class="text-muted small"> <i class="bi bi-exclamation-triangle-fill"> </i> Total expenses </p>
            </div>
        </div>
    </div>
    <!--end-->

    <!--charts-->
    <div class="row justify-content-between align-items-center mb-3">
        <!--1st Pie chart-->
        <div class="col-md-3">
            <div class="card shadow-sm p-3">
                <h6 class="fw-bold mb-3">Sales Charts</h6>
                <canvas id="dispenseChart" height="200"></canvas>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm p-3">
                <h6 class="fw-bold mb-3">Costs charts</h6>
                <canvas id="MedicineChart" height="200"></canvas>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm p-3">
                <h6 class="fw-bold mb-3">Profit chart</h6>
                <canvas id="MedicineChart" height="200"></canvas>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm p-3">
                <h6 class="fw-bold mb-3">Expenses</h6>
                <canvas id="InventoryTrend" height="200"></canvas>
            </div>
        </div>
    </div>
    <!--end-->

    <!-- Report Table -->
    <div class="card p-3">
        <h5 class="mb-3"><i class="bi bi-file-earmark-text"></i> Branch Report</h5>
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Activity</th>
                    <th>Amount</th>
                    <th>Branch</th>
                    <th>Date</th>
                </tr>
                </thead>
                <tbody id="reportTableBody">
                <tr>
                    <td colspan="5" class="text-center text-muted">No data available</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- ChartJS Script -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Sales Chart
    const salesCtx = document.getElementById('salesChart');
    new Chart(salesCtx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{ label: 'Sales (TZS)', data: [500000, 700000, 650000, 900000, 1100000, 1400000], borderWidth: 2 }]
        },
        options: { responsive: true }
    });

    // Inventory Chart
    const inventoryCtx = document.getElementById('inventoryChart');
    new Chart(inventoryCtx, {
        type: 'bar',
        data: {
            labels: ['Panadol', 'Amoxil', 'ORS', 'Cetrizine', 'Azithromycin'],
            datasets: [{ label: 'Items Dispensed', data: [120, 90, 60, 150, 80], borderWidth: 2 }]
        },
        options: { responsive: true }
    });

    // Branch Comparison Chart
    const branchCtx = document.getElementById('branchChart');
    new Chart(branchCtx, {
        type: 'bar',
        data: {
            labels: ['Main Branch', 'Mbagala', 'Tandika', 'Ubungo'],
            datasets: [{ label: 'Monthly Sales (TZS)', data: [1400000, 900000, 750000, 1100000], borderWidth: 2 }]
        },
        options: { responsive: true }
    });
</script>

<script>
    function applyFilters() {
        const branch = document.getElementById('branchFilter').value;
        const fromDate = document.getElementById('fromDate').value;
        const toDate = document.getElementById('toDate').value;

        alert(`Filtering reports for:\nBranch: ${branch}\nFrom: ${fromDate}\nTo: ${toDate}`);
    }
</script>

</body>
</html>

