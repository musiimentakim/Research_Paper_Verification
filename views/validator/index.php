<!DOCTYPE html>
<html lang="en">

<head>
	<?php include "../Components/head.php" ?>
	<?php include "../Components/css-links.php" ?>
    
</head>

<body>
	<div class="wrapper">
		<div class="main">
			<?php include "./validatornavBar.php" ?>
            
            <main class="content">
                <div class="container-fluid p-0">
                <h1 class="h3">Dashboard</h1>

                <section class="section dashboard">
                <div class="row">
                  <!-- Left Column -->
                  <div class="col-xxl-4 col-lg-4 col-md-6">
                  <a href="./validate.php" class="card-link">    
                    <div class="card info-card revenue-card" id="validate-card-index">
                            <div class="card-body">
                                <h5 class="card-title">Validate Document</h5>
                                <div class="d-flex align-items-center">
                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="mouse-pointer"></i>
                                        </div>
                                    </div>
                                    <div class="ps-3">
                                        <span class="text-muted">Click to start validation</span>
                                    </div>
                                </div>
                            </div>
                      </div>
                    </a>  
                      <div class="card info-card revenue-card">
                          <div class="card-body">
                              <h5 class="card-title">Total Jobs</h5>
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
                  
                  <!-- Right Column -->
                  <div class="col-xxl-8 col-lg-8 col-md-6">
                      <div class="row">
                          <div class="col-xxl-6 col-lg-6 col-md-12">
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

                          <div class="col-xxl-6 col-lg-6 col-md-12">
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

                          <div class="col-xxl-6 col-lg-6 col-md-12">
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

                          <div class="col-xxl-6 col-lg-6 col-md-12">
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
              <div class="card recent-sales overflow-auto" id="dashboard-summary-table">
                  <div class="card-body">
                      <h5 class="card-title">Paper Review Summary <span>| Today</span></h5>
                      <table class="table table-hover my-0">
                          <thead>
                              <tr>
                                  <th rowspan="2">DOI</th>
                                  <th rowspan="2">Author</th>
                                  <th rowspan="2">Paper Title</th>
                                  <th rowspan="2">Validator</th>
                                  <th rowspan="2">Status</th>
                              </tr>
                          </thead>
                          <tbody>
                              <!-- Pending Papers -->
                              <tr>
                                  <td><a href="https://doi.org/10.1234/RP7891" target="_blank">#RP7891</a></td>
                                  <td>Dr. Alice Brown</td>
                                  <td>Deep Learning in Medical Imaging</td>
                                  <td>John Doe</td>
                                  <td><span class="badge bg-warning text-dark">Pending</span></td>
                              </tr>
                              <tr>
                                  <td><a href="https://doi.org/10.1234/RP2345" target="_blank">#RP2345</a></td>
                                  <td>Prof. Mark Lee</td>
                                  <td>AI Ethics and Bias</td>
                                  <td>Jane Smith</td>
                                  <td><span class="badge bg-warning text-dark">Pending</span></td>
                              </tr>
                              
                              <!-- Accepted Papers -->
                              <tr>
                                  <td><a href="https://doi.org/10.1234/RP5678" target="_blank">#RP5678</a></td>
                                  <td>Dr. Sarah White</td>
                                  <td>Neural Networks in Healthcare</td>
                                  <td>David Kim</td>
                                  <td><span class="badge bg-success">Accepted</span></td>
                              </tr>
                              
                              <!-- Rejected Papers -->
                              <tr>
                                  <td><a href="https://doi.org/10.1234/RP6789" target="_blank">#RP6789</a></td>
                                  <td>Prof. Daniel Green</td>
                                  <td>Bias in AI Training Data</td>
                                  <td>Olivia Roberts</td>
                                  <td><span class="badge bg-danger">Rejected</span></td>
                              </tr>
                          </tbody>
                      </table>
                      
                      <nav aria-label="Pagination" class="mt-3">
                          <ul class="pagination justify-content-center" id="pagination">
                              <li class="page-item">
                                  <a class="page-link" href="#" aria-label="Previous">
                                      <span aria-hidden="true">&laquo;</span>
                                  </a>
                              </li>
                              <li class="page-item active"><a class="page-link" href="#">1</a></li>
                              <li class="page-item">
                                  <a class="page-link" href="#" aria-label="Next">
                                      <span aria-hidden="true">&raquo;</span>
                                  </a>
                              </li>
                          </ul>
                      </nav>
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
