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

                    <div class="report-header card p-4 mb-4">
                        <div class="text-center">
                            <h1 class="fw-bold display-5 text-primary">📄 Document Verification Report</h1>
                            <p class="text-muted fs-5">A comprehensive review of submitted research papers</p>
                        </div>
                        
                        <hr class="my-3">

                        <div class="row text-center">
                            <div class="col-md-4">
                                <h5 class="fw-semibold">Report Date</h5>
                                <p class="text-dark fs-6">March 26, 2025</p>
                            </div>
                            <div class="col-md-4">
                                <h5 class="fw-semibold">Validated By</h5>
                                <p class="text-dark fs-6">John Doe</p>
                            </div>
                            <div class="col-md-4">
                                <h5 class="fw-semibold">Total Documents</h5>
                                <p class="text-dark fs-6">4 Papers</p>
                            </div>
                        </div>
                    </div>


                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Criteria</th>
                                    <th>Paper 1</th>
                                    <th>Paper 2</th>
                                    <th>Paper 3</th>
                                    <th>Paper 4</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Document Name</td>
                                    <td>Sample Research Paper 1 <a href="#" class="text-primary text-decoration-none"><i class="fas fa-external-link-alt"></i> View Publication</a></td>
                                    <td>Sample Research Paper 2 <a href="#" class="text-primary text-decoration-none"><i class="fas fa-external-link-alt"></i> View Publication</a></td>
                                    <td>Sample Research Paper 3 <a href="#" class="text-primary text-decoration-none"><i class="fas fa-external-link-alt"></i> View Publication</a></td>
                                    <td>Sample Research Paper 4 <a href="#" class="text-primary text-decoration-none"><i class="fas fa-external-link-alt"></i> View Publication</a></td>
                                </tr>
                                <tr>
                                    <td>ISSN/ISBN</td>
                                    <td>1234-5678</td>
                                    <td>9876-5432</td>
                                    <td>1234-8765</td>
                                    <td>5678-1234</td>
                                </tr>
                                <tr>
                                    <td>Document Type</td>
                                    <td>Research Paper</td>
                                    <td>Research Paper</td>
                                    <td>Research Paper</td>
                                    <td>Research Paper</td>
                                </tr>
                                <tr>
                                    <td>Submitted Date</td>
                                    <td>2025-03-01</td>
                                    <td>2025-02-25</td>
                                    <td>2025-03-02</td>
                                    <td>2025-02-28</td>
                                </tr>
                                <tr>
                                    <td>Validation Status</td>
                                    <td><span class="badge bg-success">Valid</span></td>
                                    <td><span class="badge bg-danger">Invalid</span></td>
                                    <td><span class="badge bg-success">Valid</span></td>
                                    <td><span class="badge bg-warning">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>Validation Date</td>
                                    <td>2025-03-13</td>
                                    <td>2025-03-14</td>
                                    <td>2025-03-12</td>
                                    <td>2025-03-15</td>
                                </tr>
                            </tbody>
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
                                    <thead>
                                        <tr>
                                            <th>Criteria</th>
                                            <th>Paper 1</th>
                                            <th>Paper 2</th>
                                            <th>Paper 3</th>
                                            <th>Paper 4</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>DOI</td>
                                            <td>10.1234/example.doi</td>
                                            <td>10.5678/example2.doi</td>
                                            <td>10.8765/example3.doi</td>
                                            <td>10.4321/example4.doi</td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td><span class="badge bg-success">Existent</span></td>
                                            <td><span class="badge bg-danger">Non-existent</span></td>
                                            <td><span class="badge bg-success">Existent</span></td>
                                            <td><span class="badge bg-warning">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <td>Indexed Sites</td>
                                            <td>Google Scholar, Scopus</td>
                                            <td>IEEE Xplore</td>
                                            <td>Google Scholar, Scopus</td>
                                            <td>IEEE Xplore</td>
                                        </tr>
                                    </tbody>
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
                                    <thead>
                                        <tr>
                                            <th>Criteria</th>
                                            <th>Paper 1</th>
                                            <th>Paper 2</th>
                                            <th>Paper 3</th>
                                            <th>Paper 4</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Publisher Sites</td>
                                            <td>Springer, Elsevier</td>
                                            <td>IEEE Xplore</td>
                                            <td>Springer</td>
                                            <td>Elsevier</td>
                                        </tr>
                                        <tr>
                                            <td>Predatory Status</td>
                                            <td><span class="badge bg-success">Not Predatory</span></td>
                                            <td><span class="badge bg-success">Not Predatory</span></td>
                                            <td><span class="badge bg-danger">Predatory</span></td>
                                            <td><span class="badge bg-success">Not Predatory</span></td>
                                        </tr>
                                        <tr>
                                            <td>Open Access Status</td>
                                            <td><span class="badge bg-warning text-dark">Open Access</span></td>
                                            <td><span class="badge bg-danger">Not Open Access</span></td>
                                            <td><span class="badge bg-warning text-dark">Open Access</span></td>
                                            <td><span class="badge bg-success">Closed Access</span></td>
                                        </tr>
                                    </tbody>
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
                                    <thead>
                                        <tr>
                                            <th>Criteria</th>
                                            <th>Paper 1</th>
                                            <th>Paper 2</th>
                                            <th>Paper 3</th>
                                            <th>Paper 4</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>ISSN / ISBN</td>
                                            <td>1234-5678</td>
                                            <td>9876-5432</td>
                                            <td>1122-3344</td>
                                            <td>5566-7788</td>
                                        </tr>
                                        <tr>
                                            <td>Conference Name / Publication Site</td>
                                            <td>ICML 2024 / Nature</td>
                                            <td>IEEE Conf. 2024 / Elsevier</td>
                                            <td>CVPR 2024 / Springer</td>
                                            <td>ICML 2024 / Wiley</td>
                                        </tr>
                                        <tr>
                                            <td>Publisher's Author Position</td>
                                            <td>First Author</td>
                                            <td>Second Author</td>
                                            <td>First Author</td>
                                            <td>Last Author</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

					<!-- Plagiarism Check Results Section -->
                    <div class="card mt-4" id="plagiarism-check">
                        <div class="card-header">
                            <h5 class="card-title">Plagiarism Check</h5>
                        </div>
                        <div class="card-body">
                            <!-- Similarity Index and Plagiarism Tool -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Criteria</th>
                                        <th>Paper 1</th>
                                        <th>Paper 2</th>
                                        <th>Paper 3</th>
                                        <th>Paper 4</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Similarity Index</td>
                                        <td>
                                            <h3 class="text-primary">2%</h3>
                                            <p class="text-muted">Plagiarism Percentage</p>
                                            <span class="btn bg-success">Passed</span>
                                        </td>
                                        <td>
                                            <h3 class="text-primary">5%</h3>
                                            <p class="text-muted">Plagiarism Percentage</p>
                                            <span class="btn bg-danger">Failed</span>
                                        </td>
                                        <td>
                                            <h3 class="text-primary">1%</h3>
                                            <p class="text-muted">Plagiarism Percentage</p>
                                            <span class="btn bg-success">Passed</span>
                                        </td>
                                        <td>
                                            <h3 class="text-primary">3%</h3>
                                            <p class="text-muted">Plagiarism Percentage</p>
                                            <span class="btn bg-warning">Under Review</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Plagiarism Tool Used</td>
                                        <td>
                                            <h4 class="text-dark">Turnitin</h4>
                                            <p class="text-muted">Detection Tool</p>
                                            <a href="#" class="btn btn-info">Trusted</a>
                                        </td>
                                        <td>
                                            <h4 class="text-dark">Turnitin</h4>
                                            <p class="text-muted">Detection Tool</p>
                                            <a href="#" class="btn btn-info">Trusted</a>
                                        </td>
                                        <td>
                                            <h4 class="text-dark">Plagscan</h4>
                                            <p class="text-muted">Detection Tool</p>
                                            <a href="#" class="btn btn-info">Trusted</a>
                                        </td>
                                        <td>
                                            <h4 class="text-dark">Copyscape</h4>
                                            <p class="text-muted">Detection Tool</p>
                                            <a href="#" class="btn btn-info">Trusted</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                    <!-- Document Actions Section -->
                    <div class="card mt-4" id="doc-actions">
                        <div class="card-header">
                            <h5 class="card-title">Final Document Status and Summary</h5>
                        </div>
                        <div class="card-body">
                            <div class="row d-flex align-items-center justify-content-between">
                                <div class="col-auto">
                                    <p class="text-muted mb-2">Summary and Conclusion:</p>
                                    <!-- Document Status Summary -->
                                    <p class="text-primary mb-0">Document Approved</p>
                                    <p class="text-muted">Date Approved: March 26, 2025</p>
                                    <p class="text-muted">This document has undergone thorough verification and validation procedures, ensuring its accuracy, legitimacy, and adherence to required standards. All necessary checks, including plagiarism, availability, credibility, and legitimacy, have been successfully completed. The document is now in a finalized state and ready for distribution.</p>
                                    <p class="text-muted mb-0">We recommend sharing this document with the relevant stakeholders for further action or reference.</p>
                                </div>
                                <!-- Right Section: Validation Status Card -->
                                <div class="col-auto ms-auto" id="validation-status">
                                    <div class="card p-3 shadow-sm" style="width: 200px; background-color: white; border-radius: 10px;">
                                        <p class="text-muted fw-bold">Document Validation</p>
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
