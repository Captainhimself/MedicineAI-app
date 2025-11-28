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