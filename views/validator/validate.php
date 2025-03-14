<!DOCTYPE html>
<html lang="en">

<head>
	<?php include "../Components/head.php" ?>
	
</head>

<body>
	<div class="wrapper">
		<?php include "./ValidatorSideBar.php" ?>

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
					<h1 class="h3">Validate Document</h1>    
					<div class="container-fluid p-0">

						<!-- Document Upload Section -->
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Upload & Validate</h5>
							</div>
							<div class="card-body">
								<!-- Wrap the form in a new container -->
								<div class="form-container">
									<form action="validate_paper.php" method="POST" enctype="multipart/form-data">
										<div class="mb-3">
											<label for="paperFile" class="form-label">Upload Paper (PDF/DOCX)</label>
											<input type="file" class="form-control" id="paperFile" name="paperFile" required>
										</div>

										<!-- File Type & Size Validation -->
										<div class="mb-3">
											<label for="issnIsbn" class="form-label">Enter ISSN/ISBN</label>
											<input type="text" class="form-control" id="issnIsbn" name="issnIsbn" placeholder="Enter ISSN or ISBN" required>
										</div>

										<!-- Additional User Inputs -->
										<div class="mb-3">
											<label for="docType" class="form-label">Document Type</label>
											<select class="form-control" id="docType" name="docType" required>
												<option value="journal">Journal</option>
												<option value="book">Book</option>
												<option value="research_paper">Research Paper</option>
											</select>
										</div>

										<!-- Advanced Options (Plagiarism Check, Validation Level) -->
										<div class="mb-3">
											<label class="form-label">Validation Level</label><br>
											<select class="form-control" name="validationLevel">
												<option value="basic">Basic</option>
												<option value="advanced">Advanced</option>
											</select>
										</div>

										<div class="mb-3">
											<label class="form-label">Enable Plagiarism Check</label><br>
											<input type="checkbox" name="enablePlagiarism" value="1"> Check for Plagiarism
										</div>

										<!-- Submit Button -->
										<div class="d-flex justify-content-center">
											<button type="submit" class="btn btn-primary">Validate</button>
										</div>
									</form>
								</div>
							</div>
						</div>

						<!-- Validation Results -->
						<div class="card mt-3">
							<div class="card-header">
								<h5 class="card-title">Validation Results</h5>
							</div>
							<div class="card-body">
								<div id="validationResult">
									<p class="text-muted">Upload a document to see results.</p>
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
