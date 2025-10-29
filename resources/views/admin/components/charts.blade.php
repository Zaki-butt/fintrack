<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-6">

  <!-- Income vs Expense Chart -->
  <div class="border border-gray-200 rounded-xl bg-white shadow-sm p-6">
    <h3 class="text-[#1E293B] text-lg font-semibold mb-4">Income vs Expense</h3>
    <canvas id="incomeExpenseChart" height="300"></canvas>
  </div>

  <!-- Monthly Cash Flow Chart -->
  <div class="border border-gray-200 rounded-xl bg-white shadow-sm p-6">
    <h3 class="text-[#1E293B] text-lg font-semibold mb-4">Monthly Cash Flow</h3>
    <canvas id="cashFlowChart" height="300"></canvas>
  </div>

  <!-- Category-wise Spending -->
  <div class="border border-gray-200 rounded-xl bg-white shadow-sm p-6 lg:col-span-2">
    <h3 class="text-[#1E293B] text-lg font-semibold mb-4">Category-wise Spending</h3>
    <div class="flex justify-center">
      <canvas id="categoryChart" height="300"></canvas>
    </div>
  </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
/* ========== Income vs Expense Bar Chart ========== */
new Chart(document.getElementById('incomeExpenseChart'), {
  type: 'bar',
  data: {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
    datasets: [
      {
        label: 'Income',
        data: [12000, 13500, 11000, 14000, 13000, 15500],
        backgroundColor: '#3B82F6'
      },
      {
        label: 'Expense',
        data: [8000, 7500, 9000, 8500, 7800, 9200],
        backgroundColor: '#EF4444'
      }
    ]
  },
  options: {
    responsive: true,
    borderRadius: 8,
    plugins: { legend: { position: 'bottom' } }
  }
});

/* ========== Cash Flow Line Chart ========== */
new Chart(document.getElementById('cashFlowChart'), {
  type: 'line',
  data: {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
    datasets: [{
      label: 'Cash Flow',
      data: [4000, 6000, 2000, 5500, 5200, 6300],
      borderColor: '#3B82F6',
      backgroundColor: '#3B82F6',
      tension: 0.4,
      fill: false,
      pointRadius: 5
    }]
  },
  options: {
    responsive: true,
    plugins: { legend: { display: true, position: 'bottom' } }
  }
});

/* ========== Category Pie Chart ========== */
new Chart(document.getElementById('categoryChart'), {
  type: 'pie',
  data: {
    labels: [
      'Food & Dining',
      'Transportation',
      'Shopping',
      'Entertainment',
      'Bills & Utilities'
    ],
    datasets: [{
      data: [2400, 1800, 1200, 900, 1940],
      backgroundColor: ['#3B82F6','#10B981','#F59E0B','#8B5CF6','#EF4444']
    }]
  },
  options: {
    responsive: true,
    plugins: { legend: { position: 'bottom' } }
  }
});
</script>
