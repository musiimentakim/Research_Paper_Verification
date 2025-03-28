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
                  <h5 class="card-title">Available Jobs</h5>
                  <div class="d-flex align-items-center">
                    <div class="col-auto">
											<div class="stat text-primary">
                        <i class="align-middle" data-feather="map-pin"></i>
                      </div>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>
                      <span class="text-muted">clients</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xxl-4 col-lg-4 col-md-6">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Pending Jobs</h5>
                  <div class="d-flex align-items-center">
                    <div class="col-auto">
											<div class="stat text-primary">
                        <i class="align-middle" data-feather="activity"></i>
                      </div>
                    </div>
                    <div class="ps-3">
                      <h6>264</h6>
                      <span class="text-muted">clients</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xxl-4 col-lg-4 col-md-6">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">Cleared Jobs</h5>
                  <div class="d-flex align-items-center">
                    <div class="col-auto">
											<div class="stat text-primary">
                        <i class="align-middle" data-feather="check-square"></i>
                      </div>
                    </div>
                    <div class="ps-3">
                      <h6>1244</h6>
                      <span class="text-muted">clients</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="card-body">
                  <h5 class="card-title">Pending Jobs <span>| Today</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Customer</th>
                        <th scope="col">Car Details</th>
                        <th scope="col">Mechanic</th>
                        <th scope="col">Time Elapsed</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">#SS7891</th>
                        <td>Mayen Atem</td>
                        <td>SSC 789</td>
                        <td>Joseph Lual</td>
                        <td>2.5 hours</td>
                    </tr>
                    <tr>
                        <th scope="row">#SS2345</th>
                        <td>Abuk Makuach</td>
                        <td>SSD 321</td>
                        <td>Michael Wani</td>
                        <td>4 hours</td>
                    </tr>
                    <tr>
                        <th scope="row">#SS6578</th>
                        <td>Garang Akol</td>
                        <td>SSE 876</td>
                        <td>David Majok</td>
                        <td>1.5 hours</td>
                    </tr>
                    <tr>
                        <th scope="row">#SS1987</th>
                        <td>Nyachol Adut</td>
                        <td>SSF 543</td>
                        <td>Simon Gatluak</td>
                        <td>3.2 hours</td>
                    </tr>
                    <tr>
                        <th scope="row">#SS4562</th>
                        <td>Manut Kuir</td>
                        <td>SSG 987</td>
                        <td>Peter Malith</td>
                        <td>2.8 hours</td>
                    </tr>
                    <tr>
                        <th scope="row">#SS8765</th>
                        <td>Awet Gatkuoth</td>
                        <td>SSH 234</td>
                        <td>John Ariik</td>
                        <td>2 hours</td>
                    </tr>
                    <tr>
                        <th scope="row">#SS3219</th>
                        <td>Aluel Kuany</td>
                        <td>SSI 678</td>
                        <td>Daniel Lueth</td>
                        <td>3.5 hours</td>
                    </tr>
                    <tr>
                        <th scope="row">#SS5432</th>
                        <td>Chol Majur</td>
                        <td>SSJ 876</td>
                        <td>Thomas Deng</td>
                        <td>2.3 hours</td>
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