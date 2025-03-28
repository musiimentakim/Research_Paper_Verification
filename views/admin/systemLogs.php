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
          <h1 class="h3">System Logs</h1>

          <!-- Log Statistics -->
          <div class="row">
            <div class="col-md-3">
              <div class="card info-card">
                <div class="card-body">
                  <h5 class="card-title">Total Logs</h5>
                  <div class="d-flex align-items-center">
                    <div class="col-auto">
                      <div class="stat text-primary">
                        <i class="align-middle" data-feather="list"></i>
                      </div>
                    </div>
                    <div class="ps-3">
                      <h6>2,547</h6>
                      <span class="text-muted">total entries</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card info-card">
                <div class="card-body">
                  <h5 class="card-title">Error Logs</h5>
                  <div class="d-flex align-items-center">
                    <div class="col-auto">
                      <div class="stat text-danger">
                        <i class="align-middle" data-feather="alert-circle"></i>
                      </div>
                    </div>
                    <div class="ps-3">
                      <h6>45</h6>
                      <span class="text-muted">error events</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card info-card">
                <div class="card-body">
                  <h5 class="card-title">Warning Logs</h5>
                  <div class="d-flex align-items-center">
                    <div class="col-auto">
                      <div class="stat text-warning">
                        <i class="align-middle" data-feather="alert-triangle"></i>
                      </div>
                    </div>
                    <div class="ps-3">
                      <h6>128</h6>
                      <span class="text-muted">warning events</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card info-card">
                <div class="card-body">
                  <h5 class="card-title">Info Logs</h5>
                  <div class="d-flex align-items-center">
                    <div class="col-auto">
                      <div class="stat text-info">
                        <i class="align-middle" data-feather="info"></i>
                      </div>
                    </div>
                    <div class="ps-3">
                      <h6>2,374</h6>
                      <span class="text-muted">info events</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Log Management -->
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">System Logs</h5>
                  <div class="float-end">
                    <button class="btn btn-primary me-2">
                      <i class="align-middle" data-feather="download"></i> Export Logs
                    </button>
                    <button class="btn btn-danger">
                      <i class="align-middle" data-feather="trash-2"></i> Clear Logs
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <!-- Search and Filter -->
                  <div class="row mb-3">
                    <div class="col-md-3">
                      <input type="text" class="form-control" placeholder="Search logs...">
                    </div>
                    <div class="col-md-2">
                      <select class="form-select">
                        <option value="">All Levels</option>
                        <option value="error">Error</option>
                        <option value="warning">Warning</option>
                        <option value="info">Info</option>
                        <option value="debug">Debug</option>
                      </select>
                    </div>
                    <div class="col-md-2">
                      <select class="form-select">
                        <option value="">All Modules</option>
                        <option value="auth">Authentication</option>
                        <option value="crawler">Crawler</option>
                        <option value="verification">Verification</option>
                        <option value="system">System</option>
                      </select>
                    </div>
                    <div class="col-md-3">
                      <input type="date" class="form-control" placeholder="Date">
                    </div>
                    <div class="col-md-2">
                      <button class="btn btn-primary w-100">Filter</button>
                    </div>
                  </div>

                  <!-- Logs Table -->
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Timestamp</th>
                          <th>Level</th>
                          <th>Module</th>
                          <th>Message</th>
                          <th>User</th>
                          <th>IP Address</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>2024-03-20 14:30:45</td>
                          <td><span class="badge bg-danger">Error</span></td>
                          <td>Crawler</td>
                          <td>Failed to crawl URL: https://example.com/paper123</td>
                          <td>System</td>
                          <td>192.168.1.1</td>
                          <td>
                            <button class="btn btn-sm btn-info" title="View Details">
                              <i class="align-middle" data-feather="eye"></i>
                            </button>
                            <button class="btn btn-sm btn-warning" title="Mark as Resolved">
                              <i class="align-middle" data-feather="check"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>2024-03-20 14:29:12</td>
                          <td><span class="badge bg-warning">Warning</span></td>
                          <td>Verification</td>
                          <td>Low confidence score for paper verification</td>
                          <td>Dr. Sarah Johnson</td>
                          <td>192.168.1.2</td>
                          <td>
                            <button class="btn btn-sm btn-info" title="View Details">
                              <i class="align-middle" data-feather="eye"></i>
                            </button>
                            <button class="btn btn-sm btn-warning" title="Mark as Resolved">
                              <i class="align-middle" data-feather="check"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                          <td>2024-03-20 14:28:30</td>
                          <td><span class="badge bg-info">Info</span></td>
                          <td>Authentication</td>
                          <td>User login successful</td>
                          <td>John Smith</td>
                          <td>192.168.1.3</td>
                          <td>
                            <button class="btn btn-sm btn-info" title="View Details">
                              <i class="align-middle" data-feather="eye"></i>
                            </button>
                            <button class="btn btn-sm btn-warning" title="Mark as Resolved">
                              <i class="align-middle" data-feather="check"></i>
                            </button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <!-- Pagination -->
                  <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                      </li>
                      <li class="page-item active"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                      </li>
                    </ul>
                  </nav>
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
</body>
</html>