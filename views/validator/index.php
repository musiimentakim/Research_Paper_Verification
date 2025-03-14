<!DOCTYPE html>
<html lang="en">

<head>
	<?php include "../Components/head.php" ?>
</head>

<body>
	<div class="wrapper">
		<?php include "ValidatorSideBar.php" ?>

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
                <img src="../../assets/images/avatar.png" class="avatar img-fluid rounded me-1" alt="Validator" /> <span class="text-dark">Validator</span>
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
                  <h5 class="card-title">Available Papers</h5>
                  <div class="d-flex align-items-center">
                    <div class="col-auto">
                      <div class="stat text-primary">
                        <i class="align-middle" data-feather="file-text"></i>
                      </div>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>
                      <span class="text-muted">submissions</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xxl-4 col-lg-4 col-md-6">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Pending Papers</h5>
                  <div class="d-flex align-items-center">
                    <div class="col-auto">
                      <div class="stat text-primary">
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
                  <h5 class="card-title">Cleared Papers</h5>
                  <div class="d-flex align-items-center">
                    <div class="col-auto">
                      <div class="stat text-primary">
                        <i class="align-middle" data-feather="check-square"></i>
                      </div>
                    </div>
                    <div class="ps-3">
                      <h6>1244</h6>
                      <span class="text-muted">completed</span>
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
                        <i class="align-middle" data-feather="shield"></i>
                      </div>
                    </div>
                    <div class="ps-3">
                      <h6>876</h6>
                      <span class="text-muted">successfully validated</span>
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
                      <h6>132</h6>
                      <span class="text-muted">failed verification</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xxl-4 col-lg-4 col-md-6">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Reviewer Activity</h5>
                  <div class="d-flex align-items-center">
                    <div class="col-auto">
                      <div class="stat text-info">
                        <i class="align-middle" data-feather="users"></i>
                      </div>
                    </div>
                    <div class="ps-3">
                      <h6>24</h6>
                      <span class="text-muted">active reviewers</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Line Chart</div>
                  </div>
                  <div class="card-body">
                    <div class="chart-container">
                    <canvas id="lineChart" style="width: 100%; height: 300px;"></canvas>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">Pie Chart</div>
                  </div>
                  <div class="card-body">
                    <div class="chart-container">
                    <canvas id="pieChart" style="width: 100%; height: 300px;"></canvas>
                    </div>
                  </div>
                </div>
              </div>

            <div class="col-12">
    <div class="card recent-sales overflow-auto">
        <div class="card-body">
            <h5 class="card-title">Paper Review Summary <span>| Today</span></h5>
            <table class="table table-borderless datatable">
                <thead>
                    <tr>
                        <th scope="col">DOI</th>
                        <th scope="col">Author</th>
                        <th scope="col">Paper Title</th>
                        <th scope="col">Reviewer</th>
                        <th scope="col">Time Elapsed</th>
                        <th scope="col">Status</th> <!-- Status column -->
                    </tr>
                </thead>
                <tbody>
                    <!-- Pending Papers (Highest Priority) -->
                    <tr>
                        <th scope="row">
                            <a href="https://doi.org/10.1234/RP7891" target="_blank">#RP7891</a>
                        </th>
                        <td>Dr. Alice Brown</td>
                        <td>Deep Learning in Medical Imaging</td>
                        <td>John Doe</td>
                        <td>2h 30m</td>
                        <td><span class="badge bg-warning text-dark">Pending</span></td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <a href="https://doi.org/10.1234/RP2345" target="_blank">#RP2345</a>
                        </th>
                        <td>Prof. Mark Lee</td>
                        <td>AI Ethics and Bias</td>
                        <td>Jane Smith</td>
                        <td>4h 00m</td>
                        <td><span class="badge bg-warning text-dark">Pending</span></td>
                    </tr>

                    <!-- Verified Papers -->
                    <tr>
                        <th scope="row">
                            <a href="https://doi.org/10.1234/RP3456" target="_blank">#RP3456</a>
                        </th>
                        <td>Dr. Emily Carter</td>
                        <td>Quantum Computing in AI</td>
                        <td>Michael Johnson</td>
                        <td>12h 45m</td>
                        <td><span class="badge bg-info text-dark">Verified</span></td>
                    </tr>

                    <!-- Accepted Papers -->
                    <tr>
                        <th scope="row">
                            <a href="https://doi.org/10.1234/RP5678" target="_blank">#RP5678</a>
                        </th>
                        <td>Dr. Sarah White</td>
                        <td>Neural Networks in Healthcare</td>
                        <td>David Kim</td>
                        <td>1d 2h</td>
                        <td><span class="badge bg-success">Accepted</span></td>
                    </tr>

                    <!-- Rejected Papers -->
                    <tr>
                        <th scope="row">
                            <a href="https://doi.org/10.1234/RP6789" target="_blank">#RP6789</a>
                        </th>
                        <td>Prof. Daniel Green</td>
                        <td>Bias in AI Training Data</td>
                        <td>Olivia Roberts</td>
                        <td>2d 5h</td>
                        <td><span class="badge bg-danger">Rejected</span></td>
                    </tr>
                </tbody>
            </table>
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
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<?php include "../Components/js-links.php" ?>
</body>
</html>