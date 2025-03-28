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
    				<h1 class="h3">Reports</h1>

                    <!-- Filter Section -->
                    <div class="filter-section mb-4">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Filter Reports</h5>
                            </div>
                            <div class="card-body">
                                <form action="generate_reports.php" method="POST">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="dateRange" class="form-label">Date Range</label>
                                            <input type="text" class="form-control" id="dateRange" name="dateRange" placeholder="Select date range">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="docTypeFilter" class="form-label">Document Type</label>
                                            <select class="form-control" id="docTypeFilter" name="docTypeFilter">
                                                <option value="">All</option>
                                                <option value="journal">Journal</option>
                                                <option value="book">Book</option>
                                                <option value="research_paper">Research Paper</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="statusFilter" class="form-label">Validation Status</label>
                                            <select class="form-control" id="statusFilter" name="statusFilter">
                                                <option value="">All</option>
                                                <option value="valid">Valid</option>
                                                <option value="invalid">Invalid</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-filter me-2"></i> Filter Reports
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Detailed Reports Table -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Validation Results</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-bordered table-responsive-lg">
                                <thead>
                                    <tr>
                                        <th scope="col">Document Name</th>
                                        <th scope="col">ISSN/ISBN</th>
                                        <th scope="col">Document Type</th>
                                        <th scope="col">Validation Status</th>
                                        <th scope="col">Validation Date</th>
                                        <th scope="col">Plagiarism Check</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Example row -->
                                    <tr>
                                        <td>Sample Research Paper</td>
                                        <td>1234-5678</td>
                                        <td>Research Paper</td>
                                        <td><span class="badge bg-success">Valid</span></td>
                                        <td>2025-03-13</td>
                                        <td><span class="badge bg-info">Checked</span></td>
                                        <td><a href="./report_detail.php" class="btn btn-primary">Details</a></td>
                                    </tr>
                                    <tr>
                                        <td>Sample Book</td>
                                        <td>9876-5432</td>
                                        <td>Book</td>
                                        <td><span class="badge bg-danger">Invalid</span></td>
                                        <td>2025-03-10</td>
                                        <td><span class="badge bg-warning">Pending</span></td>
                                        <td><a href="./report_detail.php" class="btn btn-primary">Details</a></td>
                                    </tr>
                                    <!-- Add PHP loop to populate rows dynamically -->
                                </tbody>
                            </table>
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
