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
                <img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark">Charles Hall</span>
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

            <!-- Paper Validation Section -->
            <section class="section validation">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="paper_validation.php" class="card validation-card">
                                <div class="card-body text-center">
                                    <i class="bi bi-check-circle" style="font-size: 2rem;"></i>
                                    <h5 class="card-title">Paper Validation</h5>
                                    <p class="card-text">Upload and verify research papers efficiently.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </section>



            <div class="col-12">
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  <h5 class="card-title">Pending Papers <span>| Today</span></h5>
                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">DOI</th>
                        <th scope="col">Author</th>
                        <th scope="col">Paper Title</th>
                        <th scope="col">Reviewer</th>
                        <th scope="col">Time Elapsed</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">#RP7891</th>
                        <td>Dr. Alice Brown</td>
                        <td>Deep Learning in Medical Imaging</td>
                        <td>John Doe</td>
                        <td>2.5 hours</td>
                      </tr>
                      <tr>
                        <th scope="row">#RP2345</th>
                        <td>Prof. Mark Lee</td>
                        <td>AI Ethics and Bias</td>
                        <td>Jane Smith</td>
                        <td>4 hours</td>
                      </tr>
                      <tr>
                        <th scope="row">#RP7891</th>
                        <td>Dr. Alice Brown</td>
                        <td>Deep Learning in Medical Imaging</td>
                        <td>John Doe</td>
                        <td>2.5 hours</td>
                      </tr>
                      <tr>
                        <th scope="row">#RP7891</th>
                        <td>Dr. Alice Brown</td>
                        <td>Deep Learning in Medical Imaging</td>
                        <td>John Doe</td>
                        <td>2.5 hours</td>
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
	<?php include "../Components/js-links.php" ?>
</body>
</html>