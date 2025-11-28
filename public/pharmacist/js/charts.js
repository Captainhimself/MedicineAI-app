// Sales Trend
    new Chart(document.getElementById('dispenseChart'), {
      type: 'line',
      data: {
        labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
        datasets: [{
          label: 'Sales (TSh)',
          data: [18, 15, 10, 19, 200, 25],
          borderColor: '#0d6efd',
          backgroundColor: 'rgba(13,110,253,0.2)',
          tension: 0.4,
          fill: true
        }]
      }
    });

    // Medicines Breakdown
    new Chart(document.getElementById('MedicineChart'), {
      type: 'pie',
      data: {
        labels: ['Metaceflin', 'panadol', 'Paracetamol', 'Others'],
        datasets: [{
          data: [10, 50, 30, 20],
          backgroundColor: ['#0d6efd','#6c757d','#ffc107','#dc3545']
        }]
      }
    });

    new Chart(document.getElementById('InventoryTrend'), {
      type: 'line',
      data: {
        labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
        datasets: [{
          label: 'Sales (TSh)',
          data: [200, 150, 180, 100, 200, 250],
          borderColor: '#0d6efd',
          backgroundColor: 'rgba(13,110,253,0.2)',
          tension: 0.4,
          fill: true
        }]
      }
    });