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
          <h1 class="h3">Crawler Management</h1>
          
          <!-- Crawler Status Section -->
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">Crawler Status</h5>
                  <div class="float-end">
                  </div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-3">
                      <div class="card info-card">
                        <div class="card-body">
                          <h5 class="card-title">Active Crawlers</h5>
                          <div class="d-flex align-items-center">
                            <div class="col-auto">
                              <div class="stat text-primary">
                                <i class="align-middle" data-feather="activity"></i>
                              </div>
                            </div>
                            <div class="ps-3">
                              <h6>3</h6>
                              <span class="text-muted">running crawlers</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="card info-card">
                        <div class="card-body">
                          <h5 class="card-title">Pages Crawled</h5>
                          <div class="d-flex align-items-center">
                            <div class="col-auto">
                              <div class="stat text-success">
                                <i class="align-middle" data-feather="file-text"></i>
                              </div>
                            </div>
                            <div class="ps-3">
                              <h6>12,456</h6>
                              <span class="text-muted">pages processed</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="card info-card">
                        <div class="card-body">
                          <h5 class="card-title">Crawl Rate</h5>
                          <div class="d-flex align-items-center">
                            <div class="col-auto">
                              <div class="stat text-info">
                                <i class="align-middle" data-feather="trending-up"></i>
                              </div>
                            </div>
                            <div class="ps-3">
                              <h6>45</h6>
                              <span class="text-muted">pages/minute</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="card info-card">
                        <div class="card-body">
                          <h5 class="card-title">Errors</h5>
                          <div class="d-flex align-items-center">
                            <div class="col-auto">
                              <div class="stat text-danger">
                                <i class="align-middle" data-feather="alert-circle"></i>
                              </div>
                            </div>
                            <div class="ps-3">
                              <h6>12</h6>
                              <span class="text-muted">errors detected</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Crawler Logs Section -->
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">Crawler Logs</h5>
                  <div class="float-end">
                    <button class="btn btn-secondary btn-sm">
                      <i class="align-middle" data-feather="download"></i> Export Logs
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Timestamp</th>
                          <th>Level</th>
                          <th>Message</th>
                          <th>URL</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>2024-03-20 14:30:15</td>
                          <td><span class="badge bg-info">INFO</span></td>
                          <td>Starting crawl of domain: example.com</td>
                          <td>https://example.com</td>
                          <td><span class="badge bg-success">Success</span></td>
                        </tr>
                        <tr>
                          <td>2024-03-20 14:30:20</td>
                          <td><span class="badge bg-warning">WARNING</span></td>
                          <td>Rate limit reached, waiting...</td>
                          <td>https://example.com/papers</td>
                          <td><span class="badge bg-warning">Waiting</span></td>
                        </tr>
                        <tr>
                          <td>2024-03-20 14:30:25</td>
                          <td><span class="badge bg-danger">ERROR</span></td>
                          <td>Failed to parse PDF content</td>
                          <td>https://example.com/paper123.pdf</td>
                          <td><span class="badge bg-danger">Failed</span></td>
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
</body>
</html>