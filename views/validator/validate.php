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
					<h1 class="h3">Validate Document</h1>    
					<div class="container-fluid p-0">
						<div class="card mt-3"  id= "validate-card">
							<div class="card-header">
								<h4 class="card-title">Validate Page</h4>
							</div>		
							<form id= "validate-form">
								   <div class="mb-3">
											<label for="doc-title" class="form-label">Article / Journal / Book Title</label>
											<input type="text" class="form-control" id="doc-title" name="doc-title" placeholder="Enter title e.g The Future of AI" required>
										</div>

										<div class="mb-3">
											<label for="author-name" class="form-label">Author Name</label>
											<input type="text" class="form-control" id="author-name" name="author-name" placeholder="Enter author's full name e.g John Doe" required>
										</div>

										<div class="mb-3">
											<label for="doi-input" class="form-label">Article / Journal / Book DOI</label>
											<input type="text" class="form-control" id="doi-input" name="doi-input" placeholder="Enter DOI " required>
										</div>

										<div class="mb-3">
											<label for="issnIsbn-input" class="form-label">Enter ISSN/ISBN</label>
											<input type="text" class="form-control" id="issnIsbn-input" name="issnIsbn-input" placeholder="Enter ISSN or ISBN e.g 1234-5678" required>
										</div>

										<div class="row gx-5">
											<div class="col-md-6 mb-3 custom-spacing" id="document-type">
												<label for="docType" class="form-label">Document Type</label>
												<select class="form-select" id="docType" name="docType" required>
													<option value="">Select Document Type</option>
													<option value="journal">Journal</option>
													<option value="book">Book</option>
													<option value="research_paper">Research Paper</option>
												</select>
											</div>

											<div class="col-md-6 mb-3 custom-spacing" id="validation-level">
												<label for="validationLevel" class="form-label">Validation Level</label>
												<select class="form-select" id="validationLevel" name="validationLevel">
													<option value="">Select Validation Level</option>
													<option value="basic">Basic</option>
													<option value="advanced">Advanced</option>
												</select>
											</div>
										</div>
										<div class="mb-3">
											<label class="form-label">Enable Plagiarism Check</label><br>
											<input type="checkbox" name="enablePlagiarism" value="1"> Check for Plagiarism
										</div>

										<!-- Submit Button -->
										<div class="d-flex  justify-content-center">
											<button type="submit" id="validate-btn" class="btn btn-primary">Validate</button>
										</div>
							</form>
						</div>
					</div>
				</div>

				<div class="container mt-4">
					<div class="card card mt-3" id="validateResults-card">
							<div class="card-header">
                        		<h5 class="card-title">Validation check Criteria</h5>
                        	</div>
							<div class="row">
							<!-- Left Side -->
								<div class="col-md-6" id="left-column">
									<div class="d-flex align-items-center">
										<i class="fas fa-globe me-2 text-success"></i> <!-- Icon -->
										<span class="badge bg-success me-2" data-bs-toggle="tooltip" title="Checks if the document has a DOI identifier.">
										Availability Check
										</span>
										<span>Criteria: <strong>DOI</strong></span>
									</div>
									<hr>
									<div class="d-flex align-items-center">
										<i class="fas fa-shield-alt me-2 text-warning"></i> <!-- Icon -->
										<span class="badge bg-success me-2" data-bs-toggle="tooltip" title="Verifies that the site is not predatory (Beal's List).">
												Publication Site Credibility
										</span>
										<span>Criteria: <strong>Site legitimacy</strong></span>
										</div>
									</div>

							<!-- Right Side -->
								<div class="col-md-6" id="right-column">
									<div class="d-flex align-items-center">
										<i class="fas fa-check-circle me-2 text-primary"></i> <!-- Icon -->
										<span class="badge bg-success me-2" data-bs-toggle="tooltip" title="Checks authenticity using ISSN/ISBN or conference details.">
											Document Legitimacy
										</span>
										<span>Criteria: <strong>ISSN/ISBN/Conference</strong></span>
									</div>
									<hr>
									<div class="d-flex align-items-center">
										<i class="fas fa-copy me-2 text-danger"></i> <!-- Icon -->
										<span class="badge bg-success me-2" data-bs-toggle="tooltip" title="Ensures originality by analyzing the document content for plagiarism.">
												Plagiarism Check
										</span>
										<span>Criteria: <strong>Document Content</strong></span>
									</div>
								</div>
						</div>

						<!-- Collapsible More Info Section -->
						<div class="text-center mt-3">
							<button class="btn btn-outline-primary" type="button" id="toggleDetails">
								More Details <i class="fas fa-plus-circle" id="toggleIcon"></i>
							</button>
						</div>

						<div class="collapse mt-3" id="criteriaDetails">
							<div class="card card-body">
								<ul>
									<li><strong>Availability Check:</strong> Confirms if the document is available online with a DOI.</li>
									<li><strong>Publication Site Credibility:</strong> Ensures the document is from a reputable source.</li>
									<li><strong>Document Legitimacy:</strong> Checks if it has a valid ISSN/ISBN or is part of a recognized conference.</li>
									<li><strong>Plagiarism Check:</strong> Analyzes document content to prevent duplicated work.</li>
								</ul>
							</div>
						</div>

						<!-- Validation Results -->
						 <!-- Detailed Reports Table -->
						<div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Validation Results</h5>
                        </div>
                        <div class="card-body">
						<div class="table-container">
                            <table class="table table-striped table-bordered table-responsive-lg">
							<thead>
								<tr>
									<th scope="col">Document Name</th>
									<th scope="col">ISSN/ISBN</th>
									<th scope="col">Document Type</th>
									<th scope="col">Author</th>
									<th scope="col">Availability Check</th>
									<th scope="col">Publication Site Credibility Check</th>
									<th scope="col">Document Legitimacy Check</th>
									<th scope="col">Plagiarism Check</th>
									<th scope="col">Action</th>
								</tr>
								
							</thead>
							<tbody>
								<tr>
									<td>Example Document</td>
									<td>1234-5678</td>
									<td>Journal</td>
									<td>2025-03-19</td>
									<td>passed</td>
									<td>passed</td>
									<td>failed</td>
									<td>passed</td>
									<td><a href="./report_detail.php" class="btn btn-primary btn-sm">Details</a></td>
								</tr>
								<tr>
									<td>Sample Research Paper</td>
									<td>1234-5678</td>
									<td>Research Paper</td>
									<td>2025-03-13</td>
									<td>passed</td>
									<td>passed</td>
									<td>failed</td>
									<td>passed</td>
									<td><a href="./report_detail.php" class="btn btn-primary btn-sm">Details</a></td>
								</tr>

								<!-- Example row for a Book -->
								<tr>
									<td>Sample Book</td>
									<td>9876-5432</td>
									<td>Book</td>
									<td>2025-03-10</td>
									<td>passed</td>
									<td>passed</td>
									<td>failed</td>
									<td>passed</td>
									<td><a href="./report_detail.php" class="btn btn-primary btn-sm">Details</a></td>
								</tr>
							</tbody>
                                
                                    <!-- Add PHP loop to populate rows dynamically -->

                            </table>
							<div class="mt-3">
								<a href="./generateReport.php">
                                	<button type="submit" class="btn btn-primary">Generate Report</button>
								</a>
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
