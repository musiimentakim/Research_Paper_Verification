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
                    <h1 class="h3">Document Detailed Report</h1>
                    
                    <!-- Document Details Section -->
                    <div class="card" id="doc-details">
                        <div class="card-header">
                            <h5 class="card-title">Document Information</h5>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <tr>
                                    <th>Document Name</th>
                                    <td>Sample Research Paper
										<!-- View Publication Link -->
                                        <a href="#" class="text-primary text-decoration-none">
                                            <i class="fas fa-external-link-alt"></i> View Publication
                                        </a>
									</td>
                                </tr>
                                <tr>
                                    <th>ISSN/ISBN</th>
                                    <td>1234-5678</td>
                                </tr>
                                <tr>
                                    <th>Document Type</th>
                                    <td>Research Paper</td>
                                </tr>
                                <tr>
                                    <th>Submitted Date</th>
                                    <td>2025-03-01</td>
                                </tr>
                                <tr>
                                    <th>Validation Status</th>
                                    <td><span class="badge bg-success">Valid</span></td>
                                </tr>
                                <tr>
                                    <th>Validation Date</th>
                                    <td>2025-03-13</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <!-- Availability Check -->
					<div class="card mt-4" id="availability-check">
						<div class="card-header">
							<h5 class="card-title">Availability Check</h5>
						</div>
						<div class="card-body">
							<table class="table">
								<tr>
									<th>DOI</th>
									<td>10.1234/example.doi</td>
								</tr>
								<tr>
									<th>Status</th>
									<td><span class="badge bg-success">Existent</span></td>
								</tr>
								<tr>
									<th>Indexed Sites</th>
									<td>Google Scholar, Scopus, IEEE Xplore</td>
								</tr>
							</table>
						</div>
					</div>

					<!-- Publication Site Credibility Check -->
					<div class="card mt-4" id="credibility-check">
						<div class="card-header">
							<h5 class="card-title">Publication Site Credibility Check</h5>
						</div>
						<div class="card-body">
							<table class="table">
								<tr>
									<th>Publisher Sites</th>
									<td>Springer, Elsevier</td>
								</tr>
								<tr>
									<th>Predatory Status</th>
									<td><span class="badge bg-success">Not Predatory</span></td>
								</tr>
								<tr>
									<th>Open Access Status</th>
									<td><span class="badge bg-warning text-dark">Open Access</span></td>
								</tr>
							</table>
						</div>
					</div>

					<!-- Document Legitimacy Check -->
					<div class="card mt-4" id="legitimacy-check">
						<div class="card-header">
							<h5 class="card-title">Document Legitimacy Check</h5>
						</div>
						<div class="card-body">
							<table class="table">
								<tr>
									<th>ISSN / ISBN</th>
									<td>1234-5678</td>
								</tr>
								<tr>
									<th>Conference Name / Publication Site</th>
									<td>ICML 2024 / Nature</td>
								</tr>
								<tr>
									<th>Publisher's Author Position</th>
									<td>First Author</td>
								</tr>
							</table>
						</div>
					</div>


					<!-- Plagiarism Check Results Section -->
					<!-- Plagiarism Check Results Section -->
							<div class="card mt-4" id="plagiarism-check">
								<div class="card-header">
									<h5 class="card-title">Plagiarism Check</h5>
								</div>
								<div class="card-body">
									<div class="row">
										<!-- Similarity Index Card -->
										<div class="col-md-6" id="similarity-index">
											<div class="card shadow-sm">
												<div class="card-header">
													<h6 class="card-title">Similarity Index</h6>
												</div>
												<div class="card-body text-center">
													<h3 class="text-primary">2%</h3>
													<p class="text-muted">Plagiarism Percentage</p>
													<span class="btn bg-success">Passed</span>
												</div>
											</div>
										</div>

										<!-- Plagiarism Tool Used Card -->
										<div class="col-md-6" id="plagiarism-index">
											<div class="card shadow-sm">
												<div class="card-header">
													<h6 class="card-title">Plagiarism Tool Used</h6>
												</div>
												<div class="card-body text-center">
													<h4 class="text-dark">Turnitin</h4>
													<p class="text-muted">Detection Tool</p>
													<a href="#" class="btn btn-info">Trusted</a>
												</div>
											</div>
										</div>
									</div>

									<!-- Similarity Sources Table -->
									<div class="mt-4" id="similarity-index-table">
										<h6>Similarity Sources</h6>
										<table class="table table-striped">
											<thead>
												<tr>
													<th>Source</th>
													<th>Similarity Percentage</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>https://example.com/research-paper</td>
													<td>1.5%</td>
												</tr>
												<tr>
													<td>https://journalxyz.org/article</td>
													<td>0.5%</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>


                    <!-- Document Actions Section -->
                    <div class="card mt-4" id="doc-actions">
					<div class="card-header">
						<h5 class="card-title">Actions</h5>
					</div>
					<div class="card-body">
						<div class="row d-flex align-items-center justify-content-between">
						<div class="col-auto">
							<p class="text-muted mb-2">Select an action for the document:</p>
							<div class="d-flex">
								<button class="btn btn-primary me-2">Approve Document</button>
								<button class="btn btn-warning me-2">Awaiting Approval</button>
								<button class="btn btn-danger">Reject Document</button>
							</div>
						</div>
							<!-- Right Section: Validation Status Card -->
							<div class="col-auto ms-auto" id="validation-status>
								<div class="card p-3 shadow-sm" style="width: 200px; background-color: white; border-radius: 10px;">
									<p class="text-muted fw-bold">Download / Share</p>
									<span class="badge bg-success text-white rounded-pill">
										<i class="fas fa-check-circle"></i> Verified
									</span>
									<div class="d-flex mt-3">
										<a href="#" class="text-decoration-none text-dark me-3">
											<i class="fas fa-file-pdf fa-lg text-danger"></i> PDF
										</a>
										<a href="#" class="text-decoration-none text-dark">
											<i class="fas fa-share-alt fa-lg text-primary"></i> Share
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

                    
                    <!-- Comments Section (if any) -->
                    <div class="card mt-4" id="doc-details">
                        <div class="card-header">
                            <h5 class="card-title">Comments</h5>
                        </div>
                        <div class="card-body">
                            <p>No comments added yet.</p>
                            <!-- Option to add comments -->
                            <textarea class="form-control" placeholder="Add your comment here..."></textarea>
                            <div class="mt-2">
                                <button class="btn btn-success">Submit Comment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>              
			</div>
			
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
