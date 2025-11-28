<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inventory</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet"  href="css/main.css">
    <style>

        .card{box-shadow:0 6px 18px rgba(0,0,0,.06)}
        .medicine-row{cursor:pointer}
        .badge-status{min-width:90px}
        .left-col{max-height:72vh; overflow:auto}
        .right-col{max-height:72vh; overflow:auto}
    </style>
</head>
<body>
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
                    <a class="nav-link text-light active fw-bold" href="inventory.html"><i class="bi bi-shop"></i> Inventory</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="users.html"><i class="bi bi-card-list"></i> Users</a>
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
<!--main content-->
<div class="container my-4">
    <h3 class="mb-3">Inventory Request </h3>
    <div class="row g-3">
        <!-- Left column: available medicines + requests table -->
        <div class="col-md-7">
            <div class="card p-3 left-col">
                <h5>Available Medicines</h5>
                <p class="text-muted small">Click a medicine to prefill the add-stock form on the right.</p>
                <input id="filterMeds" class="form-control mb-2" placeholder="Search medicines by name or code...">
                <div id="medList" class="list-group">
                    <!-- populated by JS -->
                </div>
            </div>
        </div>

        <!-- Right column: search + add form + cart -->
        <div class="col-md-5">
            <div class="card p-3 right-col">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Add to Stock (Request)</h5>
                    <small class="text-muted">Admin view</small>
                </div>

                <form id="addForm" class="needs-validation" novalidate>
                    <div class="mb-2">
                        <label class="form-label">Medicine</label>
                        <input id="medName" class="form-control" placeholder="Select a medicine from left or type name" required>
                        <div class="invalid-feedback">Select or type medicine name.</div>
                    </div>
                    <div class="row g-2">
                        <div class="col-6">
                            <label class="form-label">Quantity</label>
                            <input id="qty" type="number" min="1" class="form-control" required>
                            <div class="invalid-feedback">Enter quantity.</div>
                        </div>
                        <div class="col-6">
                            <label class="form-label">Cost price</label>
                            <input id="cost" type="number" min="0" step="0.01" class="form-control" required>
                            <div class="invalid-feedback">Enter cost.</div>
                        </div>
                        <div class="col-6">
                            <label class="form-label"> price</label>
                            <input id="price" type="number" min="0" step="0.01" class="form-control" required>
                            <div class="invalid-feedback">Price</div>
                        </div>

                        <div class="col-6">
                            <label class="form-label">Expiry date (optional)</label>
                            <input id="expiry" type="date" class="form-control">
                        </div>
                        <div class="d-grid gap-2">
                            <button id="addItemBtn" class="btn btn-primary" type="button">Add item to cart</button>
                        </div>
                </form>

                <hr>
                <h6 class="mb-2">Cart</h6>
                <div id="cartList" class="list-group mb-2">
                    <!-- cart items -->
                </div>

                <div class="d-flex gap-2">
                    <button id="sendBtn" class="btn btn-success flex-grow-1" type="button">Send to Pharmacist</button>
                    <button id="clearCartBtn" class="btn btn-outline-secondary" type="button">Clear</button>
                </div>
            </div>
        </div>
    </div>

    <hr>
    <h5 class="mt-3">Sent Requests</h5>
    <div class="table-responsive">
        <table class="table table-sm table-hover align-middle" id="requestsTable">
            <thead class="table-light small">
            <tr>
                <th>#</th>
                <th>Items</th>
                <th>Requested By</th>
                <th>Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <!-- JS -->
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Sample medicine data (would come from server in real app)
    const medicines = [
        {id: 'MD-001', name: 'Paracetamol 500mg Tablet'},
        {id: 'MD-002', name: 'Amoxicillin 500mg Capsule'},
        {id: 'MD-003', name: 'Cough Syrup 100ml'},
        {id: 'MD-004', name: 'Vitamin C 250mg'},
        {id: 'MD-005', name: 'Ibuprofen 200mg'}
    ];

    let cart = []; // items before sending
    let requests = loadFromStorage('requests') || []; // persisted requests

    // Helpers
    function formatDate(date){
        const d = new Date(date);
        return d.toLocaleString();
    }

    function saveToStorage(key, value){
        localStorage.setItem(key, JSON.stringify(value));
    }
    function loadFromStorage(key){
        const v = localStorage.getItem(key);
        return v ? JSON.parse(v) : null;
    }

    // Populate medicine list on left
    function renderMedList(filter=''){
        const container = document.getElementById('medList');
        container.innerHTML = '';
        const q = filter.trim().toLowerCase();
        medicines.filter(m => m.name.toLowerCase().includes(q) || m.id.toLowerCase().includes(q))
            .forEach(m =>{
                const el = document.createElement('button');
                el.type='button';
                el.className='list-group-item list-group-item-action medicine-row';
                el.innerHTML = `<div><strong>${m.name}</strong> <small class='text-muted'>${m.id}</small></div>`;
                el.onclick = ()=>{
                    document.getElementById('medName').value = m.name + ' ('+m.id+')';
                    document.getElementById('qty').focus();
                };
                container.appendChild(el);
            });
    }

    // Render cart
    function renderCart(){
        const list = document.getElementById('cartList');
        list.innerHTML = '';
        if(cart.length===0){
            list.innerHTML = '<div class="text-muted small">Cart is empty</div>'
            return;
        }
        cart.forEach((it, idx)=>{
            const el = document.createElement('div');
            el.className='list-group-item d-flex justify-content-between align-items-start';
            el.innerHTML = `
      <div>
        <div><strong>${it.name}</strong></div>
        <div class='small text-muted'>Qty: ${it.qty} • Cost: ${it.cost} ${it.expiry? '• Exp: '+it.expiry : ''}</div>
      </div>
      <div class='ms-2'>
        <button class='btn btn-sm btn-outline-danger' onclick='removeCartItem(${idx})'>Remove</button>
      </div>
    `;
            list.appendChild(el);
        });
    }

    window.removeCartItem = function(i){ cart.splice(i,1); renderCart(); }

    // Add item to cart
    document.getElementById('addItemBtn').addEventListener('click', ()=>{
        const form = document.getElementById('addForm');
        if(!form.checkValidity()){ form.classList.add('was-validated'); return; }
        const name = document.getElementById('medName').value.trim();
        const qty = Number(document.getElementById('qty').value);
        const cost = Number(document.getElementById('cost').value);
        const price = Number(document.getElementById('price').value);
        const expiry = document.getElementById('expiry').value || null;
        cart.push({name, qty, cost, expiry});
        document.getElementById('addForm').reset();
        form.classList.remove('was-validated');
        renderCart();
    });

    // Send to pharmacist
    document.getElementById('sendBtn').addEventListener('click', ()=>{
        if(cart.length===0){ alert('Cart is empty. Add items first.'); return; }
        const request = {
            id: 'REQ-'+Date.now(),
            items: cart.slice(),
            requestedBy: 'Admin',
            date: new Date().toISOString(),
            status: 'Pending'
        };
        requests.unshift(request);
        saveToStorage('requests', requests);
        cart = [];
        renderCart();
        renderRequestsTable();
        alert('Request sent to pharmacist.');
    });

    // Clear cart
    document.getElementById('clearCartBtn').addEventListener('click', ()=>{ if(confirm('Clear cart?')){ cart=[]; renderCart(); } });

    // Render requests table
    function renderRequestsTable(){
        const tbody = document.querySelector('#requestsTable tbody');
        tbody.innerHTML = '';
        requests.forEach((r, idx)=>{
            const tr = document.createElement('tr');
            const itemsText = r.items.map(i=>`${i.name} x${i.qty}`).join('<br>');
            tr.innerHTML = `
      <td>${idx+1}</td>
      <td style='min-width:220px'>${itemsText}</td>
      <td>${r.requestedBy}</td>
      <td>${formatDate(r.date)}</td>
      <td><span class='badge ${r.status==='Pending'? 'bg-warning text-dark':'bg-success'} badge-status'>${r.status}</span></td>
      <td>
        <button class='btn btn-sm btn-outline-primary me-1' onclick='toggleConfirm("${r.id}")'>Toggle Confirm</button>
        <button class='btn btn-sm btn-outline-danger' onclick='deleteRequest("${r.id}")'>Delete</button>
      </td>
    `;
            tbody.appendChild(tr);
        });
    }

    window.toggleConfirm = function(id){
        const r = requests.find(x=>x.id===id);
        if(!r) return;
        r.status = r.status==='Pending' ? 'Confirmed' : 'Pending';
        saveToStorage('requests', requests);
        renderRequestsTable();
    }
    window.deleteRequest = function(id){
        if(!confirm('Delete this request?')) return;
        requests = requests.filter(x=>x.id!==id);
        saveToStorage('requests', requests);
        renderRequestsTable();
    }

    // Search handlers
    document.getElementById('filterMeds').addEventListener('input', (e)=> renderMedList(e.target.value));
    document.getElementById('quickSearch').addEventListener('input', (e)=>{
        const q = e.target.value.trim().toLowerCase();
        // quick filter: if a unique medicine matches, autofill
        const matches = medicines.filter(m => m.name.toLowerCase().includes(q) || m.id.toLowerCase().includes(q));
        if(matches.length===1){
            document.getElementById('medName').value = matches[0].name + ' ('+matches[0].id+')';
            document.getElementById('qty').focus();
        }
    });

    // Init
    renderMedList();
    renderCart();
    renderRequestsTable();

</script>

</body>
</html>
