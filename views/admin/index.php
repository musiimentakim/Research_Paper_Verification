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
      <h1 class="h3">Dashboard</h1>
    
    <section class="section dashboard">
      <div class="row">
            <div class="col-xxl-4 col-lg-4 col-md-6">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Total Papers</h5>
                  <div class="d-flex align-items-center">
                    <div class="col-auto">
                      <div class="stat text-primary">
                        <i class="align-middle" data-feather="file-text"></i>
                      </div>
                    </div>
                    <div class="ps-3">
                      <h6>1,245</h6>
                      <span class="text-muted">submitted papers</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xxl-4 col-lg-4 col-md-6">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Pending Verification</h5>
                  <div class="d-flex align-items-center">
                    <div class="col-auto">
                      <div class="stat text-warning">
                        <i class="align-middle" data-feather="clock"></i>
                      </div>
                    </div>
                    <div class="ps-3">
                      <h6>264</h6>
                      <span class="text-muted">awaiting review</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xxl-4 col-lg-4 col-md-6">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Verified Papers</h5>
                  <div class="d-flex align-items-center">
                    <div class="col-auto">
                      <div class="stat text-success">
                        <i class="align-middle" data-feather="check-circle"></i>
                      </div>
                    </div>
                    <div class="ps-3">
                      <h6>876</h6>
                      <span class="text-muted">successfully verified</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xxl-4 col-lg-4 col-md-6">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Active Validators</h5>
                  <div class="d-flex align-items-center">
                    <div class="col-auto">
                      <div class="stat text-info">
                        <i class="align-middle" data-feather="users"></i>
                      </div>
                    </div>
                    <div class="ps-3">
                      <h6>24</h6>
                      <span class="text-muted">working validators</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xxl-4 col-lg-4 col-md-6">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Rejected Papers</h5>
                  <div class="d-flex align-items-center">
                    <div class="col-auto">
                      <div class="stat text-danger">
                        <i class="align-middle" data-feather="x-circle"></i>
                      </div>
                    </div>
                    <div class="ps-3">
                      <h6>105</h6>
                      <span class="text-muted">failed verification</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  <h5 class="card-title">Recent Paper Submissions <span>| Today</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Paper ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Author(s)</th>
                        <th scope="col">Submission Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Assigned Validator</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">#PAP7891</th>
                        <td>Machine Learning in Healthcare</td>
                        <td>Dr. John Smith, et al.</td>
                        <td>2024-03-20</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                        <td>Dr. Sarah Johnson</td>
                      </tr>
                      <tr>
                        <th scope="row">#PAP2345</th>
                        <td>Climate Change Impact Analysis</td>
                        <td>Prof. Michael Brown</td>
                        <td>2024-03-20</td>
                        <td><span class="badge bg-success">Verified</span></td>
                        <td>Dr. Emily Davis</td>
                      </tr>
                      <tr>
                        <th scope="row">#PAP6578</th>
                        <td>Quantum Computing Applications</td>
                        <td>Dr. Robert Wilson</td>
                        <td>2024-03-19</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                        <td>Prof. James Wilson</td>
                      </tr>
                      <tr>
                        <th scope="row">#PAP1987</th>
                        <td>Renewable Energy Systems</td>
                        <td>Dr. Lisa Anderson</td>
                        <td>2024-03-19</td>
                        <td><span class="badge bg-danger">Rejected</span></td>
                        <td>Dr. Mark Thompson</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

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
                  <h5 class="card-title">Verification Status Distribution</h5>
                </div>
                <div class="card-body">
                  <div class="chart-container">
                    <canvas id="statusDistribution" style="width: 100%; height: 300px;"></canvas>
                  </div>
                </div>
              </div>
            </div>

      </div>
    </section>
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
				}]
			},
			options: {
				responsive: true,
				maintainAspectRatio: false
			}
		});

		// Status Distribution Chart
		const statusCtx = document.getElementById('statusDistribution').getContext('2d');
		new Chart(statusCtx, {
			type: 'doughnut',
			data: {
				labels: ['Verified', 'Pending', 'Rejected'],
				datasets: [{
					data: [70, 20, 10],
					backgroundColor: [
						'rgb(75, 192, 192)',
						'rgb(255, 205, 86)',
						'rgb(255, 99, 132)'
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