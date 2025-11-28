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
