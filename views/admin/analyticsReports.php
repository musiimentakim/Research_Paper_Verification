<!DOCTYPE html>
<html lang="en">

<head>
	<?php include "../Components/head.php" ?>
</head>

<body>
	<div class="wrapper">
		<?php include "./AdminSideBar.php" ?>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

							<a class="nav-link d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                <img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Admin" /> <span class="text-dark">Admin</span>
              </a>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
        <div class="container-fluid p-0">
          <h1 class="h3">Analytics & Reports</h1>

          <!-- Report Generation Section -->
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">Generate Reports</h5>
                  <div class="float-end">
                    <button class="btn btn-primary me-2">
                      <i class="align-middle" data-feather="download"></i> Export Report
                    </button>
                    <button class="btn btn-success">
                      <i class="align-middle" data-feather="refresh-cw"></i> Refresh Data
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <form class="row g-3">
                    <div class="col-md-3">
                      <label class="form-label">Report Type</label>
                      <select class="form-select">
                        <option value="verification">Verification Statistics</option>
                        <option value="performance">System Performance</option>
                        <option value="validator">Validator Performance</option>
                        <option value="trends">Trend Analysis</option>
                      </select>
                    </div>
                    <div class="col-md-3">
                      <label class="form-label">Time Period</label>
                      <select class="form-select">
                        <option value="today">Today</option>
                        <option value="week">Last Week</option>
                        <option value="month">Last Month</option>
                        <option value="quarter">Last Quarter</option>
                        <option value="year">Last Year</option>
                      </select>
                    </div>
                    <div class="col-md-3">
                      <label class="form-label">Format</label>
                      <select class="form-select">
                        <option value="pdf">PDF</option>
                        <option value="excel">Excel</option>
                        <option value="csv">CSV</option>
                      </select>
                    </div>
                    <div class="col-md-3">
                      <label class="form-label">&nbsp;</label>
                      <button type="submit" class="btn btn-primary w-100">Generate Report</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <!-- Key Metrics Section -->
          <div class="row">
            <div class="col-md-3">
              <div class="card info-card">
                <div class="card-body">
                  <h5 class="card-title">Verification Rate</h5>
                  <div class="d-flex align-items-center">
                    <div class="col-auto">
                      <div class="stat text-primary">
                        <i class="align-middle" data-feather="check-circle"></i>
                      </div>
                    </div>
                    <div class="ps-3">
                      <h6>92%</h6>
                      <span class="text-muted">success rate</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card info-card">
                <div class="card-body">
                  <h5 class="card-title">Avg. Processing Time</h5>
                  <div class="d-flex align-items-center">
                    <div class="col-auto">
                      <div class="stat text-info">
                        <i class="align-middle" data-feather="clock"></i>
                      </div>
                    </div>
                    <div class="ps-3">
                      <h6>4.5 min</h6>
                      <span class="text-muted">per paper</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card info-card">
                <div class="card-body">
                  <h5 class="card-title">Validator Efficiency</h5>
                  <div class="d-flex align-items-center">
                    <div class="col-auto">
                      <div class="stat text-success">
                        <i class="align-middle" data-feather="users"></i>
                      </div>
                    </div>
                    <div class="ps-3">
                      <h6>85%</h6>
                      <span class="text-muted">utilization rate</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card info-card">
                <div class="card-body">
                  <h5 class="card-title">System Uptime</h5>
                  <div class="d-flex align-items-center">
                    <div class="col-auto">
                      <div class="stat text-warning">
                        <i class="align-middle" data-feather="server"></i>
                      </div>
                    </div>
                    <div class="ps-3">
                      <h6>99.9%</h6>
                      <span class="text-muted">reliability</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Analytics Charts Section -->
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">Verification Trends</h5>
                </div>
                <div class="card-body">
                  <div class="chart-container">
                    <canvas id="verificationTrends" style="width: 100%; height: 300px;"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">Paper Categories Distribution</h5>
                </div>
                <div class="card-body">
                  <div class="chart-container">
                    <canvas id="categoryDistribution" style="width: 100%; height: 300px;"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Detailed Reports Section -->
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">Detailed Reports</h5>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Report Name</th>
                          <th>Last Generated</th>
                          <th>Size</th>
                          <th>Format</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Monthly Verification Summary</td>
                          <td>2024-03-20 14:30</td>
                          <td>2.5 MB</td>
                          <td>PDF</td>
                          <td>
                            <button class="btn btn-sm btn-primary">View</button>
                            <button class="btn btn-sm btn-secondary">Download</button>
                          </td>
                        </tr>
                        <tr>
                          <td>Validator Performance Report</td>
                          <td>2024-03-19 16:45</td>
                          <td>1.8 MB</td>
                          <td>Excel</td>
                          <td>
                            <button class="btn btn-sm btn-primary">View</button>
                            <button class="btn btn-sm btn-secondary">Download</button>
                          </td>
                        </tr>
                        <tr>
                          <td>System Health Report</td>
                          <td>2024-03-18 09:15</td>
                          <td>1.2 MB</td>
                          <td>PDF</td>
                          <td>
                            <button class="btn btn-sm btn-primary">View</button>
                            <button class="btn btn-sm btn-secondary">Download</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>

			<footer class="footer">
				<?php include "../Components/footer.php" ?>
			</footer>
		</div>
	</div>
	<?php include "../Components/js-links.php" ?>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<script>
		// Verification Trends Chart
		const trendsCtx = document.getElementById('verificationTrends').getContext('2d');
		new Chart(trendsCtx, {
			type: 'line',
			data: {
				labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
				datasets: [{
					label: 'Papers Verified',
					data: [65, 59, 80, 81, 56, 55],
					borderColor: 'rgb(75, 192, 192)',
					tension: 0.1
				}, {
					label: 'Papers Rejected',
					data: [15, 19, 20, 19, 16, 15],
					borderColor: 'rgb(255, 99, 132)',
					tension: 0.1
				}]
			},
			options: {
				responsive: true,
				maintainAspectRatio: false
			}
		});

		// Category Distribution Chart
		const categoryCtx = document.getElementById('categoryDistribution').getContext('2d');
		new Chart(categoryCtx, {
			type: 'doughnut',
			data: {
				labels: ['Research Papers', 'Journal Articles', 'Conference Papers', 'Books', 'Others'],
				datasets: [{
					data: [40, 25, 20, 10, 5],
					backgroundColor: [
						'rgb(75, 192, 192)',
						'rgb(255, 205, 86)',
						'rgb(255, 99, 132)',
						'rgb(54, 162, 235)',
						'rgb(153, 102, 255)'
					]
				}]
			},
			options: {
				responsive: true,
				maintainAspectRatio: false
			}
		});
	</script>
</body>
</html>