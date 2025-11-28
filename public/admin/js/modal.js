function openEditModal(stock) {
    document.getElementById('editStockId').value = stock.id;
    document.getElementById('editBranchId').value = stock.branch_id;
    document.getElementById('editMedicineName').value = stock.medicine_name;
    document.getElementById('editQty').value = stock.quantity;
    document.getElementById('editPrice').value = stock.price;
    document.getElementById('editExpiry').value = stock.expiry_date;

    // Show modal
    const modal = new bootstrap.Modal(document.getElementById('editStockModal'));
    modal.show();
}

function openDeleteModal(stock) {
    document.getElementById('deleteStockId').value = stock.id;
    document.getElementById('deleteMedicineName').textContent = stock.medicine_name;

    const modal = new bootstrap.Modal(document.getElementById('deleteStockModal'));
    modal.show();
}
function openEditUserModal(user) {
    document.getElementById("editUserId").value = user.id;
    document.getElementById("editName").value = user.name;
    document.getElementById("editEmail").value = user.email;
    document.getElementById("editPhone").value = user.phone;
    document.getElementById("editRole").value = user.role;
    document.getElementById("editBranch").value = user.branch;

    new bootstrap.Modal(document.getElementById("editUserModal")).show();
}
